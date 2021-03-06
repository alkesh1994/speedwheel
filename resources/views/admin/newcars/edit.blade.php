    @extends('layouts.app')    

    @section('content')

    <section class="content-header">
      <h1>
        New Car Enquiry

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Car Enquiry</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
      <!-- left column -->
      <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
      <div class="box-header with-border">
           <h3 class="box-title">Create New Car Enquiry</h3>
      </div>
      <div class="box-body">

      @include('admin.includes.errors')
      <form role="form" action="{{ route('newcar.update',['id' =>$newcars->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
      <!-- /*******************************
      //Owner Information
      /******************************/ -->
      <div class="row" style="padding:10px;">
           <div class="col-md-12">
                <div class="box box-default box-solid collapsed-box">
                     <div class="box-header with-border">
                          <h3 class="box-title">Personal Information</h3>
                          <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                          </div>
                          <!-- /.box-tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                          <div class="row" style="padding:5px;">
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="enquiry_date">Date</label>
                                   <input type="date" id="enquiry_date" name="enquiry_date" class="form-control" value="{{$newcars->enquiry_date}}">
                                 </div>
                            </div>
                              <div class="col-sm-9">
                                    <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" id="name" name="name" class="form-control" value="{{$newcars->name}}">
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="contact1">Contact 1</label>
                                      <input type="number" id="contact1" name="contact1" class="form-control" value="{{$newcars->contact1}}" >
                                    </div>
                               </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="contact2">Contact 2</label>
                                      <input type="number" id="contact2" name="contact2" class="form-control" value="{{$newcars->contact2}}">
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-12">
                                    <div class="form-group">
                                      <label for="address">Address</label>
                                      <textarea id="address" name="address" class="form-control" >{{$newcars->address}}</textarea>
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="email" id="email" name="email" class="form-control" value="{{$newcars->email}}" >
                                 </div>
                            </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="qualification">Qualification</label>
                                      <input type="text" id="qualification" name="qualification" class="form-control" value="{{$newcars->qualification}}" >
                                    </div>
                               </div>

                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="office_address">Office Address</label>
                                      <input type="text" id="office_address" name="office_address" class="form-control" value="{{$newcars->office_address}}" >
                                    </div>
                               </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="office_contact">Office Contact</label>
                                      <input type="number" id="office_contact" name="office_contact" class="form-control" value="{{$newcars->office_contact}}" >
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="mother_name">Mother's Name</label>
                                      <input type="text" id="mother_name" name="mother_name" class="form-control" value="{{$newcars->mother_name}}">
                                    </div>
                               </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="no_of_dependents">No. of Dependents</label>
                                      <input type="number" id="no_of_dependents" name="no_of_dependents" class="form-control" value="{{$newcars->no_of_dependents}}">
                                    </div>
                               </div>
                          </div>

                          <div class="row" style="padding:5px;">
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="spouse_name">Spouse Name</label>
                                      <input type="text" id="spouse_name" name="spouse_name" class="form-control" value="{{$newcars->spouse_name}}">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="spouse_occupation">Spouse Occupation</label>
                                      <input type="text" id="spouse_occupation" name="spouse_occupation" class="form-control" value="{{$newcars->spouse_occupation}}">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="spouse_contact">Spouse Contact</label>
                                      <input type="number" id="spouse_contact" name="spouse_contact" class="form-control" value="{{$newcars->spouse_contact}}">
                                    </div>
                               </div>
                          </div>

                          <div class="row" style="padding:5px;">
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference1_name">Reference 1 Name</label>
                                      <input type="text" id="reference1_name" name="reference1_name" class="form-control" value="{{$newcars->reference1_name}}">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference1_contact">Reference 1 Contact</label>
                                      <input type="number" id="reference1_contact" name="reference1_contact" class="form-control" value="{{$newcars->reference1_contact}}">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference1_address">Reference 1 Address</label>
                                      <input type="text" id="reference1_address" name="reference1_address" class="form-control" value="{{$newcars->reference1_address}}">
                                    </div>
                               </div>
                          </div>

                          <div class="row" style="padding:5px;">
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference2_name">Reference 2 Name</label>
                                      <input type="text" id="reference2_name" name="reference2_name" class="form-control" value="{{$newcars->reference2_name}}">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference2_contact">Reference 2 Contact</label>
                                      <input type="number" id="reference1_contact" name="reference2_contact" class="form-control" value="{{$newcars->reference2_contact}}">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference2_address">Reference 2 Address</label>
                                      <input type="text" id="reference2_address" name="reference2_address" class="form-control" value="{{$newcars->reference2_address}}" >
                                    </div>
                               </div>
                          </div>


                     </div>
                     <!-- /.box-body -->
                </div>
                <!-- /.box -->
           </div>
           <!-- /.col -->
      </div>
      <!-- /*******************************/
      //Purchasers Information
      /******************************/ -->
      <div class="row" style="padding:10px;">
           <div class="col-md-12">
                <div class="box box-default box-solid collapsed-box">
                     <div class="box-header with-border">
                          <h3 class="box-title">Vehicle Information</h3>
                          <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                          </div>
                          <!-- /.box-tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_brand">Vehicle Brand</label>
                                   <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control" value="{{$newcars->vehicle_brand}}" >
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_model">Vehicle Model</label>
                                   <input type="text" id="vehicle_model" name="vehicle_model" class="form-control" value="{{$newcars->vehicle_model}}" >
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_color">Vehicle Color</label>
                                   <input type="text" id="vehicle_color" name="vehicle_color" class="form-control" value="{{$newcars->vehicle_color}}" >
                                 </div>
                            </div>
                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_dealer">Vehicle Dealer</label>
                                   <input type="text" id="vehicle_dealer" name="vehicle_dealer" class="form-control" value="{{$newcars->vehicle_dealer}}">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_financer">Vehicle Financer</label>
                                   <input type="text" id="vehicle_financer" name="vehicle_financer" class="form-control" value="{{$newcars->vehicle_financer}}">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_ex_showroom">Ex Showroom Cost</label>
                                   <input type="text" id="vehicle_ex_showroom" name="vehicle_ex_showroom" class="form-control" value="{{$newcars->vehicle_ex_showroom}}">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_cost">Vehicle Purchase Cost </label>
                                   <input type="text" id="vehicle_cost" name="vehicle_cost" class="form-control" value="{{$newcars->vehicle_cost}}">
                                 </div>
                            </div>

                       </div>
                     </div>
                     <!-- /.box-body -->
                </div>
                <!-- /.box -->
           </div>
           <!-- /.col -->
      </div>
      <!-- /*******************************/
      //Vehicle Information
      /******************************/ -->
      <div class="row" style="padding:10px;">
           <div class="col-md-12">
                <div class="box box-default box-solid collapsed-box">
                     <div class="box-header with-border">
                          <h3 class="box-title">Cost Information</h3>
                          <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                          </div>
                          <!-- /.box-tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                       <div class="box-body">
                         <div class="row" style="padding:5px;">
                              <div class="col-sm-6">
                                   <div class="form-group">
                                     <label for="vehicle_booking_amount">Vehicle Booking Amount</label>
                                     <input type="number" id="vehicle_booking_amount" name="vehicle_booking_amount" class="form-control" value="{{$newcars->vehicle_booking_amount}}">
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                   <div class="form-group">
                                     <label for="vehicle_downpayment">Vehicle Downpayment</label>
                                     <input type="number" id="vehicle_downpayment" name="vehicle_downpayment" class="form-control" value="{{$newcars->vehicle_downpayment}}">
                                   </div>
                              </div>

                         </div>
                         <div class="row" style="padding:5px;">
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_1_tcs">1% TCS</label>
                                     <input type="number" id="vehicle_1_tcs" name="vehicle_1_tcs" class="form-control" value="{{$newcars->vehicle_1_tcs}}">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_depot">Vehicle Depot Charges</label>
                                     <input type="number" id="vehicle_depot" name="vehicle_depot" class="form-control" value="{{$newcars->vehicle_depot}}">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_insurance">Vehicle Insurance Charges</label>
                                     <input type="number" id="vehicle_insurance" name="vehicle_insurance" class="form-control" value="{{$newcars->vehicle_insurance}}">
                                   </div>
                              </div>

                         </div>
                         <div class="row" style="padding:5px;">
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_rto">RTO Cost</label>
                                     <input type="number" id="vehicle_rto" name="vehicle_rto" class="form-control" value="{{$newcars->vehicle_rto}}">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_warranty">Vehicle Warranty </label>
                                     <input type="number" id="vehicle_warranty" name="vehicle_warranty" class="form-control" value="{{$newcars->vehicle_warranty}}" >
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_accessories">Vehicle Accessories </label>
                                     <input type="number" id="vehicle_accessories" name="vehicle_accessories" class="form-control" value="{{$newcars->vehicle_accessories}}" >
                                   </div>
                              </div>

                         </div>
                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_onroad">Onroad Charges</label>
                                   <input type="number" id="vehicle_onroad" name="vehicle_onroad" class="form-control" value="{{$newcars->vehicle_onroad}}">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_discount">Discount </label>
                                   <input type="number" id="vehicle_discount" name="vehicle_discount" class="form-control" value="{{$newcars->vehicle_discount}}">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                         <div class="col-md-4">
                           <div class="form-group">
                            <label for="vehicle_finance_approved">Finance Approved</label>
                              <select class="form-control" name="vehicle_finance_approved" style="height:30px;">
                                <option value="yes" @if($newcars->vehicle_finance_approved=="yes") selected @endif>yes</option>
                                <option value="no"  @if($newcars->vehicle_finance_approved=="no") selected @endif>no</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                             <label for="vehicle_emi">EMI</label>
                               <select class="form-control" name="vehicle_emi" style="height:30px;">
                                 <option value="AR"@if($newcars->vehicle_emi=="AR") selected @endif>AR</option>
                                 <option value="AD"@if($newcars->vehicle_emi=="AD") selected @endif>AD</option>

                               </select>
                             </div>
                           </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_stampduty">Stampduty Cost </label>
                                   <input type="number" id="vehicle_stampduty" name="vehicle_stampduty" class="form-control" value="{{$newcars->vehicle_stampduty}}">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_part1">Part Payment 1</label>
                                   <input type="number" id="vehicle_part1" name="vehicle_part1" class="form-control" value="{{$newcars->vehicle_part1}}">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_part2">Part Payment 2 </label>
                                   <input type="number" id="vehicle_part2" name="vehicle_part2" class="form-control" value="{{$newcars->vehicle_part2}}">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="dealer_payment">Dealer Payment </label>
                                   <input type="number" id="dealer_payment" name="dealer_payment" class="form-control" value="{{$newcars->dealer_payment}}" >
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="dealer_disbursement">Dealer Disbursement</label>
                                   <input type="number" id="dealer_disbursement" name="dealer_disbursement" class="form-control" value="{{$newcars->dealer_disbursement}}" >
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="dealer_balance">Dealer Balance </label>
                                   <input type="number" id="dealer_balance" name="dealer_balance" class="form-control" value="{{$newcars->dealer_balance}}">
                                 </div>
                            </div>


                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="emi_date">EMI Date</label>
                                   <input type="date" id="emi_date" name="emi_date" class="form-control" value="{{$newcars->emi_date}}" >
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="loan_account_number">Loan Account Number </label>
                                   <input type="number" id="loan_account_number" name="loan_account_number" class="form-control" value="{{$newcars->loan_account_number}}">
                                 </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                               <label for="post_delivery_documents">Post Delivery Documents</label>
                                 <select class="form-control" name="post_delivery_documents" style="height:30px;">
                                   <option value="Done" @if($newcars->post_delivery_documents=="Done") selected @endif >Done</option>
                                   <option value="Pending" @if($newcars->post_delivery_documents=="Pending") selected @endif>Pending</option>

                                 </select>
                               </div>
                             </div>


                       </div>
                     </div>
                     </div>
                     <!-- /.box-body -->
                </div>
                <!-- /.box -->
           </div>
           <!-- /.col -->

      <!-- /*******************************/
      //Cost Information
      /******************************/ -->
      <div class="row" style="padding:10px;">
           <div class="col-md-12">
                <div class="box box-default box-solid collapsed-box">
                     <div class="box-header with-border">
                          <h3 class="box-title">Upload Documents</h3>
                          <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                          </div>
                          <!-- /.box-tools -->
                     </div>
                     <!-- /.box-header -->

                     <div class="box-body">
                       <div class="box box-primary">
                       <h4> Car Documents</h4>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="invoice_number">Invoice Number</label>
                                   <input type="number" id="invoice_number" name="invoice_number" class="form-control" value="{{$newcars->invoice_number}}" placeholder="Invoice">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="rcbook_number">RC Number</label>
                                   <input type="number" id="rcbook_number" name="rcbook_number" class="form-control" value="{{$newcars->rcbook_number}}" placeholder="RC number">
                                 </div>
                            </div>


                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="insurance_number">Insurance Number</label>
                                   <input type="number" id="insurance_number" name="insurance_number" class="form-control" value="{{$newcars->insurance_number}}" placeholder="Invoice">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="fastag_number">Fastag Number</label>
                                   <input type="number" id="fastag_number" name="fastag_number" class="form-control" value="{{$newcars->fastag_number}}" placeholder="Choose Insurance Photo">
                                 </div>
                            </div>
                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="invoice_photo">Invoice Photo</label>
                                   <input type="file" id="invoice_number" name="invoice_photo" class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="rcbook_photo">RC Photo</label>
                                   <input type="file" id="rcbook_photo" name="rcbook_photo" class="form-control">
                                 </div>
                            </div>


                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="insurance_photo">Insurance Photo</label>
                                   <input type="file" id="insurance_photo" name="insurance_photo" class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="fastag">Fastag Photo</label>
                                   <input type="file" id="fastag_photo" name="fastag_photo" class="form-control">
                                 </div>
                            </div>
                       </div>
                     </div>

                      <div class="box box-primary">
                        <h4> Purchaser Documents</h4>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="pancard_number">Pancard Number</label>
                                   <input type="number" id="pancard_number" name="pancard_number" class="form-control" value="{{$newcars->pancard_number}}" placeholder="Pancard">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="lightbill_number">Lightbill Number</label>
                                   <input type="number" id="lightbill_number" name="lightbill_number" class="form-control" value="{{$newcars->lightbill_number}}" placeholder="RC number">
                                 </div>
                            </div>


                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="aadharcard_number">Aadhar Card Number</label>
                                   <input type="number" id="aadharcard_number" name="aadharcard_number" class="form-control" value="{{$newcars->aadharcard_number}}" placeholder="Invoice">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="pancard_photo">Pancard Photo</label>
                                   <input type="file" id="pancard_number" name="pancard_photo" class="form-control">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="lightbill_photo">Lightbill Photo</label>
                                   <input type="file" id="lightbill_photo" name="lightbill_photo" class="form-control">
                                 </div>
                            </div>


                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="aadharcard_photo">Aadhar Card Photo</label>
                                   <input type="file" id="aadharcard_photo" name="aadharcard_photo" class="form-control">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-12">
                              <ul class="mailbox-attachments clearfix">
                                  @if($newcars->invoice_photo)
                                  <li>
                                    <img src="{{ asset($newcars->invoice_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Invoice Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->invoice_number}}
                                            <a href="{{ asset($newcars->owner_pan_card_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                                  @if($newcars->insurance_photo)
                                  <li>
                                    <img src="{{ asset($newcars->insurance_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Insurance Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->insurance_number}}
                                            <a href="{{ asset($newcars->insurance_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                                  @if($newcars->rcbook_photo)
                                  <li>
                                    <img src="{{ asset($newcars->rcbook_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Rcbook Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->rcbook_number}}
                                            <a href="{{ asset($newcars->rcbook_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                                  @if($newcars->fastag_photo)
                                  <li>
                                    <img src="{{ asset($newcars->fastag_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Fastag Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->fastag_number}}
                                            <a href="{{ asset($newcars->fastag_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                                  @if($newcars->pancard_photo)
                                  <li>
                                    <img src="{{ asset($newcars->pancard_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Pancard Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->pancard_number}}
                                            <a href="{{ asset($newcars->pancard_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                                  @if($newcars->lightbill_photo)
                                  <li>
                                    <img src="{{ asset($newcars->lightbill_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Lightbill Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->lightbill_number}}
                                            <a href="{{ asset($newcars->lightbill_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                                  @if($newcars->aadharcard_photo)
                                  <li>
                                    <img src="{{ asset($newcars->aadharcard_photo)}}" width="200px" height="150px">

                                    <div class="mailbox-attachment-info">
                                      <a href="#" class="mailbox-attachment-name">Aadharcard Number</a>
                                          <span class="mailbox-attachment-size">
                                            {{$newcars->aadharcard_number}}
                                            <a href="{{ asset($newcars->aadharcard_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                                          </span>
                                    </div>
                                  </li>
                                  @endif
                               </ul>

                            </div>


                       </div>
                     </div>
                     </div>
                     <!-- /.box-body -->
                </div>
                <!-- /.box -->
           </div>
           <!-- /.col -->
      </div>
      <!-- /*******************************/
      //Submit Form
      /******************************/ -->
      <div class="row">
           <div class="col-md-12">
                <!-- /.box-body -->
                <div class="text-center box-footer">
                     <button type="submit" class="btn btn-primary btn-lg "  style="  box-shadow: 2px 5px #888888;">Update Enquiry</button>
                </div>
                <!-- /.box -->
          </div>
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
    </section>

    @endsection                                                                                                                                                                  
