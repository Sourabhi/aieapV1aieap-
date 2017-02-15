@extends('aieap.master')
@section ('title','Courses Fees')
@section ('content')

<div class="container">
  <ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    <li class="active">Fees</li>
  </ol>
  <div class="row">
    <div class="col-md-12 text-center">
      <h4> Payment Method </h4>
      <p>All payments by direct deposit to the following Bank Account Details:</p><br>
     
      <p><strong>Name of the Bank:</strong> abcd </p>
      <p> <strong>Account Name:</strong> AIEAP &nbsp; <strong>Account Number:</strong> 123456 </p><br>
      <p>Note: - Please review our <a href="refund_cancellation">Refund and Cancellation Policy </a></p><br><br>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <heading class="h4"> <b> Courses Fees</b></heading>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#native_students" aria-controls="native_students" role="tab" data-toggle="tab"><b>For Native Students</b></a></li>
            <li role="presentation"><a href="#international_student" aria-controls="international_student" role="tab" data-toggle="tab"><b>For International Students</b></a></li>
            <li role="presentation"><a href="#discounted_fees" aria-controls="discounted_fees" role="tab" data-toggle="tab"><b>Discounted Fees *</b></a></li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="native_students">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>Courses</b></th>
                      <th><b> Day Course Fees(CAD) </b></th>
                      <th><b> Evening Course Fees (CAD)</b></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Academic English Course</td>
                      <td>123</td>
                      <td>123</td>
                    </tr>
                    <tr class="active">
                      <td>For Beginners</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                    <tr>
                      <td>General English</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                    <tr class="active">
                      <td>For High School Students</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                    <tr>
                      <td>Junior Program</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                    <tr class="active">
                      <td>Professional English</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                    <tr>
                      <td>Pronunciation and Fluency Programs</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                    <tr class="active">
                      <td>IELTS Preparation</td>
                      <td>123</td>
                      <td>123 </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="international_student">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>Courses</b></th>
                      <th><b> Day Course Fees(CAD) </b></th>
                      <th><b> Evening Course Fees (CAD)</b></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Academic English Course</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr class="active">
                      <td>For Beginners</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr>
                      <td>General English</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr class="active">
                      <td>For High School Students</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr>
                      <td>Junior Program</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr class="active">
                      <td>Professional English</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr>
                      <td>Pronunciation and Fluency Programs</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                    <tr class="active">
                      <td>IELTS Preparation</td>
                      <td>abc</td>
                      <td>abc </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="discounted_fees">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr class="info" >
                      <th><b>Courses</b></th>
                      <th><b> Day Course Fees(CAD) </b></th>
                      <th><b> Evening Course Fees (CAD)</b></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Academic English Course</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr class="active">
                      <td>For Beginners</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr>
                      <td>General English</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr class="active">
                      <td>For High School Students</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr>
                      <td>Junior Program</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr class="active">
                      <td>Professional English</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr>
                      <td>Pronunciation and Fluency Programs</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                    <tr class="active">
                      <td>IELTS Preparation</td>
                      <td>xyz</td>
                      <td>xyz </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <p> <b>* Discounted Fees are applicable to the students from the following countries: </b><br>
            Bangladesh, Bhutan, China, India, Indonesia, Japan, Korea, North, Korea, South, Malaysia, Philippines
            
            and Sri Lanka</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
