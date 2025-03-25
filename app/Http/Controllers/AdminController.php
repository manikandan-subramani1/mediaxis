<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Works;
use DB;
use Auth;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {      
        $this->middleware('auth');  
        $this->admin = new Admin();
        $this->works = new Works();
    }
    public function home(){
      $data['patient']=DB::table('patient_details')->get();
      $data['payments'] = DB::table('payments')->get();
      $data['enquiry'] = DB::table('enquiry')->get();
      $data['migration'] = DB::table('migreq')->get();
      $data['treatment'] = DB::table('treatment_history')->get();

      
        return view('dashboard')->with('data',$data);
    }
    
    public function admin(){

        return view('ad2-dash');

    }

    public function mig_view(){
      $data['mp']=DB::table('migrated_patients')->get();

        return view('admin.patient.mig-pat')->with('data',$data);
    }

    public function mig_record(){
      $data['mr']=DB::table('migrated_records')->get();

        return view('admin.patient.mig-rec')->with('data',$data);
    }

    public function pat_view($patient_id)

    { 
      $data['treatment'] = DB::table('treatment_history')->where('patient_id',$patient_id)->orderBy('created_at', 'desc')->get();
      $data['payments'] = DB::table('payments')->where('patient_id', $patient_id)->orderBy('created_at', 'desc')->get();
      $data['payment'] = DB::table('payments')->where('patient_id', $patient_id)->orderBy('created_at', 'desc')->limit(1)->get();
     
      $data['pat']=DB::table('migrated_patients')->where('patient_id',$patient_id)->get();
      return view('admin.patient.mig-see')->with('data',$data);
    }

    public function admin_work_order(){
        $data['ord']=DB::table('patient_details')->get();
        $data['payments'] = DB::table('patient_details')->get();
        return view('admin.patient.details')->with('data',$data);
    }

    public function admin_new_order(){
        return view('admin.work.admin-new-order');
        
    }

    

    public function insert_work_order_admin(Request $request){


        $sixDigitId = random_int(100000, 999999);
              
       
      //  $nodeTable = "work{$request->node}_order"; // Select Table as Node

        $lastTransaction = DB::table('order')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789pushparaj';  


        $data = [
            'job_id' => $sixDigitId,
            'buyer' => $request->input('buyer'),
            'brand' => $request->input('brand'),
            'season' =>$request->input('season'),
            'style_number' => $request->input('style_number'),
            'description' => $request->input('description'),
            'internal_number' => $request->input('internal_number'),
            'quantity' => $request->input('quantity'),
            'size1' => $request->input('size1'),
            'size2' => $request->input('size2'),
            'size3' => $request->input('size3'),
            'size4' => $request->input('size4'),
            'assigned' => $request->input('assigned'),
            'quantity' => $request->input('quantity'),
            'ass_date' => $request->input('ass_date'),
            'deli_date' => $request->input('deli_date'),
            'message' => $request->input('message'),          
            'previous_hash' => $previous_hash,
            'created_by' => Auth::user()->email,
            'created_at' => Carbon::now(),
           
        ];


         // Mine the block (Proof of Work)
         $minedData = Works::mineBlock($data);
         $data['hash'] = $minedData['hash'];
         $data['nonce'] = $minedData['nonce'];

         if($image=$request->file('printing')){
            $name=$image->getClientOriginalName();
            $image->move(public_path('/uploads/printing'),$name);             
            $data['printing'] = $name; 
          }
          if($image1=$request->file('embroiding')){
            $name1=$image1->getClientOriginalName();
            $image1->move(public_path('/uploads/embroiding'),$name1);             
            $data['embroiding'] = $name1; 
          }
          if($image2=$request->file('stiching')){
            $name2=$image2->getClientOriginalName();
            $image2->move(public_path('/uploads/stiching'),$name2);             
            $data['stiching'] = $name2; 
          }
          if($image3=$request->file('ironing')){
            $name3=$image->getClientOriginalName();
            $image3->move(public_path('/uploads/ironing'),$name3);             
            $data['ironing'] = $name3; 
          }
          if($image4=$request->file('packaging')){
            $name4=$image->getClientOriginalName();
            $image4->move(public_path('/uploads/packaging'),$name4);             
            $data['packaging'] = $name4; 
          }
       
       

        Works::storeInNode($data);
        
        return redirect('admin-new-order');



    }

    


    
}

