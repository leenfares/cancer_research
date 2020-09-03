

@extends('layouts.master')
@section('title', 'About')
@section('content')



<main class="index inside">
  <section class="page">
  <div class="container">
   <h3 class="cancer-title"> <a href="#">About</a></h3>
      <div class="row">
      <div class="p-image col-lg-4  col-md-5  col-sm-12 col-12">
       <div class="cancer-image">
        <a href="#"><img src="{{ asset('/images/rnoo1.jpg ')}}"></a>
       </div>
      </div>
      <div class="p-content  col-lg-8  col-md-7  col-sm-12  col-12">
            <span style="font-weight: bold;">A word from the university president</span>
          </br>
           Prof, Bassam Hassan 

           <p>Currently, fight against cancer is one of the most urgent and noteworthy issues of national and global attention. Cancer is a very serious disease unless it is detected and treated early. It is spreading epidemically, knows no boundaries and poses a great challenge for us and perhaps for future generations. </p>

           <p> The adoption of a cancer research center at Tishreen University will be a very important step in the history of the university because we will take the decision to challenge the tragedy caused by a disease that is said to be the "emperor of all diseases." , This challenge will lead to the achievement of the goal of our scientific institution and the creation of a generation of qualified researchers.  Scientific research remains the right path to knowledge, knowledge with love and hope remains the path to recovery from all our diseases.</p>
   </div>
 </div>
</div>
</section>

<section id="about" >
  <div class="container">
      <h1>CRC Vision Mission Goals</h1>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
    <!-- <i class='fa fa-rocket' style='font-size:36px'></i> -->
    <div  class="about-img" >
     <div class="cancer-image" >
          <img src="{{ asset('/images/science-fiction.png') }}">
      </div>  
    </div>  
      <h3>Mission</h3>
      <p>
      	The Cancer Research Center at Tishreen University is a research and educational center that contributes to the study of the cancer problem in our society and to find solutions to control it based on scientific proofs, through:
      	  <ul>
      		<li>
          	Development of the National Cancer Registry      			
      		</li>
      		<li>
      			Contribute to the formulation of a plan for the prevention and treatment of the disease in the Syrian Arab Republic
      		</li>
      		<li>
            Participating in training in cancer research      			
      		</li>
      		<li>
            Strengthening specialized research in the field of cancer
      		</li>
      	</ul>

     </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
    <div  class="about-img" >
      	  	 <div class="cancer-image">
          <img src="{{ asset('/images/eye.png') }}">
         </div>     
         </div>     

       <h3>Vision</h3>
      <p>The Cancer Research Center at Tishreen University seeks to lead scientific research on the causes of cancer and its pathogenesis through the involvement of all researchers in this field in accordance with the international standards, as well as mobilizing efforts to combat cancer to save the lives of cancer patients in the Syrian Arab Republic and the region.</p>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
     <div  class="about-img" >
       <div class="cancer-image">
         <img src="{{ asset('/images/mission.png') }}">
         </div>  
         </div>  
       <h3> goals</h3>
           <p>The Cancer Research Center at Tishreen University seeks to lead scientific research on the causes of cancer and its pathogenesis through the involvement of all researchers in this field in accordance with the international standards, as well as mobilizing efforts to combat cancer to save the lives of cancer patients in the Syrian Arab Republic and the region.</p>
      </div>    

  </div>
</div>
</section>




</main>

@endsection