<!doctype html>
<html>
    <head>
        <base href="<?php echo "http://" . $_SERVER["SERVER_NAME"]; ?>">
        <title>{{ $page }}</title>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



        <!--CSS-->
        <style type="text/css">

                body
                    {
                        background-color: #ffffff;
                        margin: 0px 0px;

                    }

                body div#header
                    {
                        background-color:#e1e5e4;
                        height:140px;
                    }

                body div#container
                    {
                        font-family: Arial;
                        font-size: 25px;
                        float: right;
                        margin-top: -70px;
                        padding-top: 0px; 
                    }

                body div#header div.banner
                    {

                        color: red;
                        text-align: left;
                        font-family: Arial;
                        padding-left: 30px;
                    }
   
                /* Style the tab */
                div.tab 
                    {
                        overflow: hidden;
                        border: 1px solid #ccc;
                        background-color: #f1f1f1;
                    }

                /* Style the buttons inside the tab */
                div.tab button 
                    {
                        background-color: inherit;
                        float: left;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        padding: 14px 16px;
                        padding-left: 30px;
                        padding-right: 30px;
                        transition: 0.3s;
                    }

                /* Change background color of buttons on hover */
                    div.tab button:hover 
                    {
                        background-color: #ddd;
                    }

                /* Create an active/current tablink class */
                    div.tab button.active {
                        background-color: #ccc;
                    }

                /* Style the tab content */
                    .tabcontent 
                    {
                        display: none;
                        padding: 6px 12px;
                        padding-left: 30px;
                        background-image:url("../resources/background.jpg");
                        padding-right: 30px;
                        border: 1px solid #ccc;
                        border-top: none;
                    }

                    .tf
                    {
                        background-image:url("../resources/flight.jpg");
                        background-repeat:no-repeat;
                    }

                    .th
                    {
                        background-image:url("../resources/hotel.jpg");
                        background-repeat:no-repeat;
                    }

                    .tc
                    {
                        background-image:url("../resources/car.jpg");
                        background-repeat:no-repeat;
                    }

                    .col-sm-4
                    {   
                        color: rgb(51, 51, 51);
                        padding-left: 10px;
                        padding-right: 10px;
                        padding-top: 14px;
                        padding-bottom: 14px;
                        border-radius: 4px;
                    }       

                    .button {
                          border-radius: 4px;
                          background-color: #CB7A80;
                          border: none;
                          color: #FFFFFF;
                          text-align: center;
                          font-size: 20px;
                          padding: 5px;
                          width: 400px;
                          transition: all 0.5s;
                          cursor: pointer;
                          margin: 5px;
                        }

                    .button span 
                    {
                        cursor: pointer;
                        display: inline-block;
                        position: relative;
                        transition: 0.5s;
                    }

                    .button span:after 
                    {
                        content: '\00bb';
                        position: relative;
                        opacity: 0;
                        top: 0;
                        right: -20px;
                        transition: 0.5s;
                    }

                    .button:hover span 
                    {
                        padding-right: 25px;
                    }

                    .button:hover span:after
                    {
                        opacity: 1;
                        right: 0;
                    }

                    .footer
                    {
                        background: #CB7A80;
                        padding-left: 600px;
                        
                    }

                    


        </style>


         
        <!--JS-->



    </head>
    <body>
        <div id="header">

                <div class="banner">  

                    <img src="/resources/logo.png" width="235" height="125">
                        
                </div>
        </div>
        
        

        <?php

            echo "<div class=\"tab\">\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'Home')\">Home</button>\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'Flights')\">Flights</button>\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'Hotels')\">Hotels</button>\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'Car Rentals')\">Car Rentals</button>\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'Guided Tours')\">Guided Tours</button>\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'Contact Us')\">Contact Us</button>\n";
            echo "<button class=\"tablinks\" onclick=\"openTab(event, 'About Us')\">About Us</button>\n";
            echo "</div>\n"; 

            ?>

            <div id="Home" class="tabcontent">

                <div class="container-fluid">
                    
                
                </div>

            </div>

        <div id="Flights" class="tabcontent tf">

            <!-- FLIGHTS TAB  -->

            <div class="container-fluid">

                    <h1>Flights</h1>
                    <p>Find flights now<p>
                    
                        <div class="row">

                            <div class="col-sm-4" style="background-color:lavender;">

                                 <div id="qs-flight"> <!-- FLIGHT TAB -->

                                    <div class="row">
                                        <div class="col-lg-12" data-toggle="buttons">
                                           
                                            <div class="btn-group" data-toggle="buttons">    
                                                <label class="btn btn-default btn-sm active">
                                                    <input name="options" value="flight-two-way" id="RadioButton_Return" checked="" type="radio"> Two Way
                                                </label>
                                                <label class="btn btn-default btn-sm">
                                                    <input name="options" value="flight-one-way" id="RadioButton_Oneway" type="radio"> One Way
                                                </label>
                                                <label class="btn btn-default btn-sm visible-lg">
                                                    <input name="options" value="flight-multi-stops" type="radio"> Multiple Stops
                                                </label>
                                            </div>

                                        </div>
                                        <div class="clearfix visible-lg visible-md visible-sm visible-xs">&nbsp;</div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputDepartureCity">Departure City</label>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input class="form-control ui-autocomplete-input" id="inputDepartureCity" placeholder="Departure City" autocomplete="off" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputDestinationCity">Destination</label>
                                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input class="form-control ui-autocomplete-input" id="inputDestinationCity" placeholder="Arrival City" autocomplete="off" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputDepartDate">Departure Date</label>
                                                <input class="form-control hasDatepicker" id="inputDepartDate" placeholder="dd-mm-yyyy" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="inputArrivalDate">Return Date</label>
                                                <input class="form-control hasDatepicker" id="inputArrivalDate" placeholder="dd-mm-yyyy" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="inputFlightClass">Class</label>
                                                <select class="form-control" id="inputFlightClass">
                                                    <option value="Economy" selected="">Economy</option>
                                                    <option value="Premium Economy">Premium Economy</option>
                                                    <option value="Business">Business</option>
                                                    <option value="First Class">First Class</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <label for="inputFlightAdults">Adult</label>
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
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                            <div class="form-group">
                                                <label for="inputFlightChild">Child</label>
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
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="button" class="button"> <span>Search</span></button>
                                        </div>

                                    </div>

                                </div>

                        <input class="hidden" id="hdnDeparture" name="hdnDeparture" type="text">
                        <input class="hidden" id="hdnArrival" name="hdnArrival" type="text">

                            </div>
                            <div class="col-sm-8">

                                

                                

                        </div>
                </div>

            </div>

        </div>



        <div id="Hotels" class="tabcontent th">

            <!-- HOTELS TAB  -->
          
            <div class="container-fluid">

                    <h1>Hotels</h1>
                    <p>Find hotels now<p>
                    
                        <div class="row">
                            <div class="col-sm-4" style="background-color:lavender;">

                                    <div id="qs-hotel">    

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group inner-addon left-addon">
                                        <label for="inputKeyWord">Search Hotels / Destination here</label>
                                        <input class="form-control ui-autocomplete-input" id="inputKeyWord" placeholder="Enter City or Destination" autocomplete="off" type="text">
                                        <input id="HiddenField_HotelKeywordName" name="HiddenField_HotelKeywordName" class="hidden" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label for="inputCheckIn">Check In Date</label>
                                        <input class="form-control hasDatepicker" id="inputCheckIn" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label for="inputCheckOut">Check Out Date</label>
                                        <input class="form-control hasDatepicker" id="inputCheckOut" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputRooms">Rooms</label>
                                        <select class="form-control" id="inputRooms">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputAdults">Adults per room</label>
                                        <select class="form-control" id="inputAdults">
                                            <option value="1">1</option>
                                            <option value="2" selected="">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden">
                                        <div class="form-group">
                                            <label for="inputHotelChild">Child per room</label>
                                            <select class="form-control" id="inputHotelChild">
                                                <option value="0" selected="">1</option>
                                                <option value="1"></option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <button type="button" class="button"><span>Search</span></button>
                                </div>
                            </div>

                        </div>  

                            </div>
                            <div class="col-sm-8"></div>
                        </div>
            </div>

        </div>

        <div id="Car Rentals" class="tabcontent tc">

            <!-- CAR RENTALS TAB  -->

            <div class="container-fluid">

                    <h1>Car Rentals</h1>
                    <p>Find cars for hire now</p>

                        <div class="row">
                            <div class="col-sm-4" style="background-color:lavender;">

                        <div id="qs-car">    

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group inner-addon left-addon">
                                        <label for="inputKeyWord">Search for Car Hire</label>
                                        <input class="form-control ui-autocomplete-input" id="inputKeyWord" placeholder="Enter City or Destination" autocomplete="off" type="text">
                                        <input id="HiddenField_CarCity" name="HiddenField_CarCity" class="hidden" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label for="inputCheckIn">Pick-up Date</label>
                                        <input class="form-control hasDatepicker" id="inputPickUp" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group inner-addon left-addon">
                                        <label for="inputCheckOut">Drop-off Date</label>
                                        <input class="form-control hasDatepicker" id="inputDropOff" placeholder="dd-mm-yyyy" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <button type="button" class="button"><span>Search</span></button>
                                </div>
                            </div>

                        </div>

                            </div>
                            
                        </div>
            </div>

        </div>

        <div id="Guided Tours" class="tabcontent">

            <!-- GUIDED TOURS TAB -->

            <div class="container-fluid">

                    <h1>Guided Tours</h1>
                    <p></p>

                        <div class="row">
                            <div class="col-sm-4" style="background-color:lavender;"></div>
                            <div class="col-sm-8"></div>
                        </div>
            </div>

        </div>

        <div id="Contact Us" class="tabcontent">

            <!-- CUSTOMER CARE TAB -->

            <div class="container-fluid">

                    <h1>Contact Us</h1>
                    <p></p>

                        <div class="row">
                            <div class="col-sm-4">

                            <img src="/resources/logo.png">

                            </div>
                            <div class="col-sm-8"></div>
                        </div>
                </div>

        </div>

        <div id="About Us" class="tabcontent"> 

            <!-- ABOUT US TAB -->

                <div class="container-fluid">
                    <h1>About Us</h1>
                    <p></p>
                        <div class="row">
                            <div class="col-sm-4">

                                <img src="/resources/logo.png">

                            </div>
                            <div class="col-sm-8">
                                <p>EVERY JUAN Travels Co. is a travel agency that offers Travel Packages, International and Domestic Ticketing, Hotel Accommodations, Visa Assistance, NSO & Passport Assistance and Custom Group Travel Packages</p>
                                <p></p>
                                <p>It is located at #013 Brgy. Poblacion, City of San Jose del Monte, Bulacan</p>
                            

                            </div>
                        </div>
                </div>

        </div>
        


        <script>
                // TAB MENU SCRIPT
                function openTab(evt, tabName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the button that opened the tab
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

        </script>
        
        <footer class= "footer">
            everyjuantravelsco.
        </footer>
    </body>
</html>