<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use DB;
use Carbon\Carbon;
use App\Models\Payment;






class BillController extends Controller
{
    public function create($patient_id)

    {
        $data['pat'] = DB::table('patient_details')->where('patient_id',$patient_id)->get();
        return view('admin.patient.bills.add-bills')->with('data',$data);
    }

    public function bills(){

        $data['pat'] = DB::table('patient_details')->get();
        $data['bills'] = DB::table('payments')
            ->select('payments.*')
            ->join(DB::raw('(SELECT MAX(id) as max_id FROM payments GROUP BY patient_id) as latest_payments'), 'payments.id', '=', 'latest_payments.max_id')
            ->orderBy('created_at', 'desc')
            ->get();
          return view('admin.patient.bills')->with('data',$data);
      }


    


    public function add_details($patient_id)
    {
        $data['pat'] = DB::table('patient_details')->where('patient_id',$patient_id)->get();
        return view('admin.patient-details.add-patient')->with('data',$data);
    }



    
    public function add_payment(Request $request)
    {
        $fourDigitId = strtoupper(bin2hex(random_bytes(3)));
        $lastTransaction = DB::table('payments')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789manikandan'; 
        $data = [
            'patient_id' => $request->input('b-id'),
            'name' => $request->input('b-name'),
            'invoice' => $fourDigitId,
            'address' => $request->input('b-address'),  
            'date' => $request->input('b-date'),
            'time' => $request->input('b-time'),
            'payment' => $request->input('b-status'),
            'amount' => $request->input('b-amount'),
            
           

            'previous_hash' => $previous_hash,

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

           
        ];
         // Mine the block (Proof of Work)
         $minedData = payment::mineBlock($data);
         $data['hash'] = $minedData['hash'];
         $data['nonce'] = $minedData['nonce'];
            // Store the block in the blockchain
         payment::storeInNode($data);
        return redirect('bills');

    }

    
    public function delete_bills($id)
    {
        DB::table('payments')->where('id', $id)->delete();
        return redirect('bills')->with('success', 'Bill deleted successfully');
    }
   

    


}
