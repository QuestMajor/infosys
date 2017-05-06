<!DOCTYPE HTML>

<html>
	<head>
		<title>
			EVERY JUAN Travels Co.
		</title>
        <link rel="stylesheet" href="/resources/assets/css/frontend/frontend.css">
				<link rel="stylesheet" href="/resources/assets/css/general/bootstrap.min.css">
				<link rel="stylesheet" href="/resources/assets/css/general/font-awesome.min.css">

	</head>


<style>
  div.col-sm-8{

      cursor: pointer;
  }
</style>

	<body>

		<header>

			<div id="header"> <!-- logo -->

                <div class="banner col-sm-4">  

                    <img src="/resources/logo.png" width="175" height="105">
                        
                </div>

                <div class="col-sm-8" style="text-align:right; padding-top: 10px; padding-right: 30px;"> <!-- admin button -->

                    <a onclick="document.getElementById('loginform').style.display='block'"> Login</a>

                </div>

        	</div>

		</header>

			<div class="tab tablinks"> <!-- tab buttons -->


			<form action="/home">
             <button>Home</button>
            </form>

            <form action="/flights">
             <button>Flights</button>
            </form>

            <form action="/hotels"> 
             <button>Hotels</button>
            </form>

            <form action="/car-rentals">
             <button>Car Rentals</button>
            </form>

            <form action="/guided-tours">
             <button>Guided Tours</button>
            </form>

            <form action="/contact-us">
             <button>Contact Us</button>
            </form>

            <form action="/about-us">
             <button>About Us</button>
            </form>
        	
            </div> 

			@yield('content')

            

<div id="loginform" class="modal-login">
  
  <form class="modal-content-login animate-login" action="/admin" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="imgcontainer-login">
    <span onclick="document.getElementById('loginform').style.display='none'" class="close" title="Close Modal">&times;</span>
    <img src="/resources/lock.png" alt="Avatar" class="avatar">
    </div>

    <div class="container-login">
      <label><b>Username</b></label>
      <br>
      <input class="input-login" type="text" placeholder="Enter Username" name="uname" required>
      <br>
      <label><b>Password</b></label>
      <br>
      <input class="input-login" type="password" placeholder="Enter Password" name="psw" required>
      <br>
      <br>
      <button type="submit" class="buttonl">Login</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal-login = document.getElementById('loginform');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal-login) {
        modal-login.style.display = "none";
    }
}
</script>
		
		<footer>

            <div class="down">
			<div class="quick-access"> <!-- footer quick access -->
                |
				<a href="/home" style="color:red;"> HOME</a>
                |
				<a href="/flights" style="color:red;"> FLIGHTS</a>
                |
				<a href="/hotels" style="color:red;"> HOTELS</a>
                |
				<a href="/car-rentals" style="color:red;"> CAR RENTALS</a>
                |
				<a href="/guided-tours" style="color:red;"> GUIDED TOURS</a>
                |
				<a href="/about-us" style="color:red;"> ABOUT US</a>
                |
				<a href="/contact-us" style="color:red;"> CONTACT US</a>
                |
			

			<br>
			<div>
			<div class="footer">
				copyright@everyjuantravels
			<div>
</div>

		</footer>


	</body>


</html>