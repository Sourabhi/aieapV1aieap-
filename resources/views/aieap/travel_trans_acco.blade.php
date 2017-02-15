 @extends('aieap.master')
@section ('title','Travel Transport and Accommodation')
@section ('content')

	
    <div class="container"> 
	
<ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    <li><a href="#"></a>Help and Support</li>
   <li class="active"> Travel, Transport and Accommodation</li>
  </ol>   
         
         
        
        
              
              <div class="jumbotron text-center">
                    <heading class="h4"><b>
      Travel, Transport and Accommodation
             </b></heading>
        
         </div>
                
 <div class="panel-group" id="accordion" 
      role="tablist" aria-multiselectable="true">
        
       <div class="panel panel-default">
     
     <div class="panel-heading" role="tab" id="headingOne">
           
           <heading class="panel-title ">
         <div class="text-left">
               
         <a href="#travel" role="button"
            data-toggle="collapse" data-parent="#accordion"
            aria-expanded="false" aria-controls="travel"> <b> Travel</b></a>
         </div>
         </heading>
           
           </div>
     
           <div class="panel-collapse collapse in" id="travel"
            role="tabpanel" arialabelledby="headingOne">
               <div class="panel-body">
               <p class="h5"> Information Regarding travel...... </p> 
               
               </div>
           
           </div>
     </div> 
        
   
        
  
        
      <div class="panel panel-default">
     
     <div class="panel-heading" role="tab" id="headingTwo">
           
           <heading class="panel-title text-left">
        <div class="text-left">
         <a href="#transport" role="button"
            data-toggle="collapse" data-parent="#accordion"
            aria-expanded="false" aria-controls="transport"> <b> Transport</b></a>
               </div>
         </heading>
           
           </div>
     
           <div class="panel-collapse collapse" id="transport"
            role="tabpanel" arialabelledby="headingTwo">
               <div class="panel-body">
               <p class="h5"> Information regarding transport...... </p> 
               
               </div>
           
           </div>
     </div> 
      
        
       <div class="panel panel-default">
     
     <div class="panel-heading" role="tab" id="headingThree">
           
           <heading class="panel-title text-left">
         <div class="text-left">
         <a href="#accommodation" role="button"
            data-toggle="collapse" data-parent="#accordion"
            aria-expanded="false" aria-controls="accommodation"> <b> Accommodation</b></a>
               </div>
         </heading>
           
           </div>
     
           <div class="panel-collapse collapse" id="accommodation"
            role="tabpanel" arialabelledby="headingThree">
               <div class="panel-body">
               <p class="h5"> Information Regarding accommodation...... </p> 
               
               </div>
           
           </div>
     </div> 

    </div>
    </div>
	 @endsection