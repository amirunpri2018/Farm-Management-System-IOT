<!DOCTYPE html>
<html lang="en">
<head>

    <title>labuduuwa Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
    }
    .navbar {
        margin-bottom: 0;
        background-color: #1b1818;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
    }
    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #1b1818 !important;
        background-color: #fff !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }
    .dropbtn {
        background-color: #1b1818;
        color: #ffffff;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #1b1818;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #534d53;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #8a848a;}
    .carousel-inner img {

        width: 100%; /* Set width to 100% */
        height: 100%;
        margin: auto;
    }
    .container-fluid {
        padding: 60px 50px;
    }
    .bg-grey {
        background-color: #ffffff;
    }

    .logo {
        color: #51bf28;
        font-size: 200px;
    }
    h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #1b1818;
        font-weight: 400;
        margin-bottom: 30px;
    }
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }
    .thumbnail img {
        width: 400px;
        height: 200px;
        margin-bottom: 10px;
    }
    footer {
        background-color: #1b1818;
        color: #ffffff;
        padding: 32px;
    }

    footer a {
        color: #ffffff;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }
    .login-form {
        width: 385px;
        margin: 30px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
    .social-btn .btn {
        border: none;
        margin: 10px 3px 0;
        opacity: 1;
    }
    .social-btn .btn:hover {
        opacity: 0.9;
    }
    .social-btn .btn-primary {
        background: #507cc0;
    }
    .social-btn .btn-info {
        background: #64ccf1;
    }
    .social-btn .btn-danger {
        background: #df4930;
    }
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }

    .abc-cccc {

        padding: 8px;
    }
    .well {

        padding: 40px;
    }

</style>

<body >
<div class="container container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Home.html">LABUDUWA FARM</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="course.php">COURSES</a></li>
                    <li><a href="Order_foods.php">PRICING</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <ul class="nav navbar-nav navbar-right">
                        <!--li><a href="Registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->
                        <li><div class="dropdown">
                                <a><button class="dropbtn"><span class="glyphicon glyphicon-log-in"></span> Sign in | Sign up</button></a>
                                <div class="dropdown-content">
                                    <div ng-controller="loginbuttonctrl">
                                        <a  href="LoginSh.php" >Registered Shop</a>
                                        <a href="LoginFa.php">Registered Farmer</a>
                                        <a href="LoginSt.php" >Student</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--li><a href="FarmShopLoginForm.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li-->
                    </ul>
                </ul>
            </div>
        </div>

    </nav>

    <div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner" role="listbox" style=" width:100%; height:250px !important;">
            <div class="item active">
                <img src="img/y.jpg" alt="First Slide" width="100%">
                <div class="carousel-caption">
                    <h3>Vegetables and Fruits</h3>
                    <p>There are fresh vegetables and fruits</p>
                </div>
            </div>
            <div class="item">
                <img src="img/z.jpg" alt="Second Slide" width="100%" >
                <div class="carousel-caption">
                    <h3>Clean Milk Products</h3>
                    <p>Fresh Milk Products with good condition</p>
                </div>
            </div>
            <div class="item">
                <img src="img/zz.jpg" alt="Third Slide" width="100%">
                <div class="carousel-caption">
                    <h3>Farm House</h3>
                    <p>Vegetables , fruits & beans from farm house</p>
                </div>
            </div>
        </div>


        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <br/>
    <a href="LoginFa.php"><button class="btn btn-default">Back</button></a>

    <div class="container">
        <div class="login-form">

            <form name="register"  method="POST"  action="RegisterFarmer.php"  onsubmit="return validate();" >
                <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Farmer Registration</h2>

                <tr>
                    <td>NIC</td><td><input type="text" name="nic" class="form-control" required/></td>
                </tr>

                <tr>
                    <td>Name</td><td><input type="text" name="name" class="form-control" required/></td>
                </tr>
                <tr>
                    <td>MobileNumber</td><td><input type="text" name="mobile"  class="form-control" required/></td>
                </tr>
                <tr>
                    <td> Email</td><td><input type="text" name="email"  class="form-control" required/></td>
                </tr>
                <tr>
                    <td> Gender</td><td><input type="text" name="gender"  class="form-control" required /></td>
                </tr>
                <tr>
                    <td>Address</td><td><input type="text" name="address" class="form-control" required/></td>
                </tr>
                <tr>
                    <hr>
                    <td><u> Varieties</u></td><br/>
                    Vegetables
                    <td> <input type="radio" name="q1" value="Vegetables" data-toggle="modal" data-target="#myModal"/>
                        <br>Fruits
                        <input type="radio"  name="q1" value="Fruits" data-toggle="modal" data-target="#myModal"/>
                        <br>Animal products
                        <input type="radio" name="q1" value="Animal products" data-toggle="modal" data-target="#myModal"/>
                        <br>Milk based products
                        <input type="radio" name="q1" value="Milk based products" data-toggle="modal" data-target="#myModal"/>
                        <br/><hr>
                    </td>
                </tr>
                <tr>
                    <td> UserName</td><td> <input type="text"class="form-control"  name="username" required></td>
                </tr>
                <tr>
                    <td> Password</td><td> <input type="password" class="form-control"  name="password" required></td>
                </tr>

                <tr>
                    <td><input id="submit" type="submit" name="submit" value="Sign-Up" class="btn btn-info"></td>
                </tr>
                <tr>
                    <div class="col-sm-4"></div><td><div class="col-sm-4">
                            <a class="btn" href="LoginFarmer.html">Sign-In</a></div></td>
                </tr>

            </form>
        </div>
    </div>
    <script>
        function validate()
        {
            var nic =ducument.register.nic.value;
            var name = document.register.name.value;
            var mobile = document.register.mobile.value;
            var email = document.register.email.value;
            var gender = document.register.gender.value;
            var address = document.register.address.value;
            var q1 = document.register.q1.value;
            var username = document.register.username.value;
            var password = document.register.password.value;

            if (nic==null || nic=="")
            {
                alert("Nic can't be blank");
                return false;
            }
            else if (name==null || name=="")
            {
                alert("Email can't be blank");
                return false;
            }
            else if (mobile==null || mobile=="")
            {
                alert("Mobile can't be blank");
                return false;
            }
            else if (email==null || email=="")
            {
                alert("Email can't be blank");
                return false;
            }
            else if (gender==null || gender=="")
            {
                alert("gender can't be blank");
                return false;
            }
            else if (address==null || address=="")
            {
                alert("address can't be blank");
                return false;
            }
            else if (q1==null || q1=="")
            {
                alert("variety can't be blank");
                return false;
            }

            else if (username==null || username=="")
            {
                alert("Username can't be blank");
                return false;
            }
            else if(password.length&amp;lt;6)
            {
                alert("Password must be at least 6 characters long.");
                return false;
            }

        }
    </script>

</div>
<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>

    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-5 flex-center">

                    <!-- Facebook -->
                    <div class="col-md-2 mb-md-1 mb-1">
                        <a class="fb-ic">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!-- Twitter -->
                    <div class="col-md-2 mb-md-1 mb-1">
                        <a class="tw-ic">
                            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </div>
                    <!-- Google +-->
                    <div class="col-md-2 mb-md-1 mb-1">
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </div>
                    <!--Linkedin -->
                    <div class="col-md-2 mb-md-1 mb-1">
                        <a class="li-ic">
                            <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </div>
                    <!--Instagram-->
                    <div class="col-md-2 mb-md-1 mb-1">
                        <a class="ins-ic">
                            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                    </div>
                    <div class="col-md-2 mb-md-1 mb-1">
                        <a class="pin-ic">
                            <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:

    </div>
</footer>
</div>
</body>
</html>
