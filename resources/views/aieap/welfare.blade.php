   @extends('aieap.master')
@section ('title','Student Welfare')
@section ('content')
 
	
    <div class="container"> 
	
<ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    <li><a href="#"></a>Help and Support</li>
   <li class="active"> Student Welfare</li>
  </ol>   
         
         
        
         <div class=" text-center"> 
             
              <div class="jumbotron">
                  <heading class="h4"><b> Student Welfare</b></heading>
     
             </div>
         
          
         </div>
                
                
 <div class="panel-group" id="accordion" 
      role="tablist" aria-multiselectable="true">
        
       <div class="panel panel-default">
     
     <div class="panel-heading" role="tab" id="headingOne">
           
           <heading class="panel-title text-left">
               <div class="text-left">
         
         <a href="#health" role="button"
            data-toggle="collapse" data-parent="#accordion"
            aria-expanded="false" aria-controls="health"> <b> Health</b></a>
         </div>
         </heading>
           
           </div>
     
           <div class="panel-collapse collapse in" id="health"
            role="tabpanel" arialabelledby="headingOne">
               <div class="panel-body">
               <p class="h5"> Information Regarding health...... </p> 
               
               </div>
           
           </div>
     </div> 
        
   
        
  
        
      <div class="panel panel-default">
     
     <div class="panel-heading" role="tab" id="headingTwo">
           
           <heading class="panel-title text-left">
         <div class="text-left">
         <a href="#counselling" role="button"
            data-toggle="collapse" data-parent="#accordion"
            aria-expanded="false" aria-controls="counselling"> <b> Counselling</b></a>
               </div>
         </heading>
           
           </div>
     
           <div class="panel-collapse collapse" id="counselling"
            role="tabpanel" arialabelledby="headingTwo">
               <div class="panel-body">
               <p class="h5"> Information regarding counselling...... </p> 
               
               </div>
           
           </div>
     </div> 
        </div>
        

    </div>
    
		@endsection