
 @extends('aieap.master')
@section ('title','Single Student Profile')
@section ('content')
	<br><br><br>
	<div class="container">
		
		

<div class=" col-xs-12">
         	 <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong>  
           
                         
              
</strong></h4></div>
  <div class="panel-body">
      
         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                	 
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>House No.</th>
                    <th>Town</th>
                    <th>State/Province</th>
                    <th>Postcode</th>
                    <th>Country</th>
                    <th>Nationality</th>
                    <th>Phone/Mobile</th>
                    <th>Email</th>
                    @foreach ($student->courses as $course)
                    <th>Course</th>
                    @endforeach
                    
                  
                   
                </tr>
            </thead>

            <tbody>

               <tr class="active">
                    
                    <td>{{ $student->first_name}}</td>
                    <td>{{ $student->last_name}}</td>
                    <td>{{ $student->date_of_birth}}</td>
                    <td>{{ $student->gender}}</td>
                    <td>{{ $student->house_no}}</td>
                    <td>{{ $student->town}}</td>
                    <td>{{ $student->state}}</td>
                    <td>{{ $student->postcode}}</td>
                    <td>{{ $student->country}}</td>
                    <td>{{ $student->nationality}}</td>
                    <td>{{ $student->phone}}</td>
                    <td>{{ $student->email}}</td>
       
                    <div class="courses">
                    @foreach ($student->courses as $course)
                    <td>{{ $course->course}}</td>
                    @endforeach
                    </div>
                    
                    
                   
                </tr>
               
                
            </tbody>
        </table>
    </div>

<a href="{{URL::previous()}}"> Back </a>

   </div> 
    
         </div> 
    </div>
    


</div>
@endsection