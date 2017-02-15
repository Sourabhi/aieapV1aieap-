@extends('aieap.master')

@section('title','Update the Timeslot')

@section('content')

<br>
<br>
<div class="container">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


 <div class="row">
                    <div class=" col-sm-offset-2 col-sm-8 ">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> Update the Timeslot </strong></h4></div>
  <div class="panel-body">

{!!Form::open(array('url' => 'edit/timeslot/'. $timeslot->id)) !!}
 {!!Form::hidden('_method', 'PUT') !!}

<div class="form-group">

<div class="form-group">
  
{!!Form::label('timeslot', 'Timeslot *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::select('timeslot',['Morning'=>'Morning', 'Afternoon'=>'Afternoon','Evening'=>'Evening'], $timeslot->timeslot, ['placeholder'=>'Select a timeslot','class' => 'form-control']);!!}<br>

</div>
</div>
<div class="form-group">
  
{!!Form::label('starttime', 'Start Time *',['class'=>'col-sm-4 control-label']);!!}

<div class="col-sm-8">
{!!Form::select('starttime', ['9.00'=>'9.00', '10.00'=>'10.00','11.00'=>'11.00','12.00'=>'12.00','13.00'=>'13.00','14.00'=>'14.00','15.00'=>'15.00','16.00'=>'16.00','17.00'=>'17.00','18.00'=>'18.00','19.00'=>'19.00','20.00'=>'20.00','21.00'=>'21.00','22.00'=>'22.00','23.00'=>'23.00','24.00'=>'24.00'], $timeslot->starttime, ['placeholder'=>'Select a time','class' => 'form-control']);!!}<br>
</div>
</div>
<div class="form-group">
  
{!!Form::label('endtime', 'End Time *',['class'=>'col-sm-4 control-label']);!!}

<div class="col-sm-8">
{!!Form::select('endtime', ['9.00'=>'9.00', '10.00'=>'10.00','11.00'=>'11.00','12.00'=>'12.00','13.00'=>'13.00','14.00'=>'14.00','15.00'=>'15.00','16.00'=>'16.00','17.00'=>'17.00','18.00'=>'18.00','19.00'=>'19.00','20.00'=>'20.00','21.00'=>'21.00','22.00'=>'22.00','23.00'=>'23.00','24.00'=>'24.00'], $timeslot->endtime, ['placeholder'=>'Select a time','class' => 'form-control']);!!}<br>
</div>
</div>
<div class="from-group">
<div class="col-xs-offset-2 col-xs-2 col-sm-offset-4 col-sm-2 col-md-offset-5 col-md-1 col-lg-offset-5 col-lg-1 ">
{!! Form::submit('Update',['class' => 'btn btn-primary']);!!}
</div> </div>

{!! Form::close() !!}


{!!Form::open(array('url' => 'delete/timeslot/'. $timeslot->id)) !!}
  {!!Form::hidden('_method', 'DELETE') !!}
<div class="from-group">
 <div class=" col-xs-offset-2 col-xs-5  col-sm-offset-2 col-sm-4 col-md-offset-2 col-md-4 lg-offset-5 col-lg-1 ">
 {!! Form::submit('Delete',['class' => 'btn btn-warning']);!!}<br> <br>
   </div> </div>
   {!! Form::close() !!}
   
   <div class="col-xs-offset-2 col-xs-2 col-sm-offset-4 col-sm-2 col-md-offset-5 col-md-1 col-lg-offset-5 col-lg-1 ">

 <a href="{{URL::previous()}}" > <h5> <strong> Back </strong></h5> </a>
</div>

</div>
</div>
</div>
</div>
</div>
<br> <br>
@endsection


