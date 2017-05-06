@extends('layouts.main')
@section('content')


				<div class="tabcontent tg">	

			        <h1>Guided Tours</h1>
                    <p>Find tour guide now</p>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4 form-border">

                        <div id="qs-gtours">    

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Search for a tour guide</label>
                                        <input class="form-control ui-autocomplete-input" id="inputDestinationGuide" placeholder="Enter City or Destination" autocomplete="off" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Tour Date</label>
                                        <input class="form-control hasDatepicker" id="inputTourDate" placeholder="dd-mm-yyyy" type="text">
                                    </div>

                                <div>
                                    <button type="button" id="searchTour" class="button btn-block"><span>Search</span></button>
                                </div>
                            </div>

                        </div>

                            </div>
                            
                        </div>	

                        </div>
                        </div>
					</div>
			
                    
@stop