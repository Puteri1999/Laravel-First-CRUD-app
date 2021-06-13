<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
{
    public function addPatient()
    {
        return view('add-patient');
    }

    public function savePatient(Request $request)
    {
        DB::table('clinic_staffs')->insert([
            'name'=> $request->name,
            'gender'=> $request->gender
        ]);

        return back()->with('patient_add','Patient added successfully');
    }

    public function patientList()
    {
        $patients = DB::table('clinic_staffs')->get();
        return view('patient-list', compact('patients'));
    }

    public function updatePatient($id)
    {
        $patient = DB::table('clinic_staffs')->where('id',$id)->first();
        return view('update-patient',compact('patient'));
    }

    public function donePatient(Request $request)
    {
        DB::table('clinic_staffs')->where('id',$request->id)-> update([
            'name'=> $request->name,
            'gender'=> $request->gender
        ]);
        return back()->with('patient_update','Patient updated successfully');
    }

    public function deletePatient($id)
    {
        DB::table('clinic_staffs')->where('id', $id) ->delete();
        return back()->with('patient_delete','Patient deleted successfully');
    }
}
