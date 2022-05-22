<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewCar;
use App\Exports\NewCarExport;
use App\Imports\NewCarImport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use File;

class NewCarController extends Controller
{
  // all cars
  public function index()
  {

    $newcar = NewCar::orderBy('id')->paginate(10);
      return view('admin.newcars.index')->with('newcars',$newcar);
  }



  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   //create form
  public function create()
  {
      return view('admin.newcars.create');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   //store
  public function store(Request $request)
  {
      // $this->validate($request,[
      //   'enquiry_date' => 'required',
      //   'name' => 'required',
      //   'contact1' => 'required',
      //   'address' => 'required',
      //   'qualification' => 'required',
      //   'mother_name' => 'required',
      //   'vehicle_brand' => 'required',
      //   'vehicle_model' => 'required',
      //   'vehicle_color' => 'required',
      //   'vehicle_booking_amount' => 'required',
      //   'vehicle_ex_showroom' => 'required',
      //   'vehicle_onroad' => 'required',
      //   'vehicle_cost' => 'required',
      //   'post_delivery_documents' => 'required'
      // ]);
      /*UPLOADING IMAGES TO FOLDER*/
    /*Invoice */
    if($request->hasFile('invoice_photo'))
    {
    $invoice_photo = $request->invoice_photo;
    $invoice_photo_new_name = "uploads/newcars/ownerdocuments/invoice/".time().$invoice_photo->getClientOriginalName();
    $invoice_photo->move('uploads/newcars/ownerdocuments/invoice', $invoice_photo_new_name);
  }else{
    $invoice_photo_new_name = "";
  }
    /*insurance*/
    if($request->hasFile('insurance_photo'))
    {
    $insurance_photo = $request->insurance_photo;
    $insurance_photo_new_name = "uploads/newcars/ownerdocuments/insurance/".time().$insurance_photo->getClientOriginalName();
    $insurance_photo->move('uploads/newcars/ownerdocuments/insurance', $insurance_photo_new_name);
  }else{
    $insurance_photo_new_name = "";
  }
    /*rcbook*/
    if($request->hasFile('rcbook_photo'))
    {
    $rcbook_photo = $request->rcbook_photo;
    $rcbook_photo_new_name = "uploads/newcars/ownerdocuments/rcbook/".time().$rcbook_photo->getClientOriginalName();
    $rcbook_photo->move('uploads/newcars/ownerdocuments/rcbook', $rcbook_photo_new_name);
  }else{
    $rcbook_photo_new_name = "";
  }
    /*fastag*/
    if($request->hasFile('fastag_photo'))
    {
    $fastag_photo = $request->fastag_photo;
    $fastag_photo_new_name = "uploads/newcars/ownerdocuments/fastag/".time().$fastag_photo->getClientOriginalName();
    $fastag_photo->move('uploads/newcars/ownerdocuments/fastag', $fastag_photo_new_name);
  }else{
    $fastag_photo_new_name = "";
  }
    /*light bill*/
    if($request->hasFile('lightbill_photo'))
    {
    $lightbill_photo = $request->lightbill_photo;
    $lightbill_photo_new_name = "uploads/newcars/ownerdocuments/lightbill/".time().$lightbill_photo->getClientOriginalName();
    $lightbill_photo->move('uploads/newcars/ownerdocuments/lightbill', $lightbill_photo_new_name);
  }else{
    $lightbill_photo_new_name = "";
  }
    /*pancard*/
    if($request->hasFile('pancard_photo'))
    {
    $pancard_photo = $request->pancard_photo;
    $pancard_photo_new_name = "uploads/newcars/ownerdocuments/pancard/".time().$pancard_photo->getClientOriginalName();
    $pancard_photo->move('uploads/newcars/ownerdocuments/pancard', $pancard_photo_new_name);
  }else{
    $pancard_photo_new_name = "";
  }
    /*aadharcard*/
    if($request->hasFile('aadharcard_photo'))
    {
    $aadharcard_photo = $request->aadharcard_photo;
    $aadharcard_photo_new_name = "uploads/newcars/ownerdocuments/aadharcard/".time().$aadharcard_photo->getClientOriginalName();
    $aadharcard_photo->move('uploads/newcars/ownerdocuments/aadharcard', $aadharcard_photo_new_name);
  }else{
    $aadharcard_photo_new_name = "";
  }


      $newcar = NewCar::create([
        'enquiry_date'=> $request->enquiry_date,
         'name'=> $request->name,
         'contact1'=> $request->contact1,
         'contact2'=> $request->contact2,
         'address'=> $request->address,
         'qualification'=> $request->qualification,
         'email'=> $request->email,
         'office_address'=> $request->office_address,
         'office_contact'=> $request->office_contact,
         'mother_name'=> $request->mother_name,
         'spouse_name'=> $request->spouse_name,
         'spouse_occupation'=> $request->spouse_occupation,
         'spouse_contact'=> $request->spouse_contact,
         'no_of_dependents'=> $request->no_of_dependents,
         'reference1_name'=> $request->reference1_name,
         'reference1_contact'=> $request->reference1_contact,
         'reference1_address'=> $request->reference1_address,
         'reference2_name'=> $request->reference2_name,
         'reference2_contact'=> $request->reference2_contact,
         'reference2_address'=> $request->reference2_address,
         'vehicle_brand'=> $request->vehicle_brand,
         'vehicle_model'=> $request->vehicle_model,
         'vehicle_color'=> $request->vehicle_color,
         'vehicle_dealer'=> $request->vehicle_dealer,
         'vehicle_financer'=> $request->vehicle_financer,
         'vehicle_booking_amount'=> $request->vehicle_booking_amount,
         'vehicle_ex_showroom'=> $request->vehicle_ex_showroom,
         'vehicle_1_tcs'=> $request->vehicle_1_tcs,
         'vehicle_depot'=> $request->vehicle_depot,
         'vehicle_insurance'=> $request->vehicle_insurance,
         'vehicle_rto'=> $request->vehicle_rto,
         'vehicle_warranty'=> $request->vehicle_warranty,
         'vehicle_accessories'=> $request->vehicle_accessories,
         'vehicle_onroad'=> $request->vehicle_onroad,
         'vehicle_discount'=> $request->vehicle_discount,
         'vehicle_cost'=> $request->vehicle_cost,
         'vehicle_finance_approved'=> $request->vehicle_finance_approved,
         'vehicle_emi'=> $request->vehicle_emi,
         'vehicle_stampduty'=> $request->vehicle_stampduty,
         'vehicle_downpayment'=> $request->vehicle_downpayment,
         'vehicle_part1'=> $request->vehicle_part1,
         'vehicle_part2'=> $request->vehicle_part2,
         'dealer_payment'=> $request->dealer_payment,
         'dealer_disbursement'=> $request->dealer_disbursement,
         'dealer_balance'=> $request->dealer_balance,
         'emi_date'=> $request->emi_date,
         'loan_account_number'=> $request->loan_account_number,
         'post_delivery_documents'=> $request->post_delivery_documents,
         'invoice_number'=> $request->invoice_number,
         'invoice_photo'=> $invoice_photo_new_name,
         'insurance_number'=> $request->insurance_number,
         'insurance_photo'=> $insurance_photo_new_name,
         'rcbook_number'=> $request->rcbook_number,
         'rcbook_photo'=> $rcbook_photo_new_name,
         'fastag_number'=> $request->fastag_number,
         'fastag_photo'=> $fastag_photo_new_name,
         'pancard_number'=> $request->pancard_number,
         'pancard_photo'=> $pancard_photo_new_name,
         'lightbill_number'=> $request->lightbill_number,
         'lightbill_photo'=> $lightbill_photo_new_name,
         'aadharcard_number'=> $request->aadharcard_number,
         'aadharcard_photo'=> $aadharcard_photo_new_name

      ]);



      Session::flash('success', 'New Car Enquiry was added successfully.');

      return redirect()->route('newcars');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   //show single car detail
  public function show($id)
  {
    $newcar = NewCar::find($id);

      return view('admin.newcars.show')->with('newcars',$newcar);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   //edit
  public function edit($id)
  {
    $newcar = NewCar::find($id);
    return view('admin.newcars.edit')->with('newcars',$newcar);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   //update
  public function update(Request $request, $id)
  {
    // $this->validate($request,[
    //   'enquiry_date' => 'required',
    //   'name' => 'required',
    //   'contact1' => 'required',
    //   'address' => 'required',
    //   'qualification' => 'required',
    //   'mother_name' => 'required',
    //   'vehicle_brand' => 'required',
    //   'vehicle_model' => 'required',
    //   'vehicle_color' => 'required',
    //   'vehicle_booking_amount' => 'required',
    //   'vehicle_ex_showroom' => 'required',
    //   'vehicle_onroad' => 'required',
    //   'vehicle_cost' => 'required',
    //   'post_delivery_documents' => 'required'
    // ]);


      $newcar = NewCar::find($id);

      /*UPLOADING IMAGES TO FOLDER*/
    /*invoice*/
    if($request->hasFile('invoice_photo'))
    {
      $invoice_photo_path = $newcar->invoice_photo;
      if(File::exists($invoice_photo_path)) {
        File::delete($invoice_photo_path);
      }
    $invoice_photo = $request->invoice_photo;
    $invoice_photo_new_name = "uploads/newcars/ownerdocuments/invoice/".time().$invoice_photo->getClientOriginalName();
    $invoice_photo->move('uploads/newcars/ownerdocuments/invoice', $invoice_photo_new_name);
    $newcar->invoice_photo = $invoice_photo_new_name;
    }
    /*insurance*/
    if($request->hasFile('insurance_photo'))
    {
      $insurance_photo_path = $newcar->insurance_photo;
      if(File::exists($insurance_photo_path)) {
        File::delete($insurance_photo_path);
      }
    $insurance_photo = $request->insurance_photo;
    $insurance_photo_new_name = "uploads/newcars/ownerdocuments/insurance/".time().$insurance_photo->getClientOriginalName();
    $insurance_photo->move('uploads/newcars/ownerdocuments/insurance', $insurance_photo_new_name);
    $newcar->insurance_photo = $insurance_photo_new_name;
    }
    /*rcbook*/
    if($request->hasFile('rcbook_photo'))
    {
      $rcbook_photo_path = $newcar->rcbook_photo;
      if(File::exists($rcbook_photo_path)) {
        File::delete($rcbook_photo_path);
      }
    $rcbook_photo = $request->rcbook_photo;
    $rcbook_photo_new_name = "uploads/newcars/ownerdocuments/rcbook/".time().$rcbook_photo->getClientOriginalName();
    $rcbook_photo->move('uploads/newcars/ownerdocuments/rcbook', $rcbook_photo_new_name);
    $newcar->rcbook_photo = $rcbook_photo_new_name;
    }
    /*fastag*/
    if($request->hasFile('fastag_photo'))
    {
      $fastag_photo_path = $newcar->fastag_photo;
      if(File::exists($fastag_photo_path)) {
        File::delete($fastag_photo_path);
      }
    $fastag_photo = $request->fastag_photo;
    $fastag_photo_new_name = "uploads/newcars/ownerdocuments/fastag/".time().$fastag_photo->getClientOriginalName();
    $fastag_photo->move('uploads/newcars/ownerdocuments/fastag', $fastag_photo_new_name);
    $newcar->fastag_photo = $fastag_photo_new_name;
    }
    /*purchaser light bill*/
    if($request->hasFile('lightbill_photo'))
    {
      $lightbill_photo_path = $newcar->lightbill_photo;
      if(File::exists($lightbill_photo_path)) {
        File::delete($lightbill_photo_path);
      }
    $lightbill_photo = $request->lightbill_photo;
    $lightbill_photo_new_name = "uploads/usedcars/ownerdocuments/lightbill/".time().$lightbill_photo->getClientOriginalName();
    $lightbill_photo->move('uploads/usedcars/ownerdocuments/lightbill', $lightbill_photo_new_name);
    $usedcar->lightbill_photo = $lightbill_photo_new_name;
    }
    /* Pancard*/
    if($request->hasFile('pancard_photo'))
    {
      $pancard_photo_path = $newcar->pancard_photo;
      if(File::exists($pancard_photo_path)) {
        File::delete($pancard_photo_path);
      }
    $pancard_photo = $request->pancard_photo;
    $pancard_photo_new_name = "uploads/newcars/ownerdocuments/pancard/".time().$pancard_photo->getClientOriginalName();
    $pancard_photo->move('uploads/newcars/ownerdocuments/pancard', $pancard_photo_new_name);
    $newcar->pancard_photo = $pancard_photo_new_name;
    }
    /*aadhar card*/
    if($request->hasFile('aadharcard_photo'))
    {
      $aadharcard_photo_path = $newcar->aadharcard_photo;
      if(File::exists($aadharcard_photo_path)) {
        File::delete($aadharcard_photo_path);
      }
    $aadharcard_photo = $request->aadharcard_photo;
    $aadharcard_photo_new_name = "uploads/newcars/ownerdocuments/aadharcard/".time().$aadharcard_photo->getClientOriginalName();
    $aadharcard_photo->move('uploads/newcars/ownerdocuments/aadharcard', $aadharcard_photo_new_name);
    $newcar->aadharcard_photo = $aadharcard_photo_new_name;
    }

       $newcar->enquiry_date = $request->enquiry_date;
       $newcar->name = $request->name;
       $newcar->contact1 = $request->contact1;
       $newcar->contact2 = $request->contact2;
       $newcar->address = $request->address;
       $newcar->qualification = $request->qualification;
       $newcar->email = $request->email;
       $newcar->office_address = $request->office_address;
       $newcar->office_contact = $request->office_contact;
       $newcar->mother_name = $request->mother_name;
       $newcar->spouse_name = $request->spouse_name;
       $newcar->spouse_occupation = $request->spouse_occupation;
       $newcar->spouse_contact = $request->spouse_contact;
       $newcar->no_of_dependents = $request->no_of_dependents;
       $newcar->reference1_name = $request->reference1_name;
       $newcar->reference1_contact = $request->reference1_contact;
       $newcar->reference1_address = $request->reference1_address;
       $newcar->reference2_name = $request->reference2_name;
       $newcar->reference2_contact = $request->reference2_contact;
       $newcar->reference2_address = $request->reference2_address;
       $newcar->vehicle_brand = $request->vehicle_brand;
       $newcar->vehicle_model = $request->vehicle_model;
       $newcar->vehicle_color = $request->vehicle_color;
       $newcar->vehicle_dealer = $request->vehicle_dealer;
       $newcar->vehicle_financer = $request->vehicle_financer;
       $newcar->vehicle_booking_amount = $request->vehicle_booking_amount;
       $newcar->vehicle_ex_showroom = $request->vehicle_ex_showroom;
       $newcar->vehicle_1_tcs = $request->vehicle_1_tcs;
       $newcar->vehicle_depot = $request->vehicle_depot;
       $newcar->vehicle_insurance = $request->vehicle_insurance;
       $newcar->vehicle_rto = $request->vehicle_rto;
       $newcar->vehicle_warranty = $request->vehicle_warranty;
       $newcar->vehicle_accessories = $request->vehicle_accessories;
       $newcar->vehicle_onroad = $request->vehicle_onroad;
       $newcar->vehicle_discount = $request->vehicle_discount;
       $newcar->vehicle_cost = $request->vehicle_cost;
       $newcar->vehicle_finance_approved = $request->vehicle_finance_approved;
       $newcar->vehicle_emi = $request->vehicle_emi;
       $newcar->vehicle_stampduty = $request->vehicle_stampduty;
       $newcar->vehicle_downpayment = $request->vehicle_downpayment;
       $newcar->vehicle_part1 = $request->vehicle_part1;
       $newcar->vehicle_part2 = $request->vehicle_part2;
       $newcar->dealer_payment = $request->dealer_payment;
       $newcar->dealer_disbursement = $request->dealer_disbursement;
       $newcar->dealer_balance = $request->dealer_balance;
       $newcar->emi_date = $request->emi_date;
       $newcar->loan_account_number = $request->loan_account_number;
       $newcar->post_delivery_documents = $request->post_delivery_documents;
       $newcar->invoice_number = $request->invoice_number;

       $newcar->insurance_number = $request->insurance_number;

       $newcar->rcbook_number = $request->rcbook_number;

       $newcar->fastag_number = $request->fastag_number;

       $newcar->pancard_number = $request->pancard_number;

       $newcar->lightbill_number = $request->lightbill_number;

       $newcar->aadharcard_number = $request->aadharcard_number;


       $newcar->save();

       Session::flash('success','New Car Enquiry details updated.');

      return redirect()->route('newcars');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   //Delete
  public function destroy($id)
  {
      $newcar = NewCar::find($id);
      //delete invoice
      $invoice_photo_path = $newcar->invoice_photo;
      if(File::exists($invoice_photo_path)) {
        File::delete($invoice_photo_path);
      }
      //delete insurance
      $insurance_photo_path = $newcar->insurance_photo;
      if(File::exists($insurance_photo_path)) {
        File::delete($insurance_photo_path);
      }
      //delete rcbook
      $rcbook_photo_path = $newcar->rcbook_photo;
      if(File::exists($rcbook_photo_path)) {
        File::delete($rcbook_photo_path);
      }
      //delete fastag
      $fastag_photo_path = $newcar->fastag_photo;
      if(File::exists($fastag_photo_path)) {
        File::delete($fastag_photo_path);
      }
      //delete pancard
      $pancard_photo_path = $newcar->pancard_photo;
      if(File::exists($pancard_photo_path)) {
        File::delete($pancard_photo_path);
      }
      //delete lightbill
      $lightbill_photo_path = $newcar->lightbill_photo;
      if(File::exists($lightbill_photo_path)) {
        File::delete($lightbill_photo_path);
      }
      //delete aadharcard
      $aadharcard_photo_path = $newcar->aadharcard_photo;
      if(File::exists($aadharcard_photo_path)) {
        File::delete($aadharcard_photo_path);
      }

      $newcar->delete();

      Session::flash('success','New Car Enquiry was deleted');

      return redirect()->back();
  }

  //excel import export

  public function export()
  {
      return Excel::download(new NewCarExport, 'newcars.xlsx');
  }

  /**
  * @return \Illuminate\Support\Collection
  */
  public function import()
  {
      Excel::import(new NewCarImport,request()->file('file'));
      return back();
  }
}
