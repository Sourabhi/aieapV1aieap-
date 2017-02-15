
 @extends('aieap.master')
@section ('title','Single Timeslot')
@section ('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> This is a Single Day Timeslot Page! </strong></h4></div>
  <div class="panel-body">
      
         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                	 <th>ID</th>
                    <th>Day</th>
                    @foreach ($day->timeslots as $timeslot)
                    <th>Timeslot</th>
                    @endforeach
                   <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                   <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                   
                </tr>
            </thead>

            <tbody>

               <tr class="active">
                    <td>{{ $day->id}}</a></td>
                    
                    <td>{{ $day->day}}</td>
                    <div class="timeslots">
                    @foreach ($day->timeslots as $timeslot)
                    <td>{{ $timeslot->timeslot}}</td>
                    @endforeach
                    </div>
                    
                    <td>{{ $day->created_at}} </td>
                   <td>{{ $day->updated_at}} </td>
                   
                </tr>
               
                
            </tbody>
        </table>
    </div>
<a href="{{url('edit/day/'.$day->id)}}">Update DayTimeslot</a> &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="{{URL::previous()}}"> Back </a>


   </div> 
    
         </div> 
    </div>
    


</div>
@endsection