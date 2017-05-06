@extends('layouts.main')
@section('content')

					<div class="tabcontent tf">
			
                    <h1>Flights</h1>
                    <p>Find flights now<p>
                    	
                    	
                    <div class="container-fluid">
                    
                        <div class="row">

                            <div class="col-md-4 form-border">

                                 <div id="qs-flight"> <!-- FLIGHT TAB -->

                                    <div class="row">
                                        <div class="col-md-12">
                                           
                                            <div>    
                                                <label>
                                                    <input name="options" value="flight-one-way" id="RadioButton_Oneway" type="radio"> One Way   
                                                </label>
                                                <label>
                                                    <input name="options" value="flight-two-way" id="RadioButton_Twoway" type="radio"> Two Way   
                                                </label>
                                                <label>
                                                    <input name="options" value="flight-multi-stops" id="RadioButton_Multiple" type="radio"> Multiple Stops
                                                </label>
                                            </div>

                                        </div>
                                        <div class="clearfix visible-lg visible-md visible-sm visible-xs">&nbsp;</div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departure City</label>
                                                <span role="status" aria-live="polite"></span><input class="form-control" id="inputDepartureCity" placeholder="Departure City" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <span role="status" aria-live="polite"></span><input class="form-control" id="inputDestinationCity" placeholder="Arrival City" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departure Date</label>
                                                <input class="form-control" id="inputDepartDate" placeholder="dd-mm-yyyy" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Return Date</label>
                                                <input class="form-control" id="inputArrivalDate" placeholder="dd-mm-yyyy" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <select class="form-control" id="inputFlightClass">
                                                    <option value="Economy">Economy</option>
                                                    <option value="Premium Economy">Premium Economy</option>
                                                    <option value="Business">Business</option>
                                                    <option value="First Class">First Class</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Adult</label>
                                                <select class="form-control" id="inputFlightAdults">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Child</label>
                                                <select class="form-control" id="inputFlightChild">
                                                    <option value="0" selected="">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button type="button" class="button btn-block" id="searchFlights"> <span>Search</span></button>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="col-md-8"></div>

    

                            </div>

</div>

</div>

        

@stop