@extends('aieap.master')

@section('title','Course_Day')

@section('stylesheets2')
{!!Html::style('css/select2.min.css')!!}
@endsection

@section ('CourseDay')



<div class="container"> 
  
<ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    
   <li class="active">Course</li>
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
          <div class="panel-heading">  <h4> <strong> Course_Day Form </strong></h4></div>
  <div class="panel-body">

{!!Form::open(array('url' => 'create/course', 'data-toggle'=>'validator')) !!}
 
<div class="form-group">
  
{!!Form::label('course', 'Course *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::text('course', '',['placeholder'=>'Give a course name','class' => 'form-control', 'required'=>'required']);!!}<br>

</div>
</div>
<div class="form-group">
  
{!!Form::label('start_date', 'Start Date *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::date('start_date', '',['placeholder'=>'dd-mm-yy','class' => 'form-control', 'required'=>'required']);!!}<br>
</div>
</div>
<div class="form-group">
  
{!!Form::label('completion_date', 'Completion Date *', ['class'=>'col-sm-4 control-label']);!!} 

<div class="col-sm-8">
{!!Form::date('completion_date', '',['placeholder'=>'dd-mm-yy','class' => 'form-control', 'required'=>'required']);!!}<br>
</div>
</div>
<div class="form-group">
  
{!!Form::label('days', 'Days *', ['class'=>'col-sm-4 control-label']);!!} 
<div class="col-sm-8">
 <select class="form-control select2-multi" name="days[]" multiple="multiple" required="required">
@foreach($days as $day)
<option value='{{$day->id}}'>{{$day->day}}</option> 

@endforeach
</select> 
  
<br><br>

</div>
</div>


<div class="from-group">
<div class="col-xs-12 col-sm-offset-4 col-sm-8">

{!! Form::submit('Submit',['class' => 'btn btn-success']);!!}
</div>
</div>

{!! Form::close() !!}

</div>
</div>
</div>
            
      
  </div>
          
 </div>
 <br>
    <br>
    <br>
@endsection
@section('scripts2')
{!!Html::script('js/select2.min.js')!!}
<script type="text/javascript"> 
$('.select2-multi').select2();

</script>
@endsection
