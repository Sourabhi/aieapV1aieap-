@extends('aieap.master')
@section ('title','Student Dashboard')
@section ('content')

 br><br><br>
  <div class="container">
    
    

<div class=" col-xs-12">
           <div class="panel panel-default"> 
          <div class="panel-heading">  <h4> <strong> Welcome!! </strong></h4></div>
  <div class="panel-body">
      <h5> Student Dashboard </h5>
      
         <div class="table-responsive"> 
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                  
                    <th>First Name</th>
                    <th>Last Name</th>
                    
                   
                </tr>
            </thead>

            <tbody>
                      @foreach ($students as $student)

   

               <tr class="active">
                    <td><a href="{{url('student/'. $student->id)}}">{{ $student->first_name}}</a></td>
                    
                    <td>{{ $student->last_name}} </td>
                   
                   
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
     
   </div> 
    
         </div> 
    </div>
</div>
@endsection