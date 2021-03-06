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
      <form role="form" action="{{ route('newcar.store') }}" method="post" enctype="multipart/form-data">
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
                                   <input type="date" id="enquiry_date" name="enquiry_date" class="form-control" value="{{old('enquiry_date')}}" placeholder="Enter Owner Name">
                                 </div>
                            </div>
                              <div class="col-sm-9">
                                    <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" placeholder="Enter Name">
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="contact1">Contact 1</label>
                                      <input type="number" id="contact1" name="contact1" class="form-control" value="{{old('contact1')}}" placeholder="Enter Owner Contact 1">
                                    </div>
                               </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="contact2">Contact 2</label>
                                      <input type="number" id="contact2" name="contact2" class="form-control" value="{{old('contact2')}}" placeholder="Enter Owner Contact 2">
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-12">
                                    <div class="form-group">
                                      <label for="address">Address</label>
                                      <textarea id="address" name="address" class="form-control" value="{{old('address')}}" placeholder="Enter Address"></textarea>
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email Address">
                                 </div>
                            </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="qualification">Qualification</label>
                                      <input type="text" id="qualification" name="qualification" class="form-control" value="{{old('qualification')}}" placeholder="Qualification">
                                    </div>
                               </div>

                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="office_address">Office Address</label>
                                      <input type="text" id="office_address" name="office_address" class="form-control" value="{{old('office_address')}}" placeholder=" Enter Office Address">
                                    </div>
                               </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="office_contact">Office Contact</label>
                                      <input type="number" id="office_contact" name="office_contact" class="form-control" value="{{old('office_contact')}}" placeholder="Enter Office Contact">
                                    </div>
                               </div>
                          </div>
                          <div class="row" style="padding:5px;">
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="mother_name">Mother's Name</label>
                                      <input type="text" id="mother_name" name="mother_name" class="form-control" value="{{old('mother_name')}}" placeholder="Enter Mothers Name">
                                    </div>
                               </div>
                               <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="no_of_dependents">No. of Dependents</label>
                                      <input type="number" id="no_of_dependents" name="no_of_dependents" class="form-control" value="{{old('no_of_dependents')}}" placeholder="No of Dependents">
                                    </div>
                               </div>
                          </div>

                          <div class="row" style="padding:5px;">
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="spouse_name">Spouse Name</label>
                                      <input type="text" id="spouse_name" name="spouse_name" class="form-control" value="{{old('spouse_name')}}" placeholder="Enter Spouse Name">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="spouse_occupation">Spouse Occupation</label>
                                      <input type="text" id="spouse_occupation" name="spouse_occupation" class="form-control" value="{{old('spouse_occupation')}}" placeholder="Enter Email Address">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="spouse_contact">Spouse Contact</label>
                                      <input type="number" id="spouse_contact" name="spouse_contact" class="form-control" value="{{old('spouse_contact')}}" placeholder="Qualification">
                                    </div>
                               </div>
                          </div>

                          <div class="row" style="padding:5px;">
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference1_name">Reference 1 Name</label>
                                      <input type="text" id="reference1_name" name="reference1_name" class="form-control" value="{{old('reference1_name')}}" placeholder="Enter reference Name">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference1_contact">Reference 1 Contact</label>
                                      <input type="number" id="reference1_contact" name="reference1_contact" class="form-control" value="{{old('reference1_contact')}}" placeholder="Enter reference Contact">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference1_address">Reference 1 Address</label>
                                      <input type="text" id="reference1_address" name="reference1_address" class="form-control" value="{{old('reference1_address')}}" placeholder="Enter reference Address">
                                    </div>
                               </div>
                          </div>

                          <div class="row" style="padding:5px;">
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference2_name">Reference 2 Name</label>
                                      <input type="text" id="reference2_name" name="reference2_name" class="form-control" value="{{old('reference2_name')}}" placeholder="Enter reference Name">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference2_contact">Reference 2 Contact</label>
                                      <input type="number" id="reference1_contact" name="reference2_contact" class="form-control" value="{{old('reference2_contact')}}" placeholder="Enter reference Contact">
                                    </div>
                               </div>
                               <div class="col-sm-4">
                                    <div class="form-group">
                                      <label for="reference2_address">Reference 2 Address</label>
                                      <input type="text" id="reference2_address" name="reference2_address" class="form-control" value="{{old('reference2_address')}}" placeholder="Enter reference Address">
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
                                   <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control" value="{{old('vehicle_brand')}}" placeholder="Enter Brand Name">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_model">Vehicle Model</label>
                                   <input type="text" id="vehicle_model" name="vehicle_model" class="form-control" value="{{old('vehicle_model')}}" placeholder="Enter Model Number">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_color">Vehicle Color</label>
                                   <input type="text" id="vehicle_color" name="vehicle_color" class="form-control" value="{{old('vehicle_color')}}" placeholder="Enter Vehicle">
                                 </div>
                            </div>
                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_dealer">Vehicle Dealer</label>
                                   <input type="text" id="vehicle_dealer" name="vehicle_dealer" class="form-control" value="{{old('vehicle_dealer')}}" placeholder="Enter Dealer Name">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_financer">Vehicle Financer</label>
                                   <input type="text" id="vehicle_financer" name="vehicle_financer" class="form-control" value="{{old('vehicle_financer')}}" placeholder="Enter Financer Name">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_ex_showroom">Ex Showroom Cost</label>
                                   <input type="text" id="vehicle_ex_showroom" name="vehicle_ex_showroom" class="form-control" value="{{old('vehicle_ex_showroom')}}" placeholder="Enter Ex showroom cost">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_cost">Vehicle Purchase Cost </label>
                                   <input type="text" id="vehicle_cost" name="vehicle_cost" class="form-control" value="{{old('vehicle_cost')}}" placeholder="Enter Vehicle Purchase Cost">
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
                                     <input type="number" id="vehicle_booking_amount" name="vehicle_booking_amount" class="form-control" value="{{old('vehicle_booking_amount')}}" placeholder="Enter Booking Amount">
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                   <div class="form-group">
                                     <label for="vehicle_downpayment">Vehicle Downpayment</label>
                                     <input type="number" id="vehicle_downpayment" name="vehicle_downpayment" class="form-control" value="{{old('vehicle_downpayment')}}" placeholder="Enter Downpayment">
                                   </div>
                              </div>

                         </div>
                         <div class="row" style="padding:5px;">
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_1_tcs">1% TCS</label>
                                     <input type="number" id="vehicle_1_tcs" name="vehicle_1_tcs" class="form-control" value="{{old('vehicle_1_tcs')}}" placeholder="Enter tcs">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_depot">Vehicle Depot Charges</label>
                                     <input type="number" id="vehicle_depot" name="vehicle_depot" class="form-control" value="{{old('vehicle_depot')}}" placeholder="Enter Model Number">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_insurance">Vehicle Insurance Charges</label>
                                     <input type="number" id="vehicle_insurance" name="vehicle_insurance" class="form-control" value="{{old('vehicle_insurance')}}" placeholder="Enter Insurance Charges">
                                   </div>
                              </div>

                         </div>
                         <div class="row" style="padding:5px;">
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_rto">RTO Cost</label>
                                     <input type="number" id="vehicle_rto" name="vehicle_rto" class="form-control" value="{{old('vehicle_rto')}}" placeholder="Enter RTO cost">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_warranty">Vehicle Warranty </label>
                                     <input type="number" id="vehicle_warranty" name="vehicle_warranty" class="form-control" value="{{old('vehicle_warranty')}}" placeholder="Enter Vehicle Warranty">
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <div class="form-group">
                                     <label for="vehicle_accessories">Vehicle Accessories </label>
                                     <input type="number" id="vehicle_accessories" name="vehicle_accessories" class="form-control" value="{{old('vehicle_accessories')}}" placeholder="Enter Vehicle Purchase Cost">
                                   </div>
                              </div>

                         </div>
                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_onroad">Onroad Charges</label>
                                   <input type="number" id="vehicle_onroad" name="vehicle_onroad" class="form-control" value="{{old('vehicle_onroad')}}" placeholder="Enter RTO cost">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="vehicle_discount">Discount </label>
                                   <input type="number" id="vehicle_discount" name="vehicle_discount" class="form-control" value="{{old('vehicle_discount')}}" placeholder="Enter Vehicle Warranty">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                         <div class="col-md-4">
                           <div class="form-group">
                            <label for="vehicle_finance_approved">Finance Approved</label>
                              <select class="form-control" name="vehicle_finance_approved" style="height:30px;">

                                <option value="yes">yes</option>
                                <option value="no">no</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                             <label for="vehicle_emi">EMI</label>
                               <select class="form-control" name="vehicle_emi" style="height:30px;">

                                 <option value="AR">AR</option>
                                 <option value="AD">AD</option>

                               </select>
                             </div>
                           </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_stampduty">Stampduty Cost </label>
                                   <input type="number" id="vehicle_stampduty" name="vehicle_stampduty" class="form-control" value="{{old('vehicle_stampduty')}}" placeholder="Enter StampDuty">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_part1">Part Payment 1</label>
                                   <input type="number" id="vehicle_part1" name="vehicle_part1" class="form-control" value="{{old('vehicle_part1')}}" placeholder="Enter Partpayment">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="vehicle_part2">Part Payment 2 </label>
                                   <input type="number" id="vehicle_part2" name="vehicle_part2" class="form-control" value="{{old('vehicle_part2')}}" placeholder="Enter Partpayment">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="dealer_payment">Dealer Payment </label>
                                   <input type="number" id="dealer_payment" name="dealer_payment" class="form-control" value="{{old('dealer_payment')}}" placeholder="Enter Vehicle Purchase Cost">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="dealer_disbursement">Dealer Disbursement</label>
                                   <input type="number" id="dealer_disbursement" name="dealer_disbursement" class="form-control" value="{{old('dealer_disbursement')}}" placeholder="Enter Disbursement">
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group">
                                   <label for="dealer_balance">Dealer Balance </label>
                                   <input type="number" id="dealer_balance" name="dealer_balance" class="form-control" value="{{old('dealer_balance')}}" placeholder="Enter Balance">
                                 </div>
                            </div>


                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="emi_date">EMI Date</label>
                                   <input type="date" id="emi_date" name="emi_date" class="form-control" value="{{old('emi_date')}}" placeholder="Enter Emi Date">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="loan_account_number">Loan Account Number </label>
                                   <input type="number" id="loan_account_number" name="loan_account_number" class="form-control" value="{{old('loan_account_number')}}" placeholder="Enter Account Number">
                                 </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                               <label for="post_delivery_documents">Post Delivery Documents</label>
                                 <select class="form-control" name="post_delivery_documents" style="height:30px;">

                                   <option value="Done">Done</option>
                                   <option value="Pending">Pending</option>

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
                                   <input type="number" id="invoice_number" name="invoice_number" class="form-control" value="{{old('invoice_number')}}" placeholder="Invoice">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="rcbook_number">RC Number</label>
                                   <input type="number" id="rcbook_number" name="rcbook_number" class="form-control" value="{{old('rcbook_number')}}" placeholder="RC number">
                                 </div>
                            </div>


                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="insurance_number">Insurance Number</label>
                                   <input type="number" id="insurance_number" name="insurance_number" class="form-control" value="{{old('insurance_number')}}" placeholder="Invoice">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="fastag_number">Fastag Number</label>
                                   <input type="number" id="fastag_number" name="fastag_number" class="form-control" value="{{old('fastag_number')}}" placeholder="Choose Insurance Photo">
                                 </div>
                            </div>
                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="invoice_photo">Invoice Photo</label>
                                   <input type="file" id="invoice_number" name="invoice_photo" class="form-control"  placeholder="Invoice photo">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="rcbook_photo">RC Photo</label>
                                   <input type="file" id="rcbook_photo" name="rcbook_photo" class="form-control"  placeholder="RC book photo">
                                 </div>
                            </div>


                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="insurance_photo">Insurance Photo</label>
                                   <input type="file" id="insurance_photo" name="insurance_photo" class="form-control"  placeholder="Insurance photo">
                                 </div>
                            </div>
                            <div class="col-sm-3">
                                 <div class="form-group">
                                   <label for="fastag">Fastag Photo</label>
                                   <input type="file" id="fastag_photo" name="fastag_photo" class="form-control"  placeholder="Choose Fastag Photo">
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
                                   <input type="number" id="pancard_number" name="pancard_number" class="form-control" value="{{old('pancard_number')}}" placeholder="Pancard">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="lightbill_number">Lightbill Number</label>
                                   <input type="number" id="lightbill_number" name="lightbill_number" class="form-control" value="{{old('lightbill_number')}}" placeholder="RC number">
                                 </div>
                            </div>


                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="aadharcard_number">Aadhar Card Number</label>
                                   <input type="number" id="aadharcard_number" name="aadharcard_number" class="form-control" value="{{old('aadharcard_number')}}" placeholder="Invoice">
                                 </div>
                            </div>

                       </div>
                       <div class="row" style="padding:5px;">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="pancard_photo">Pancard Photo</label>
                                   <input type="file" id="pancard_number" name="pancard_photo" class="form-control"  placeholder="Invoice photo">
                                 </div>
                            </div>
                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="lightbill_photo">Lightbill Photo</label>
                                   <input type="file" id="lightbill_photo" name="lightbill_photo" class="form-control"  placeholder="RC book photo">
                                 </div>
                            </div>


                            <div class="col-sm-4">
                                 <div class="form-group">
                                   <label for="aadharcard_photo">Aadhar Card Photo</label>
                                   <input type="file" id="aadharcard_photo" name="aadharcard_photo" class="form-control" placeholder="Insurance photo">
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
      </div>
      <!-- /*******************************/
      //Submit Form
      /******************************/ -->
      <div class="row">
           <div class="col-md-12">
                <!-- /.box-body -->
                <div class="text-center box-footer">
                     <button type="submit" class="btn btn-primary btn-lg "  style="  box-shadow: 2px 5px #888888;">Create Enquiry</button>
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
