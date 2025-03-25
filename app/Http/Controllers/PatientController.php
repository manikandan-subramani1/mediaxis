<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\treatment;
use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Customer;
use Hash;

class PatientController extends Controller
{
    public function patient_register(Request $request)
    {
        $fourDigitId = random_int(1000, 9999);
        $lastTransaction = DB::table('patient_details')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789manikandan'; 
        $data = [
            'patient_id' => $fourDigitId,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'dob' => $request->input('dob'),
            'mobile_1' => $request->input('mobile-1'),
            'mobile_2' => $request->input('mobile-2'),
            'email' => $request->input('email'),
            'blood' => $request->input('blood'),
            'gender' => $request->input('gender'),
            'marital' => $request->input('marital'),
            'address_1' => $request->input('address-1'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'emergency_contact_name' => $request->input('g-name'),
            'emergency_contact_mobile' => $request->input('g-mobile'),
            'emergency_contact_address' => $request->input('g-address'),
            'emergency_contact_relationship' => $request->input('g-relation'),
            'emergency_contact_city' => $request->input('g-city'),
            'emergency_contact_state' => $request->input('g-state'),
            'emergency_contact_zip' => $request->input('g-zip'),
            'previous_hash' => $previous_hash,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        if($image=$request->file('profile')){
            $name=$image->getClientOriginalName();
            $image->move(public_path('/uploads/Profiles'),$name);             
            $data['image'] = $name; 
          }

        // Mine the block (Proof of Work)
        $minedData = Patient::mineBlock($data);
        $data['hash'] = $minedData['hash'];
        $data['nonce'] = $minedData['nonce'];

        Patient::storeInNode($data);


          $mob=$request->input('mobile-1');
          $mobile1=substr($mob, -4);
          $dob=$request->input('dob');
          $year=date('Y',strtotime($dob) );
          $password=$mobile1.$year;
      
     
            $data['p_id'] = $fourDigitId;
            $data['name'] = $request->first_name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make( $password);
            $data['email_verified_at']=Carbon::now();

            $id=Customer::create($data)->id;

        return redirect('patient/login');
    }


    public function patient_register_admin(Request $request)
    {
        $fourDigitId = random_int(1000, 9999);
        $lastTransaction = DB::table('patient_details')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789manikandan'; 
        $data = [
            'patient_id' => $fourDigitId,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'dob' => $request->input('dob'),
            'mobile_1' => $request->input('mobile-1'),
            'mobile_2' => $request->input('mobile-2'),
            'email' => $request->input('email'),
            'blood' => $request->input('blood'),
            'gender' => $request->input('gender'),
            'marital' => $request->input('marital'),
            'address_1' => $request->input('address-1'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'emergency_contact_name' => $request->input('g-name'),
            'emergency_contact_mobile' => $request->input('g-mobile'),
            'emergency_contact_address' => $request->input('g-address'),
            'emergency_contact_relationship' => $request->input('g-relation'),
            'emergency_contact_city' => $request->input('g-city'),
            'emergency_contact_state' => $request->input('g-state'),
            'emergency_contact_zip' => $request->input('g-zip'),
            'previous_hash' => $previous_hash,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        if($image=$request->file('profile')){
            $name=$image->getClientOriginalName();
            $image->move(public_path('/uploads/Profiles'),$name);             
            $data['image'] = $name; 
          }

        // Mine the block (Proof of Work)
        $minedData = Patient::mineBlock($data);
        $data['hash'] = $minedData['hash'];
        $data['nonce'] = $minedData['nonce'];

        Patient::storeInNode($data);


          $mob=$request->input('mobile-1');
          $mobile1=substr($mob, -4);
          $dob=$request->input('dob');
          $year=date('Y',strtotime($dob) );
          $password=$mobile1.$year;
      
     
            $data['p_id'] = $fourDigitId;
            $data['name'] = $request->first_name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make( $password);
            $data['email_verified_at']=Carbon::now();

            $id=Customer::create($data)->id;

            return redirect('patient_details');
    }



    public function add_treatment(Request $request)
    {
        
        $lastTransaction = DB::table('treatment_history')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789manikandan'; 
        $data = [
            'patient_id' => $request->input('pat-id'),
            'name' => $request->input('pat-name'),
            'mobile' => $request->input('pat-mobile'),
            'date' => $request->input('pat-date'),
            'time' => $request->input('pat-time'),
            'treatment' => $request->input('pat-treatment'),
            'msg' => $request->input('pat-msg'),
            'doctor' => $request->input('pat-doctor'),
            'amount' => $request->input('pat-amount'),
           

            'previous_hash' => $previous_hash,

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

           
        ];
         // Mine the block (Proof of Work)
         $minedData = treatment::mineBlock($data);
         $data['hash'] = $minedData['hash'];
         $data['nonce'] = $minedData['nonce'];
 
         treatment::storeInNode($data);
        return redirect('patient_details');

    }

    public function delete_patient($id)
    {
        $data['pat']=DB::table('patient_details')->where('id',$id)-> delete();
        return redirect('patient/dashboard');
    }
}
