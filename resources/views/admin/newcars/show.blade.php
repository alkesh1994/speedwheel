@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      New Car Enquiry Date :- {{$newcars->enquiry_date}}
    </h1>

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">New Cars</a></li>
      <li class="active">New Car Enquiry Details</li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">
    <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Personal Details</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered" >
                  <tr>

                    <th >Heads</th>
                    <th >Value</th>

                  </tr>
                  <tr>

                    <td>Name</td>
                    <td>
                      {{ $newcars->name}}
                    </td>

                  </tr>
                  <tr>
                    <td>Contact </td>
                    <td>{{$newcars->contact1}}</td>

                  </tr>
                  <tr>
                    <td>Alternate Contact</td>
                    <td>{{ $newcars->contact2}}</td>
                  </tr>
                  <tr>
                    <td>rando detals</td>
                    <td>Fix and squish bugs</td>

                  </tr>
                </table>
              </div>
            </div>
              <!-- /.box-body -->

            </div>

  <div class="row">
  <div class="col-md-12">
    <div class="box box-solid">
      <div class="box-header with-border">
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="box-group" id="accordion">
          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
          <div class="panel box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                   Personal Details
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="box-body" style="background:#4b646f;color:#39ff14;">
                <div class="row" style="padding:30px;font-size:15px;">
                  <div class="col-md-12">
                    <div class="box">
                      <div class="box-header with-border" style="background:#4b646f;color:#39ff14;">
                        <h3 class="box-title">Personal Details</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered" style="background:#4b646f;color:#39ff14;" >
                          <tr>
                            <th style="width: 30px">#</th>
                            <th >Heads</th>
                            <th >Value</th>

                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Name</td>
                            <td>
                              {{ $newcars->name}}
                            </td>

                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Contact </td>
                            <td>{{$newcars->contact1}}</td>

                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Alternate Contact</td>
                            <td>{{ $newcars->contact2}}</td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>rando detals</td>
                            <td>Fix and squish bugs</td>

                          </tr>
                        </table>
                      </div>
                    </div>
                      <!-- /.box-body -->

                    </div>
                 </div>
                      <!-- /.widget-user -->
              </div>

            </div>
          </div>
          <div class="panel box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Vehicle Details
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="box-body">
                <div class="row" style="padding:30px;font-size:15px;">
                     <div class="col-md-12">
                          <div class="input-group ">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Vehicle Brand</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_brand}}" disabled>
                          </div>
                          <br>
                          <div class="input-group ">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Vehicle Model</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_model}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Vehicle Color</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_color}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Vehicle Dealer</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_dealer}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Vehicle Financer</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_financer}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Purchased Cost</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_cost}}" disabled>
                          </div>
                          <br>

                        </div>
                 </div>
                      <!-- /.widget-user -->
              </div>
              <div class="box-footer">
                <ul class="mailbox-attachments clearfix">
                    @if($newcars->vehicle_photos)
                    @foreach($newcars->vehicle_photos as $vehicle_photo)
                    <li>
                      <img src="{{ asset($vehicle_photo)}}" width="200px" height="150px">

                      <div class="mailbox-attachment-info">
                            <span class="mailbox-attachment-size">
                              <a href="{{ asset($vehicle_photo)}}" class="btn btn-default btn-xs pull-right" download><i class="fa fa-cloud-download"></i></a>
                            </span>
                      </div>
                    </li>
                    @endforeach
                    @endif
                 </ul>
              </div>
            </div>
          </div>
          <div class="panel box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Cost Information
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="box-body">
                <div class="row" style="padding:30px;font-size:15px;">
                     <div class="col-md-12">
                          <div class="input-group ">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Booking Amount</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_booking_amount}}" disabled>
                          </div>
                          <br>
                          <div class="input-group ">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Down Payment</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_downpayment}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">TCS 1%</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_1_tcs}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Depot Charges</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_depot}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Insurance</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_insurance}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">RTO Cost</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_rto}}" disabled>
                          </div>
                          <br>
                          <div class="input-group">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-primary">Warranty</button>
                            </div>
                            <!-- /btn-group -->
                            <input type="text" class="form-control" value="{{$newcars->vehicle_warranty}}" disabled>
                          </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Accessories</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_accessories}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">On Road Cost</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_onroad}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Discount</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_discount}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Finance Approved</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_finance_approved}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Emi</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_emi}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Stampduty Cost</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_stampduty}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Part Payment 1</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_part1}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Part Payment 2</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->vehicle_part2}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Dealer Payment</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->dealer_payment}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Dealer Disbursement</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->dealer_disbursement}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Emi Date</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->emi_date}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Loan Account Number</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->loan_account_number}}" disabled>
                        </div>
                        <br>
                        <div class="input-group">
                          <div class="input-group-btn">
                            <button type="button" class="btn btn-primary">Post Delivery Documents</button>
                          </div>
                          <!-- /btn-group -->
                          <input type="text" class="form-control" value="{{$newcars->post_delivery_documents}}" disabled>
                        </div>

                 </div>
                      <!-- /.widget-user -->
              </div>

            </div>
          </div>
          <div class="panel box box-danger">
            <div class="box-header with-border">
              <h4 class="box-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  Documents
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="box-body">
                <div class="row" style="padding:30px;font-size:15px;">
                     <div class="col-md-12">
                       <div class="box-footer">
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
                      <!-- /.widget-user -->
              </div>
            </div>
            </div>
            <!--panel box end -->
          </div>
        </div>
      <!-- /.box-body -->
    </div>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  </section>
  <!-- /.content -->
@endsection
