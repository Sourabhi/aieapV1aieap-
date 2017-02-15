@extends('aieap.master')

@section('title','Update Course day')

@section('stylesheets3')
{!!Html::style('css/select2.min.css')!!}
@endsection

@section('EditCourseDay')



<div class="container"> 
  
<ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    
   <li class="active">Edit Course and Day</li>
  </ol> 
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
                    <div class=" col-sm-offset-1 col-sm-10 ">
         	 <div class="panel panel-default "> 
          <div class="panel-heading">  <h4> <strong> Edit Course-Day Form </strong></h4></div>
  <div class="panel-body">

{!!Form::open(array('url' => 'edit/course_day/'. $course->id)) !!}
 {!!Form::hidden('_method', 'PUT') !!}
 
<div class="form-group">
  
{!!Form::label('course', 'Course *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::text('course', $course->course,['class' => 'form-control', 'required'=>'required']);!!}<br>

</div>
</div>
<div class="form-group">
  
{!!Form::label('start_date', 'Start Date *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::date('start_date', $course->start_date,['placeholder'=>'dd-mm-yy','class' => 'form-control', 'required'=>'required']);!!}<br>
</div>
</div>
<div class="form-group">
  
{!!Form::label('completion_date', 'Completion Date *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::date('completion_date', $course->completion_date,['placeholder'=>'dd-mm-yy','class' => 'form-control', 'required'=>'required']);!!}<br>
</div>
</div>
<div class="form-group">
  
{!!Form::label('days', 'Days *', ['class'=>'col-sm-4 control-label']);!!} 
<div class="col-sm-8">
 {{Form::select('days[]',$days, null, ['class'=>'select2-multi form-control', 'multiple'=>'multiple', 'required'=>'required'])}}
 
<br><br>

</div>
</div>
<div class="from-group">
<div class="col-xs-offset-2 col-xs-2 col-sm-offset-4 col-sm-2 col-md-offset-5 col-md-1 col-lg-offset-5 col-lg-1 ">
{!! Form::submit('Update',['class' => 'btn btn-primary']);!!}
</div> </div>

{!! Form::close() !!}

{!!Form::open(array('url' => 'delete/course_day/'. $course->id)) !!}
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

@section('scripts3')
{!!Html::script('js/select2.min.js')!!}
<script type="text/javascript"> 
$('.select2-multi').select2();
$('.select2-multi').select2().val({!!json_encode($course->days()->getRelatedIds())!!}).trigger('change');

</script>
@endsection