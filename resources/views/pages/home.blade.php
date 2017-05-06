@extends('layouts.main')
@section('content')
				
				<div class="tabcontent ta">

                    <h1>Welcome, Every Juan!</h1>
                    <p>Advisories:</p>
                    	<div class="container-fluid">
                        
	                        <div class="row">
	                            <div class="col-md-4 form-border">
	                            (No Advisories)
	                            
	                            </div>
	                            <div class="col-md-8">

	                            	<div class="slideshow-container">
									  <div class="mySlides fade">
									    <img src="resources/assets/images/slide/Bangkok.jpg" style="width:100%">
									  </div>

									  <div class="mySlides fade">
									    <img src="resources/assets/images/slide/Dubai.jpg" style="width:100%">
									  </div>

									  <div class="mySlides fade">
									    <img src="resources/assets/images/slide/Singapore.jpg" style="width:100%">
									  </div>

									</div>
									<br>

	                            	<script>

				                            var slideIndex = 0;
											showSlides();
											
											function showSlides() {
											    var i;
											    var slides = document.getElementsByClassName("mySlides");
											    for (i = 0; i < slides.length; i++) {
											        slides[i].style.display = "none";
											    }
											    slideIndex++;
											    if (slideIndex> slides.length) {slideIndex = 1}
											    slides[slideIndex-1].style.display = "block";
											    setTimeout(showSlides, 2000); //
											}

								</script>
	                            </div>
	                            
	                        </div>
	                        	
                		</div>

                		</div>				
					
			
                    
@stop