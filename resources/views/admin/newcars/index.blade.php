@extends('layouts.app')

@section('content')

<section class="content-header">
  <h1>
    New Cars Entry

  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">New Cars Entry</li>
  </ol>
</section>


<section class="content">
<div class="row">
   <div class="col-xs-12">
     <div class="box box-primary">
       <div class="box-header">
         <h3 class="box-title">New Cars Entry</h3>


       </div>
       <div class="">
           <br>
           <!--**************Import excel**************-->
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">Import Excel</button>
           <div class="modal modal-primary fade" id="modal-info">
                <div class="modal-dialog">
                     <div class="modal-content">
                          <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title">Import Excel</h4>
                          </div>
                          <form action="{{ route('newcars.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="modal-body">
                               <p>Choose your excel file to be imported in the database</p>
                               <input type="file" name="file">
                          </div>
                          <div class="modal-footer">
                               <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                               <button class="btn btn-outline">Upload Excel</button>
                          </div>
                          </form>
                     </div>
                     <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
          <!--**************Export excel**************-->
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">Export Excel</button>
          <div class="modal modal-success fade" id="modal-success">
               <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Export Excel</h4>
                         </div>
                         <div class="modal-body">
                              <p>Export all your used car enquiries in excel format</p>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                              <a class="btn btn-outline" href="{{ route('newcars.export') }}">Export Excel</a>
                         </div>
                    </div>
                    <!-- /.modal-content -->
               </div>
               <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         </div>
       </div>
       <!-- /.box-header -->
       <div class="box-body table-responsive ">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
           <tr>
             <th>Name</th>
             <th>Contact</th>
             <th>Email</th>
             <th>Brand</th>
             <th>Model</th>
             <th>Action</th>


           </tr>
          </thead>
          <tbody>
           @if($newcars->count() > 0)

           @foreach($newcars as $newcar)

           <tr>


            <td>
              {{ $newcar->name }}
            </td>

              <td>{{ $newcar->contact1}}</td>
             <td>{{ $newcar->email }}</td>

             <td>{{ $newcar->vehicle_brand}}</td>
             <td>{{ $newcar->vehicle_model}}</td>
             <td><a href="{{ route('newcar.show',['id'=> $newcar->id]) }}"><span class="label label-primary"><i class="glyphicon glyphicon-eye-open"></i></span></a>

             <a href="{{ route('newcar.edit',['id'=> $newcar->id]) }}"><span class="label label-success"><i class="glyphicon glyphicon-pencil"></i></span></a>
             <a href="{{ route('newcar.delete',['id'=> $newcar->id]) }}"><span class="label label-danger"><i class="glyphicon glyphicon-trash"></i></span></a></td>
           </tr>

          @endforeach

          @else

          <tr>

            <th colspan="5" class="text-center">No Car Enteries added yet</th>

          </tr>

          @endif
        </tbody>
         </table>
         {{$newcars->links()}}
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
   </div>
 </div>
</section>


@endsection()
