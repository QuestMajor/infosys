@extends('layouts.back')
@section('content')
					
			<div id="Flights" class="tabcontentAdmin">

            <h2>Enter new data for available flights</h2>

                            

                                    <div class="row">
                                        <div class="col-md-12" data-toggle="buttons">
                                           
                                            <div  data-toggle="buttons">    
                                                <label class="col-md-2">
                                                    <input name="options" value="flight-one-way" id="RadioButton_inputDataOneway" type="radio"> One Way
                                                </label>
                                                <label class="col-sm-2">
                                                    <input name="options" value="flight-two-way" id="RadioButton_inputDataTwoway" type="radio"> Two Way
                                                </label>
                                                <label class="col-sm-3">
                                                    <input name="options" value="flight-multi-stops" id="RadioButton_inputDataMultiple" type="radio"> Multiple Stops
                                                </label>
                                            </div>

                                        </div>
                                        <div class="clearfix visible-lg visible-md visible-sm visible-xs">&nbsp;</div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departure City</label>
                                                <span role="status" aria-live="polite"></span><input class="form-control" id="inputDataDepartureCity" placeholder="Departure City" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <span role="status" aria-live="polite"></span><input class="form-control" id="inputDataDestinationCity" placeholder="Arrival City" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Departure Date</label>
                                                <input class="form-control" id="inputDataDepartDate" placeholder="dd-mm-yyyy" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Return Date</label>
                                                <input class="form-control" id="inputDataReturnDate" placeholder="dd-mm-yyyy" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <select class="form-control" id="inputDataFlightClass">
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
                                                <select class="form-control" id="inputDataFlightAdults">
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
                                                <select class="form-control" id="inputDataFlightChild">
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
                                        
                                        <div class="col-md-3">
                                            <button type="button" class="buttonAdmin" id="inputDataFlights"> <span>Enter Data</span></button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="buttonAdmin" id="editDataFlights"><span>Edit Data</span></button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="buttonAdmin" id="deleteDataFlights"><span>Delete Data</span></button>
                                        </div>

                                    </div>

                            

        </div>
		
			                  
@stop