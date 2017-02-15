
 @extends('aieap.master')
@section ('title','Single Student Profile')
@section ('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading"> 

           
            <h4> <strong>  {{$student->first_name}} {{$student->last_name}}'s Profile  </strong></h4></div>
  <div class="panel-body">
      
           @foreach($student->images as $image)
           <div class="col-xs-12 col-sm-4 col-md-2"> 

            <div class="thumbnail">
            <img src="{!!Croppa::url('/uploads/images/'.$image->path, 200, 180)!!}">  
           <!-- <img src="/uploads/images/{{$image->path}}"> -->
            </div>
            <div class="caption">
              <a class ="btn btn-warning btn-xs" href="{{url('image/delete/'. $image->id)}}">Delete Photo</a>

            </div>
          </div>
            
            @endforeach

         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                	 <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Country</th>
                    <th>Nationality</th>
                    <th>Email</th>
                    @foreach ($student->courses as $course)
                    
                  
                    <th >Course</th>
                    @endforeach
                    <th>User ID</th>
                   <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                   <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                   
                </tr>
            </thead>

            <tbody>

               <tr class="active">
                    <td>{{ $student->id}}</a></td>
                    <td>{{ $student->first_name}}</td>
                    <td>{{ $student->last_name}}</td>
                    <td>{{ $student->date_of_birth}}</td>
                    <td>{{ $student->country}}</td>
                    <td>{{ $student->nationality}}</td>
                    <td>{{ $student->email}}</td>
                    <div class="courses">
                    @foreach ($student->courses as $course)
                    <td>{{ $course->course}}</td>
                    @endforeach
                    </div>
                    <td>{{ $student->user_id}}</td>
                    <td>{{ $student->created_at}} </td>
                   <td>{{ $student->updated_at}} </td>
                   
                </tr>
               
                
            </tbody>
        </table>
    </div>

<a href="{{url('edit/student/'.$student->id)}}">Update Student Profile</a> &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="{{URL::previous()}}"> Back </a>

   </div> 
    
         </div> 
    </div>
    


</div>
@endsection