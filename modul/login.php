<?php
include 'session.php';
?>

<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css">
    </head>

    <body>
        <!-- background -->
        <style>
            body{
                background-image: url(bg.jpg);
                background-size: cover;
                background-attachment: fixed;
            } 
            </style>
        <!-- end of background -->

        <!-- navbar -->
        <nav class="navbar justify-content-between">
            <div class="navbar-brand">
                <a  href="#">RE:vive</a>
            </div>
    
            <div class="menu">
                <a href="index.html">Home</a>
                <a href="#" class="active">Sign in</a>
                <a href="HalamanRegist.html">Sign up</a>
                <a href="About.html">About</a>
            </div>
        </nav>
        <!-- end of navbar -->

        <!-- form login -->
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center">Sign In<span class="font-weight-boldtext-secondary">
                            </span>
                        </h5>
                    </div>
                    <body>
                        <div class="card-body">
                            <form action="menu_utama.html">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <button type="button" onclick="validasi()" class="btn btn-primary">Sign in</button>
                                <!-- <button onclick="konfirmasi()"><a href ="MenuUtama.html"></a>Sign in</button>
                                <p id="pesan"></p> -->
                            </form>
                        </div>
                        <script type="text/javascript">
                            function validasi() {
                                var name = document.getElementById("nama").value;
                                var pw = document.getElementById("password").value;
                                console.log(name,pw)
                                if(name == "rivaniarhn" && pw == "12345"){
                                    window.location.href = "MenuUtama.html"
                                }else if (name !== "rivaniarhn" && pw == "12345"){
                                    alert("Sorry, username is wrong!");
                                }else if (name == "rivaniarhn" && pw !== "12345"){
                                    alert("Sorry, password is wrong!");
                                }else{
                                    alert('Please enter your username and password!');
                                }
                            }
                        </script>
                    </body>
                    </div>
                </div>
            </div>
        </div>
    <!-- end of form login -->

     <!-- footer -->
     <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>&copy; by 18111143_RivaniaRohana_TIFRP18CNSA</p>
            </div>
          </div>
        </div>
      </footer>
    <!-- end of footer -->
    </body>
</html>