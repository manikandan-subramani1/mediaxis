<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Migration;

use DB;


class MigrationController extends Controller
{
    public function req_mig(Request $request)
    {
        $fourDigitId = strtoupper(bin2hex(random_bytes(3)));
        $lastTransaction = DB::table('migreq')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789manikandan'; 
        $data = [
            'patient_id' => $request->input('patient_id'),
            'name' => $request->input('name'),
            'y_hospital' => $request->input('patient_hospital'),
            'm_hospital' => $request->input('migration_hospital'),  
            'y_reason'  => $request->input('patient_reason'),
            'm_id' => $fourDigitId,        
            'previous_hash' => $previous_hash,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
         // Mine the block (Proof of Work)
         $minedData = Payment::mineBlock($data);
         $data['hash'] = $minedData['hash'];
         $data['nonce'] = $minedData['nonce'];
            // Store the block in the blockchain
         Migration::storeInNode($data);
        return redirect('/patient/dashboard')->with('success', 'Migration Requested Successfully');

    }

    public function migration_view()

    {
        $data['mig'] = DB::table('migreq')->get();
        $data['patient'] = DB::table('patient_details')->get();

        return view('admin.patient.migrate')->with('data',$data);
    }

    
    public function deleteMigrate($patient_id){
        DB::table('migreq')->where('patient_id', $patient_id)->delete();
        return redirect()->back()->with('message', 'Enquiry deleted successfully!');
    }

}
