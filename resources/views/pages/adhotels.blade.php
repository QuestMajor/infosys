@extends('layouts.back')
@section('content')
					
        <div id="Hotels" class="tabcontentAdmin">

        <h2>Enter new data for available hotels</h2>

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Location / City</label>
                                        <input class="form-control" id="inputDataLocation" placeholder="Enter Location or City" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Hotel Name</label>
                                        <input class="form-control" id="inputDataHotel" placeholder="Enter Hotel Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Date of availability</label>
                                        <input class="form-control" id="inputDataDateAvail" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Until</label>
                                        <input class="form-control" id="inputDataUntil" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Rooms Available</label>
                                        <select class="form-control" id="inputRooms">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Adults per room</label>
                                        <select class="form-control" id="inputAdults">
                                            <option value="1">1</option>
                                            <option value="2" selected="">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Child per room</label>
                                            <select class="form-control" id="inputHotelChild">
                                                <option value="0" selected="">1</option>
                                                <option value="1"></option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="inputDataHotels"><span>Enter Data</span></button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="editDataHotels"><span>Edit Data</span></button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="deleteDataHotels"><span>Delete Data</span></button>
                                </div>
                            </div>

        </div>
		
			                  
@stop