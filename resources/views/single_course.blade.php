
 @extends('aieap.master')
@section ('title','Single Course')
@section('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> This is a Single Course Day Page! </strong></h4></div>
  <div class="panel-body">
      
         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                	 <th>ID</th>
                    <th>Course</th>
                    @foreach ($course->days as $day)
                    <th>Day</th>
                    @endforeach
                    @foreach ($day->timeslots as $timeslot)
                    <th>Timeslot</th>
                    @endforeach
                   <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                   <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                   
                </tr>
            </thead>

            <tbody>

               <tr class="active">
                    <td>{{ $course->id}}</a></td>
                    
                    <td>{{ $course->course}}</td>
                    <div class="days">
                    @foreach ($course->days as $day)
                    <td>{{ $day->day}}</td>
                    @endforeach
                    </div>
                    <div class="timeslots">
                    @foreach ($day->timeslots as $timeslot)
                    <td>{{ $timeslot->timeslot}}</td>
                    @endforeach
                    </div>
                    <td>{{ $course->created_at}} </td>
                   <td>{{ $course->updated_at}} </td>
                   
                </tr>
               
                
            </tbody>
        </table>
    </div>
<a href="{{url('edit/course_day/'.$course->id)}}">Update Course and Day</a> &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="{{URL::previous()}}"> Back </a>


   </div> 
    
         </div> 
    </div>
    


</div>
@endsection