<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Works;
use DB;
use Auth;
use Carbon\Carbon;

class WorkorderController extends Controller
{
    public function __construct()
    {        
        $this->works = new Works();
    }

    public function create_job_work(){
        $work = Works::getAllNodeTransactions();
        $mergedTransactions = [];  
       
    foreach ($work as $node => $records) {
        foreach ($records as $record) {
            $orderNumber = $record->job_id;

            // Compute the expected hash using stored data
            $computedHash = hash('sha256', 
                $record->previous_hash . 
                $record->job_id . 
                $record->title . 
                $record->number . 
                $record->quantity . 
                $record->nonce
            );

            // Check if data is modified (hash mismatch)
                    $isModified = $computedHash !== $record->hash;

                    if (isset($mergedTransactions[$orderNumber])) {
                        // If another node has a different hash, mark as modified
                        if ($mergedTransactions[$orderNumber]['hash'] !== $record->hash) {
                            $mergedTransactions[$orderNumber]['modified'] = true;
                        }
                    } else {
                        $mergedTransactions[$orderNumber] = (array) $record;
                        $mergedTransactions[$orderNumber]['modified'] = $isModified; // Mark if modified
                    }
                }
            }   

       
        return view('customer.work.reports', compact('mergedTransactions'));
    }





    public function create_new_work(){
        return view('customer.work.new-work');
    }

    public function insert_work_order(Request $request){
       
        $sixDigitId = random_int(100000, 999999);
              
       
        $nodeTable = "work{$request->node}_order"; // Select Table as Node
        $lastTransaction = DB::table('work_order')->latest()->first();
        $previous_hash = $lastTransaction ? $lastTransaction->hash : '00000abc123456789pushparaj';

     


        $data = [
            'job_id' => $sixDigitId,
            'title' => $request->input('title'),
            'number' => $request->input('number'),
            'department' =>$request->input('department'),
            'quantity' => $request->input('quantity'),
            'assigned_person' => $request->input('assigned-person'),
            'assigned_task' => $request->input('assigned-task'),
            'end_date' => $request->input('end-date'),
            'message' => $request->input('message'),
            'previous_hash' => $previous_hash,
            'created_by' => Auth::user()->email,
            'created_at' => Carbon::now(),
           
        ];


         // Mine the block (Proof of Work)
         $minedData = Works::mineBlock($data);
         $data['hash'] = $minedData['hash'];
         $data['nonce'] = $minedData['nonce'];
       
       

        Works::storeInNode($nodeTable, $data);
        // Synchronize Data Across All Nodes
        $this->syncTransaction($data, $nodeTable);      

        return redirect('customer/create-job-work');

    }

    // Synchronize Transaction Across All Nodes
    public function syncTransaction($data, $sourceNode)
    {
        for ($i = 1; $i <= 2; $i++) {
            $nodeTable = "work{$i}_order";
            if ($nodeTable !== $sourceNode) { // Skip the source node
                if (!DB::table($nodeTable)->where('job_id', $data['job_id'])->exists()) {
                    Works::storeInNode($nodeTable, $data);
                }
            }
        }
    }


    public function work_old()
    {
        $data['job_id'] = $sixDigitId;
        $data['title']=$request->input('title');
        $data['number']=$request->input('number');
        $data['department']=$request->input('department');
        $data['quantity']=$request->input('quantity');
        $data['assigned_person']=$request->input('assigned-person');
        $data['assigned_task']=$request->input('assigned-task');
        $data['end_date']=$request->input('end-date');
        $data['message']=$request->input('message');
       
        $data['created_by']= Auth::user()->email;
        $data['created_at']= Carbon::now();
        $id=$this->works->storeWorkOrder($nodeTable,$data);

    }

}
