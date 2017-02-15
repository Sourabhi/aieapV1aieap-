
 @extends('aieap.master')
@section ('title','Single User')
@section ('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> This is a Single User Page! </strong></h4></div>
  <div class="panel-body">
      
         <h4> <strong> Name: </strong>{{$user->name}} </h4>
         <h4> <strong> Email: </strong>{{$user->email}} </h4>
         <h4> <strong> Role: </strong>@foreach ($user->roles as $role)
                    {{ $role->role}}
                    @endforeach </h4>

       
     
     <a class ="btn btn-warning" href="{{url('admin/user/'.$user->id)}}">
      <i class ="fa fa-gear"></i> Update Role</a> &nbsp;  
<a href="{{URL::previous()}}"> Back </a>

   </div> 
    
         </div> 
    </div>
    


</div>
@endsection