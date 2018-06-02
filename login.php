
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <style>
    body{

    	/*background-color: #dbced1;
		background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='36' height='72' viewBox='0 0 36 72'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23807295' fill-opacity='0.47'%3E%3Cpath d='M2 6h12L8 18 2 6zm18 36h12l-6 12-6-12z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");*/
		font-family: 'Titillium Web', sans-serif;

    }

    .modal-content{
        width: 50%;
        margin: auto;
        background: #f5f5f5;
        border-radius: 1px;
    }

    .modal .form-control{
        margin-bottom: 12px;
    }

    </style>
</head>
<body>
	<div class="container-fluid">
    <div class="col-md-12" style="padding-top: 100px">
      
        <div class="col-md-8" style="text-align: center;">
         <h3 style="font-size: 90px; margin: 0; color: black">Calculator <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIuNjExIDEzLjY2M2MuMjYyLS4xODcuNTU5LS4yNzQuODQ5LS4yNzQuNjE2IDAgMS4yMS4zOTIgMS40MDUgMS4wNDQtLjI0OS0uMTkxLS41NDEtLjI4NS0uODM2LS4yODUtLjMwMSAwLS42MDMuMDk3LS44NjYuMjg1LS41MjIuMzc0LS43NTMgMS4wMDktLjU1MSAxLjYxMS0uODE0LS41ODEtLjgxOS0xLjc5NS0uMDAxLTIuMzgxem0yLjA3MyA3LjgzMWMuNjUxLjIxOCAyLjY2NS43NzIgNC45OTkgMi41MDZsNC4zMTctMy4wODhjLTEuMTIzLTEuNTY5LS44MTYtMi42NjktMS45MzItNC4yMjktLjQ5OS0uNjk1LS45MzktMS4xMi0xLjc1NS0uOTc3bC0uMjM0LjA0My4zOTQuNTQ4Yy4yMzkuMzM1LS4yNjcuNjgzLS40OTkuMzU3bC0uMzUxLS40OWMtLjEyNC0uMTc0LS4zNC0uMjU2LS41NDgtLjIxbC0uNzk2LjE3OS40NzguNjY2Yy4yNC4zMzYtLjI2Ny42ODEtLjQ5OS4zNTZsLS40MTItLjU3NmMtLjEyOS0uMTgtLjM1My0uMjYtLjU2Mi0uMjA4bC0uODA5LjIwMy41MDQuNzA1Yy4yNDEuMzM2LS4yNjcuNjgyLS40OTkuMzU3bC0xLjY1OC0yLjMzNGMtLjI2OS0uMzc2LS43OTMtLjQ2My0xLjE3LS4xOTQtLjM3Ni4yNy0uNDY0Ljc5My0uMTkzIDEuMTdsMi42MzIgMy43Yy0uODEyLS4yOTktMi4wNTktLjQyNi0yLjI4OS40MTEtLjEzOS41MDEuMjYyLjg5OC44ODIgMS4xMDV6bS0uNjg0LTE4LjQ5NGgtMTF2NWgxMXYtNXptLTcgOWgzdi0yaC0zdjJ6bS0xLTJoLTN2Mmgzdi0yem0wIDNoLTN2Mmgzdi0yem0tMyA1aDN2LTJoLTN2MnptNy01aC0zdjJoM3YtMnptMi4zMDYgNmgtMTAuMzA2di0xN2gxM3Y5Ljc1YzEuNDg3LjczMyAyIDIuNTQ2IDIgMi41NDZ2LTE0LjI5NmgtMTd2MjFoMTEuODIxYy0uMTI4LS44MDIuMDQ5LTEuMzc5LjQ4NS0yem0tMS4zMDYtOXYyaC41MDdjLjcwOS0uNDg2IDEuNTY5LS43MTEgMi40OTMtLjU2OHYtMS40MzJoLTN6bS0xIDZoLTN2Mmgzdi0yeiIvPjwvc3ZnPg==" style="width: 60px"></h3>
          <h4 style="margin-left:6px; font-size: 25px">Welcome to the calculator app.</h4>
        </div>


        <div class="col-md-3">
          <form class="form-signin well" autocomplete="off" action="login.php" method="POST">
          <div class="form-group">
            <label for="username" style="font-weight: 600">Username or Email address</label>
            <input type="text" class="form-control" name="username" id="username" style="margin-bottom: 10px">

            <label for="password" style="font-weight: 600">Password</label>
            <span>
            <a href="#" style="float: right; text-decoration: none; font-weight: 600; font-size:12px">Forgot password?</a>
            </span>

            <input type="password" class="form-control" name="password" id="password">
            <button class="btn btn-success btn-block" name="submit" type="submit"
            style="background-image: linear-gradient(-180deg, #34d058 0%, #28a745 90%);
             margin-top: 24px; font-weight: 600" >Sign in</button>
            <?php
            
                session_start();
                if (isset($_POST['submit'])) {
                include 'includes/database.inc.php';

                $uname =$_POST['username'];
                $pwd =$_POST['password'];

                if (empty($uname) || empty($pwd)) {
                    echo'<div class="alert alert-danger alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                        <a href="#" class="close">&times;</a><span>Please enter valid username</span></div>';
                    }else {
                        $sql = "SELECT * FROM users WHERE username='$uname'";
                        $result = mysqli_query($conn, $sql);
                        $resultchk = mysqli_num_rows($result);

                        if ($resultchk < 1) {
        
                        echo'<div class="alert alert-danger alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                            <a href="#" class="close">&times;</a><span>Wrong username or password</span></div>';
                        }else {
                            if ($row = mysqli_fetch_assoc($result)) {
                            if($pwd == $row['pwd']){
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['pwd'] = $row['pwd'];

                            header('location: Calculator.php');
                            exit();
                            }else {
                        
                                echo'<div class="alert alert-danger alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                                    <a href="#" class="close">&times;</a><span>Wrong username or password</span></div>';
                                }
                            }
                    }
                }

            }else {
                //header('location: login.php?login=error');
                }

            ?>
            </div>
          </form>

            <div class="well" style="margin-top: 20px; text-align: center; background-color: #2b3137;">
                <span style="color: white">Don't have an account?<a href="" data-toggle="modal" data-target="#myModal">  Sign Up</a>   
            </div>
        </div>



        <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="" style="margin: 0;">Please enter details</h3>
                        </div>
                        <div class="modal-body">
                          <form class="form-group" action="login.php" method="POST">
                            <label>Username</label>
                            <input type="text" name="sign_user" class="form-control">
                            <label>Email address</label>
                            <input type="email" name="sign_email" class="form-control">
                            <label>Password</label>
                            <input type="password" name="sign_pass" class="form-control">
                            <button type="submit" class="form-control btn btn-success" name="signup"
                            style="background-image: linear-gradient(-180deg, #34d058 0%, #28a745 90%);
                            margin-top: 12px">Sign up</button>
                            <?php

                            if(isset($_POST['signup'])){
                                include 'includes/database.inc.php';
                                $suser = $_POST['sign_user'];
                                $seamil = $_POST['sign_email'];
                                $spwd = $_POST['sign_pass'];

                                if (empty($suser)||empty($seamil)||empty($spwd)) {
                                   echo'<div class="alert alert-danger alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                                    <a href="#" class="close">&times;</a><span>All fields are required</span></div>';
                                }else{

                                    $sql = "SELECT * FROM users WHERE username = '$suser'";
                                    $results = mysqli_query($conn, $sql);
                                    $resultchk = mysqli_num_rows($results);

                                    if ($resultchk > 0) {
                                        echo'<div class="alert alert-danger alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                                        <a href="#" class="close">&times;</a><span>Username already taken</span></div>';
                                    }else{
                                        if(!filter_var($seamil, FILTER_VALIDATE_EMAIL)){
                                            echo'<div class="alert alert-danger alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                                        <a href="#" class="close">&times;</a><span>Enter valid Email</span></div>';
                                        }else{
                                            $sql = "INSERT INTO users(username, email, pwd) 
                                            VALUES ('$suser', '$seamil', '$spwd')";
                                            mysqli_query($conn, $sql);
                                            echo'<div class="alert alert-success alert-dismissible" id="warning" style="margin-top: 20px; margin-bottom: 0px">
                                        <a href="#" class="close">&times;</a><span>Signup successful</span></div>';

                                        }
                                    }
                                }
                            }






                            ?>
                          </form>
                        </div>
                      </div>
                      
                    </div>
                  </div>




    </div>
    </div>

  <script>

    $(document).ready(function(){
        $('.close').on('click', function(){
            $('#warning').hide();
        })
        $('#myModal').modal({
            //backdrop: 'static',
            keyboard: false
        }) 
    })
  </script>
</body>
</html>
