
 @extends('aieap.master')
@section ('title','Modify Role')
@section ('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> Modify Assigned Role! </strong></h4></div>
  <div class="panel-body">
      
     <h4> <strong> Name: </strong>{{$user->name}} </h4>
     

 {!!Form::open(array('url' => 'admin/user/'. $user->id)) !!}
 {!!Form::hidden('_method', 'PUT') !!}



<div class="form-group">
  @foreach ($roles as $role)
  <div class="radio">
  <label>
    <input type="radio" name="role" id="{{$role->id}}" value="{{$role->id}}" <?php if($user->hasRole($role->role)) {print "checked";}?>>
    {{$role->role}}
  </label>
</div>
 @endforeach 
</div>


<div class="from-group">
<div class="col-xs-12  col-sm-3  ">
{!! Form::submit('Update Role',['class' => 'btn btn-primary']);!!}
</div> </div>

{!! Form::close() !!}


   
   <div class="col-xs-12  col-sm-3">

 <a href="{{URL::previous()}}" > <h5> <strong> Back </strong></h5> </a>
</div>

</div>   
     
   </div> 
    
         </div> 
    </div>
    


</div>
@endsection