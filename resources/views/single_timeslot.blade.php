
 @extends('aieap.master')
@section ('title','Single Timeslot')
@section('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> This is a Single Timeslot Page! </strong></h4></div>
  <div class="panel-body">
      
         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                	<th>ID</th>
                    <th>Title</th>
                    <th>Start Time (24 H)</th>
                    <th>End Time (24 H)</th>
                   <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                   <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                   
                </tr>
            </thead>

            <tbody>

               <tr class="active">
                    <td>{{ $timeslot->id}}</a></td>
                    <td>{{ $timeslot->timeslot}}</td>
                    <td>{{ $timeslot->starttime}}</td>
                    <td>{{ $timeslot->endtime}}</td>
                    <td>{{ $timeslot->created_at}} </td>
                   <td>{{ $timeslot->updated_at}} </td>
                   
                </tr>
               
                
            </tbody>
        </table>
    </div>

     <a href="{{url('edit/timeslot/'.$timeslot->id)}}">Update Timeslot</a> &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="{{URL::previous()}}"> Back </a>

   </div> 
    
         </div> 
    </div>
    


</div>
@endsection