<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

use App\Models\MigratedPatient;
use App\Models\MigratedRecord;

use DB;
class PatientTransferController extends Controller
{
    public function transfer($id)
    {
        $patient = Patient::findOrFail($id);

        // Transfer data to migrated_patient table
        MigratedPatient::create($patient->toArray());

        // Transfer data to migrated_records table
        MigratedRecord::create([
            'patient_id' => $patient->patient_id,
            'name' => $patient->first_name . ' ' . $patient->last_name,
            'mobile'=>$patient->mobile_1,
            'status' => 'migrated'
        ]); 

        

        $patient->delete();
        

      

        return redirect('mig-rec');
    }
}

