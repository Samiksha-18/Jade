<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Clothing website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
	<style type="text/css">
		.navbar{
			background-color: black;
			margin-bottom: 20px;
			padding: 10px;
		}

		.navbar img{
	      width: 20%;
	    }


		.nav-item{
			padding-left: 10px;
			padding-right: 10px;
		}

		a:link , a:visited{
			color: #f3d8e6;
			font-size: 16px;
		}

		a:hover, a:active{
			color: white;
		}

		.dropdown-menu{
			background-color: black;
		}

		footer .fa{
        padding: 15px;
        font-size: 20px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 5px;
        border-radius: 50%;
    	}

		.t2{
	      background-color: #c33c82;
	      padding: 0.5px;
	      margin-bottom: 20px;
	      width: 40%;
	      margin: auto;
	      display: block;
	      margin-bottom: 25px;
	    }

	    footer .fa: hover{
	          opacity: 0.7;
	    }

	    .fa-facebook {
	        background: #3B5998;
	        color: white;
	    }

	    .fa-twitter {
	        background: #55ACEE;
	        color: white;
	    }
	    .fa-instagram {
	      background: #e95950;
	      color: white;
	    }

	    footer{
	      margin-top: 30px;
	      color: white;
	      background-color: #353135;
	    }

	    footer p{
	      font-size: 14px;
	    }
	</style>


<body>
	<nav class="navbar navbar-expand-lg">
	<div class="container navigation">
	  <a class="navbar-brand logo" href="index.php">
	  	<img src="./images/logo11.png">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>


	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active px-2">
	        <a class="nav-link active-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Categories
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Women</a>
	          <a class="dropdown-item" href="#">Men</a>
	          <a class="dropdown-item" href="#">Kids</a>
	        </div>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="about_us.php">About</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="contact_us.php">Contact Us</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="login.php">Log in</a>
	      </li>
	      <li class="nav-item px-2">
	        <a class="nav-link" href="registration.php">Sign Up</a>
	      </li>
	      <li class="nav-item px-2">
	      	<a href="cart.php"><span style=" color:#edc4d9; font-size:30px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
	      </li>


	    </ul>
	  	</div>
	  </div>
	</nav>

<footer class=" text-center text-lg-start">

    <!-- Grid container -->
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>CONTACT</h5>
          <div class="t2"></div>
          <p>Telephone No. 022-12345678 <br>
            Mobile No. 9876543210 <br>
            Address : Blg no. 2, Vile Parle East, Mumbai.
          </p>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>OUR SERVICES</h5>
          <div class="t2"></div>
          <p>We deliver to pin codes all over India. <br> Provide round the clock service for smooth shopping experience.</p>
        </div>
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5>SOCIAL MEDIA</h5>
          <div class="t2"></div>
          <p>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <a href="https://www.facebook.com/Sitename-105141044961440" target="blank" class="fa fa-facebook"></a>
            <a href="https://twitter.com/Sitename10" target="blank" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/" target="blank" class="fa fa-instagram"></a>
          </p>
        </div>
      </div>
    </div>
  <div class="text-center p-3">
    © 2021 Copyright:
    <a class="text-light" href="index.php">Jade.com</a>
  </div>

</footer>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>