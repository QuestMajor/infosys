@extends('layouts.back')
@section('content')
					
			<div id="Home" class="tabcontentAdmin">

            <h2>Enter new data for advisories display</h2>

            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Advisories:</label>
                                        <input class="form-control" id="inputDataAdvisories" placeholder="Enter Advisories" type="text">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                            <button type="button" class="buttonAdmin" id="inputDataAd"> <span>Enter Data</span></button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="buttonAdmin" id="editDataAd"><span>Edit Data</span></button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="buttonAdmin" id="deleteDataAd"><span>Delete Data</span></button>
                                        </div>
                            </div>
          
        </div>				
			                  
@stop