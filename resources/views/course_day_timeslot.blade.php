 @extends('aieap.master')
@section ('title','Course Day Student Timeslot Role User')
@section ('content')

<div class="container">
  <ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    <li class="active">Day Timeslot</li>
  </ol>

  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <heading class="h4"> <b>Administrator DashBoard</b></heading>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#days" aria-controls="days" role="tab" data-toggle="tab"><b>Class days</b></a></li>
            <li role="presentation"><a href="#timeslots" aria-controls="timeslots" role="tab" data-toggle="tab"><b>Timeslots</b></a></li>
            <li role="presentation"><a href="#courses" aria-controls="courses" role="tab" data-toggle="tab"><b>Courses</b></a></li>
            <li role="presentation"><a href="#students" aria-controls="students" role="tab" data-toggle="tab"><b>Students</b></a></li>
            <li role="presentation"><a href="#roles" aria-controls="roles" role="tab" data-toggle="tab"><b>Roles</b></a></li>
            <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab"><b>Users</b></a></li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="days">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>ID</b></th>
                      <th><b> Day </b></th>
                      <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                      <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($days as $day)
                    <tr class="active">
                    <td><a href="{{url('day_timeslot/'.$day->id)}}">{{ $day->id}}</a></td>
                    <td>{{ $day->day}}</td>
                    <td>{{ $day->created_at}}</td>
                    <td>{{ $day->updated_at}}</td>
                   
                   
                </tr>
                @endforeach
                
            </tbody>
                </table>
              </div>
               <a href="{{url('create/day_timeslot/')}}">Create Day</a>
            </div>
            
           <div role="tabpanel" class="tab-pane" id="timeslots">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>ID</b></th>
                      <th><b> Timeslot </b></th>
                      <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                      <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($timeslots as $timeslot)
                    <tr class="active">
                    <td><a href="{{url('timeslot/'. $timeslot->id)}}">{{ $timeslot->id}}</a></td>
                    <td>{{ $timeslot->timeslot}}</td>
                    <td>{{ $timeslot->created_at}}</td>
                    <td>{{ $timeslot->updated_at}}</td>
                   
                   
                </tr>
                @endforeach
                
            </tbody>
                </table>
              </div>
              <a href="{{url('create/timeslot/')}}">Create Timeslot</a>
            </div>
            
             <div role="tabpanel" class="tab-pane" id="courses">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>ID</b></th>
                      <th><b> Course </b></th>
                      <th><b> Start Date </b></th>
                      <th><b> Completion Date </b></th>
                      <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                      <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($courses as $course)
                    <tr class="active">
                    <td><a href="{{url('course/'. $course->id)}}">{{ $course->id}}</a></td>
                    <td>{{ $course->course}}</td>
                    <td>{{ $course->start_date}}</td>
                    <td>{{ $course->completion_date}}</td>
                    <td>{{ $course->created_at}}</td>
                    <td>{{ $course->updated_at}}</td>
                   
                   
                </tr>
                @endforeach
                
            </tbody>
                </table>
              </div>
              <a href="{{url('create/course/')}}">Create Course</a>
            </div>

            <div role="tabpanel" class="tab-pane" id="students">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>ID</b></th>
                      <th><b> Title </b></th>
                      <th><b> First Name </b></th>
                      <th><b> Last Name </b></th>
                      <th><b> Date of Birth </b></th>
                      <th><b> Gender </b></th>
                      <th><b> House No </b></th>
                      <th><b> Town </b></th>
                      <th><b> State/Province </b></th>
                      <th><b> Postcode </b></th>
                      <th><b> Country </b></th>
                      <th><b> Nationality </b></th>
                      <th><b> Phone/Mobile </b></th>
                      <th><b> Email </b></th>
                      <th><b> Comments </b></th>
                      <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                      <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                    </tr>
                  </thead>

                  <tbody>
                  @foreach ($students as $student)
                    <tr class="active">
                    <td><a href="{{url('student/'. $student->id)}}">{{ $student->id}}</a></td>
                    <td>{{ $student->title}}</td>
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
                    <td>{{ $student->comments}}</td>
                    <td>{{ $student->created_at}}</td>
                    <td>{{ $student->updated_at}}</td>  
                </tr>
                @endforeach
                
            </tbody>
                </table>
              </div>
               <a href="{{url('enrolment_form/')}}">Create Enrolements</a>
            </div>
            
           <div role="tabpanel" class="tab-pane" id="roles">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>ID</b></th>
                      <th><b> Role </b></th>
                      <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                      <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($roles as $role)
                    <tr class="active">
                    <td><a href="{{url('role/'. $role->id)}}">{{ $role->id}}</a></td>
                    <td>{{ $role->role}}</td>
                    <td>{{ $role->created_at}}</td>
                    <td>{{ $role->updated_at}}</td>
                   
                   
                </tr>
                @endforeach
                
            </tbody>
                </table>
              </div>
              <a href="{{url('create/role/')}}">Create Roles</a>
            </div>

            <div role="tabpanel" class="tab-pane" id="users">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>ID</b></th>
                      <th><b> Name </b></th>
                      <th><b> Email </b></th>
                      <th><b> Password </b></th>
                      <th><b>Student</b></th>
                      <th><b>Administrator</b></th>
                      <th>Created_at<br>(Y-M-D)(h:m:s)</th>
                      <th>Updated_at<br>(Y-M-D)(h:m:s)</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($users as $user)
                    <tr class="active">
                    <td><a href="{{url('user/'. $user->id)}}">{{ $user->id}}</a></td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->password}}</td>
                    <td> <input type="checkbox"{{$user->hasRole('Student')?'checked':''}} name="role_student"></td>
                    <td> <input type="checkbox"{{$user->hasRole('Admin')?'checked':''}} name="role_admin"></td>
                    <td>{{ $user->created_at}}</td>
                    <td>{{ $user->updated_at}}</td>
                   
                </tr>
                @endforeach
                
            </tbody>
                </table>
              </div>
              <a href="{{url('create/register/')}}">Create Register</a>
            </div>
@endsection
 
                    
                   
                   
                