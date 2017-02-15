@extends('aieap.master')
@section ('title','Student Dashboard')
@section ('content')

 <div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    Student Dashboard


                    <br><br><br>
  <div class="container">
    
    

<div class=" col-xs-12">
           <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> This is a Single Student Profile Page! </strong></h4></div>
  <div class="panel-body">
      
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
                    <th>Course</th>
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


   </div> 
    
         </div> 
    </div>
    


</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection