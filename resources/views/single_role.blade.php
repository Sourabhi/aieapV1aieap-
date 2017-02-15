
 @extends('aieap.master')
@section ('title','Single Role')
@section ('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> This is a Single Role Page! </strong></h4></div>
  <div class="panel-body">
      
         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                	<th>ID</th>
                    <th>Role</th>
                    <th>Description </th>
                   <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                   <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                   
                </tr>
            </thead>

            <tbody>

               <tr class="active">
                    <td>{{ $role->id}}</td>
                    <td>{{ $role->role}}</td>
                    <td>{{ $role->description}}</td>
                    <td>{{ $role->created_at}} </td>
                    <td>{{ $role->updated_at}} </td>
                   
                </tr>
               
                
            </tbody>
        </table>
    </div>

     <a href="{{url('edit/role/'.$role->id)}}">Update Role</a> &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="{{URL::previous()}}"> Back </a>

   </div> 
    
         </div> 
    </div>
    


</div>
@endsection