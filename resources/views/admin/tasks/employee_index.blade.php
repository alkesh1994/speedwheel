@extends('layouts.app')

@section('content')

<section class="content-header">
  <h1>
    Tasks

  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Tasks</li>
  </ol>
</section>


<section class="content">
<div class="row">
   <div class="col-xs-12">
     <div class="box box-primary">
       <div class="box-header">
         <h3 class="box-title">Tasks</h3>


       </div>
       <!-- /.box-header -->
       <div class="box-body table-responsive ">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
           <tr>
             <th>Employee Assigned</th>
             <th>Task</th>
             <th>Status</th>
             <!-- <th>Notify</th> -->


           </tr>
          </thead>
          <tbody>
           @if($tasks->count() > 0)

           @foreach($tasks as $task)

           <tr>

             @foreach($employees as $employee )
            @if($task->employee_id == $employee->id)
            <td>
              {{ $employee->first_name }}   {{ $employee->last_name }}
            </td>
            @endif
            @endforeach
             <td>{{ $task->task }}</td>
             <td>{{$task->status}}</td>
             <!-- <td><a href=""><span class="label label-primary"><i class="glyphicon glyphicon-envelope"></i></span></a></td> -->


           </tr>

          @endforeach

          @else

          <tr>

            <th colspan="5" class="text-center">No Task added yet</th>

          </tr>

          @endif
        </tbody>
         </table>
         {{$tasks->links()}}
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
   </div>
 </div>
</section>


@endsection()
