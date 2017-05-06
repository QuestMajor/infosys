<!doctype html>
<html>
    <head>
    	<base href="<?php echo "http://" . $_SERVER["SERVER_NAME"]; ?>">
        <title>Administration Panel</title>
        <link rel="stylesheet" href="/resources/assets/css/backend/backend.css">
        <link rel="stylesheet" href="/resources/assets/css/general/bootstrap.min.css">
        <link rel="stylesheet" href="/resources/assets/css/general/font-awesome.min.css">
        <!--CSS-->
        <style type="text/css">
            
        </style>
        <!--JS-->
    </head>
    <body>
        <header>

            <div id="header">



                <div class="banner col-sm-4">  

                    <img src="/resources/logo.png" width="175" height="105">
                        
                </div>

                <div class="col-sm-8" style="text-align:right; padding-top: 10px; padding-right: 30px;"> <!-- back button -->

                    <a href="/home"> Back to webpage</a>

                </div>

                

            </div>

            </header>
         
        <div id="container">

            <h2>Administration Panel</h2>

            <div class="tab tablinks"> <!-- tab buttons -->


            <form action="/adhome" id="defaultOpen">
             <button>Home</button>
            </form>

            <form action="/adflights">
             <button>Flights</button>
            </form>

            <form action="/adhotels"> 
             <button>Hotels</button>
            </form>

            <form action="/adcar-rentals">
             <button>Car Rentals</button>
            </form>

            <form action="/adguided-tours">
             <button>Guided Tours</button>
            </form>

            <form action="/adcontact-us">
             <button>Contact Us</button>
            </form>

            <form action="/adabout-us">
             <button>About Us</button>
            </form>
            
            </div> 


            @yield('content')

    
</div>
        <script>
        function openMenu(evt, menuName) {
            var i, tabcontentAdmin, tablinks;
            tabcontentAdmin = document.getElementsByClassName("tabcontentAdmin");
            for (i = 0; i < tabcontentAdmin.length; i++) {
                tabcontentAdmin[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>


    </body>
</html>