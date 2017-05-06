@extends('layouts.main')
@section('content')
					

				<div class="tabcontent tc">	

			        <h1>Car Rentals</h1>
                    <p>Find cars for hire now</p>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4 form-border">

                        <div id="qs-car">    

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Enter City or Destination</label>
                                        <input class="form-control ui-autocomplete-input" id="inputDestinationCar" placeholder="City or Destination" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Pick-up Date</label>
                                        <input class="form-control" id="inputCarPickUp" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Drop-off Date</label>
                                        <input class="form-control" id="inputCarDropOff" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="button" id="searchCars" class="button btn-block"><span>Search</span></button>
                                </div>
                            </div>

                        </div>

                            </div>
                            
                        </div>	

                        </div>
                        </div>
			             
@stop