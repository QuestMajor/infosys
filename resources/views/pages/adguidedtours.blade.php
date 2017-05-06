@extends('layouts.back')
@section('content')

       <div id="Guided Tours" class="tabcontentAdmin">
          
          <h2>Enter new data for available tour guide</h2>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Destination</label>
                                        <input class="form-control" id="inputDestinationGuide" placeholder="Enter City or Destination" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tour Guide's Name</label>
                                        <input class="form-control" id="inputDestinationGuide" placeholder="Enter Tour Guide's Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group inner-addon left-addon">
                                        <label>Tour Date</label>
                                        <input class="form-control" id="inputTourDate" placeholder="dd-mm-yyyy" type="text">
                                    </div>

                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="inputDataTour"><span>Enter Data</span></button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="editDataTour"><span>Edit Data</span></button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="buttonAdmin" id="deleteDataTour"><span>Delete Data</span></button>
                                </div>
                            </div>

                        </div>


        </div>
			                  
@stop