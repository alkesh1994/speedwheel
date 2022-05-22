<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Insurance;
use App\Exports\TaskExport;
use App\Imports\TaskImport;
use Maatwebsite\Excel\Facades\Excel;

class InsuranceController extends Controller
{
  //all Insurance
  public function index()
  {
    $insurance = Insurance::all();
    return view('admin.insurances.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   //insurance create form
  public function create()
  {
      $insurance = Insurance::all();
      return view('admin.insurances.create');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   // store to data base
  public function store(Request $request)
  {
      // $this->validate($request,[
      //   'task' => 'required',
      //   'employee_id' => 'required'
      // ]);



      $task = Task::create([
        'task' => $request->task,
        'status' => $request->status,
        'employee_id' => $request->employee_id,
        'policy_expiry_date' => $request->policy_expiry_date,
        'name' => $request->name,
        'address' => $request->address,
        'mobile_number' => $request->mobile_number,
        'email' => $request->email,
        'cnglpg_kit' => $request->cnglpg_kit,
        'vehicle_brand' => $request->vehicle_brand,
        'vehicle_model' => $request->vehicle_model,
        'vehicle_registration_number' => $request->vehicle_registration_number,
        'vehicle_engine_number' => $request->vehicle_engine_number,
        'vehicle_chassis_number' => $request->vehicle_chassis_number,
        'vehicle_rta_code' => $request->vehicle_rta_code,
        'vehicle_cc' => $request->vehicle_cc,
        'number_of_seats' => $request->number_of_seats,
        'year_of_manufacture' => $request->year_of_manufacture,
        'basic_idv' => $request->basic_idv,
        'renewal_discount' => $request->renewal_discount,
        'renewal_idv' => $request->renewal_idv,
        'renewal_total_premium' => $request->renewal_total_premium,
        'renewal_ncb' => $request->renewal_ncb,
        'hpothecation' => $request->hpothecation,
        'addon_plan' => $request->addon_plan,
        'feedback' => $request->feedback
      ]);



      Session::flash('success', 'Insurance added successfully.');

      return redirect()->route('insurances');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   //show single insurance enquiry
  public function show($id)
  {
    $insurance = Insurance::find($id);

      return view('admin.insurances.show');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $insurance = Insurance::find($id);

      return view('admin.insurances.edit');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   //update to database
  public function update(Request $request, $id)
  {
      // $this->validate($request,[
      //   'task' => 'required',
      //   'employee_id' => 'required'
      // ]);


      $insurance = Insurance::find($id);

      $insurance->policy_expiry_date=$request->policy_expiry_date;
      $insurance->name=$request->name;
      $insurance->address=$request->address;
      $insurance->mobile_number=$request->mobile_number;
      $insurance->email=$request->email;
      $insurance->cnglpg_kit=$request->cnglpg_kit;
      $insurance->vehicle_brand=$request->vehicle_brand;
      $insurance->vehicle_model=$request->vehicle_model;
      $insurance->vehicle_registration_number=$request->vehicle_registration_number;
      $insurance->vehicle_engine_number=$request->vehicle_engine_number;
      $insurance->vehicle_chassis_number=$request->vehicle_chassis_number;
      $insurance->vehicle_rta_code=$request->vehicle_rta_code;
      $insurance->vehicle_cc=$request->vehicle_cc;
      $insurance->number_of_seats=$request->number_of_seats;
      $insurance->year_of_manufacture=$request->year_of_manufacture;
      $insurance->basic_idv=$request->basic_idv;
      $insurance->renewal_discount=$request->renewal_discount;
      $insurance->renewal_idv=$request->renewal_idv;
      $insurance->renewal_total_premium=$request->renewal_total_premium;
      $insurance->renewal_ncb=$request->renewal_ncb;
      $insurance->hypothecation=$request->hypothecation;
      $insurance->addon_plan=$request->addon_plan;
      $insurance->feedback=$request->feedback;
      $task->save();

      Session::flash('success','Insurance details updated.');

      return redirect()->route('insurances');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   // delete insurance
  public function destroy($id)
  {
      $insurance = Task::find($id);

      $insurance->delete();

      Session::flash('success','Insurance deleted!');

      return redirect()->back();
  }
}
