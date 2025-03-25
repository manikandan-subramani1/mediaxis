<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerVerificationController extends Controller
{
    public function notice()
    {
        return view('customer.auth.customer-verify-email');
    }

    public function verify(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid verification link.');
        }

        if ($customer->email_verified_at) {
            return redirect()->route('customer.login')->with('message', 'Email already verified.');
        }

        $customer->email_verified_at = now();
        $customer->save();

        return redirect()->route('customer.dashboard')->with('message', 'Email successfully verified!');
    }

    public function resend(Request $request)
    {
        $customer = Auth::guard('customer')->user();

        if ($customer->email_verified_at) {
            return redirect()->route('customer.dashboard')->with('message', 'Email already verified.');
        }

        $customer->notify(new \App\Notifications\CustomerVerifyEmail());

        return back()->with('message', 'Verification link sent!');
    }
}