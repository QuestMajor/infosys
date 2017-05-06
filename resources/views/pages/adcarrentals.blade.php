@extends('layouts.back')
@section('content')

        <div id="Car Rentals" class="tabcontentAdmin">

         <h2>Enter new data for available car rentals</h2>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Enter Location</label>
                                        <input class="form-control" id="inputDestinationCar" placeholder="Enter Location" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Driver's Name</label>
                                        <input class="form-control" id="inputDestinationCar" placeholder="Enter Driver's Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Vehicle Type</label>
                                        <input class="form-control" id="inputDestinationCar" placeholder="Enter Vehicle Type" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Plate Number</label>
                                        <input class="form-control" id="inputDestinationCar" placeholder="Enter Plate Number" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Date of availability</label>
                                        <input class="form-control" id="inputDataCarPickUp" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Until</label>
                                        <input class="form-control" id="inputDataCarDropOff" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="inputDataCar"><span>Enter Data</span></button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="editDataCar"><span>Edit Data</span></button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="deleteDataCar"><span>Delete Data</span></button>
                                </div>

                            </div>


        </div>

		
			                  
@stop