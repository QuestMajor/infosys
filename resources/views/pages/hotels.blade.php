@extends('layouts.main')
@section('content')
	
				<div class="tabcontent th">	
					
	                <h1>Hotels</h1>
                    <p>Find hotels now<p>

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-4 form-border">

                                    <div id="qs-hotel">    

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Enter City or Destination</label>
                                        <input class="form-control" id="inputKeyWord" placeholder="City or Destination" autocomplete="off" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Check In Date</label>
                                        <input class="form-control" id="inputCheckIn" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group inner-addon">
                                        <label>Check Out Date</label>
                                        <input class="form-control hasDatepicker" id="inputCheckOut" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Rooms</label>
                                        <select class="form-control" id="inputRooms">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
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
                                <div class="col-sm-6">
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
                                <div class="col-sm-12">
                                    <button type="button" class="button btn-block" id="searchHotels"><span>Search</span></button>
                                </div>
                            </div>

                        </div>  

                            </div>
                            <div class="col-sm-8"></div>
                        </div>
                        </div>
</div>

@stop