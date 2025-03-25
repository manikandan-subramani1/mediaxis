<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

use Auth;


class CustomerController extends Controller
{
    public function user_dashboard(){
        $patient_id=Auth::user()->p_id;
        
        $data['pat'] = DB::table('patient_details')->where('patient_id',$patient_id)->get();
        $data['treatment'] = DB::table('treatment_history')->where('patient_id',$patient_id)->orderBy('created_at', 'desc')->get();
        $data['payments'] = DB::table('payments')->where('patient_id', $patient_id)->orderBy('created_at', 'desc')->get();
        $data['payment'] = DB::table('payments')->where('patient_id', $patient_id)->orderBy('created_at', 'desc')->limit(1)->get();
        return view('customer.user-dashboard')->with('data', $data);
    }

    public function user($patient_id){
        $data['pat'] = DB::table('patient_details')->where('patient_id',$patient_id)->get();
        $data['treatment'] = DB::table('treatment_history')->where('patient_id',$patient_id)->orderBy('created_at', 'desc')->get();
        $data['payments'] = DB::table('payments')->where('patient_id', $patient_id)->orderBy('created_at', 'desc')->get();
        $data['payment'] = DB::table('payments')->where('patient_id', $patient_id)->orderBy('created_at', 'desc')->limit(1)->get();
        return view('customer.user-dashboard')->with('data', $data);

    }

    public function enquiry(Request $request){
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'treatment' => $request->input('treatment'),
           
        ];

        DB::table('enquiry')->insert($data);
        return redirect()->back()->with('message', 'Enquiry submitted successfully!');
    }


    public function enquiries(){
        $data['enquiries'] = DB::table('enquiry')->orderBy('time', 'desc')->get();
        return view('admin.patient.enquiry')->with('data', $data);
    }

    public function deleteEnquiry($id){
        DB::table('enquiry')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Enquiry deleted successfully!');
    }

}
