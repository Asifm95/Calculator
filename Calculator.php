<?php

session_start();
include 'includes/database.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="calc.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <style>
        body{
            /*background-color: #77aa77;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 2 1'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='1'%3E%3Cstop offset='0' stop-color='%2377aa77'/%3E%3Cstop offset='1' stop-color='%234fd'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='0' y2='1'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3ClinearGradient id='c' gradientUnits='userSpaceOnUse' x1='0' y1='0' x2='2' y2='2'%3E%3Cstop offset='0' stop-color='%23cf8' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23cf8' stop-opacity='1'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='2' height='1'/%3E%3Cg fill-opacity='0.5'%3E%3Cpolygon fill='url(%23b)' points='0 1 0 0 2 0'/%3E%3Cpolygon fill='url(%23c)' points='2 1 2 0 0 0'/%3E%3C/g%3E%3C/svg%3E");
                background-attachment: fixed;
                background-size: cover;
                background-position: center;*/
        }

        .delete{
            float: right;
        }
         .spacing{
            padding: 8px;
         }

         .form-control[disabled]{
            background-color: #739cc0;
         }


         #answer p{
            font-size: 26px;
            text-align: center;
            padding: 27px;
            margin-bottom: 0;

         }


    </style>
</head>
<body style="font-family: 'Titillium Web', sans-serif;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">CALCULATOR</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <form action="Calculator.php" method="POST">

                <li><button class="btn btn-success" type="submit" name="logout" style="margin: 7px">Log out</button></li>
                <?php
                if (isset($_POST['logout'])) {
                    session_unset();
                    session_destroy();
                    header('location:login.php');
                    exit();
                }

                ?>
                </form>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="col-md-8 well">
            <div class="col-md-7">
            <form class="form-group" id="form" autocomplete="off" action="operate.php" method="POST">
            <div class="col-md-6 spacing">
            <input type="text" name="num1" id="num1" placeholder="Enter No" class="form-control">
            </div>
            <div class="col-md-6 spacing">
            <select id="operator" name="operator" style="height: 34px; width: 100%">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            </div>
            <div class="col-md-6 spacing">
            <input type="text" name="num2" id="num2" placeholder="Enter No" class="form-control">
            </div>
            <div class="col-md-4 spacing">
            <button type="submit" class="btn btn-primary btn-sm form-control" id="calculate" name="calculate"
            disabled>Calculate</button>
            </div>
            <div class="col-md-2 spacing">
            <button type="button" class="btn btn-danger btn-sm form-control" id="clear">Clear</button>
            </div>

            </form>
            </div>


            <div class="col-md-5">
                <div id="answer" style="background-color: #ffffff;">

                    <?php
                    if (isset($_SESSION['ans'])) {
                        echo "<p> {$_SESSION['ans']} </p>";
                        unset($_SESSION['ans']);

                    }

                     ?>

                </div>
            </div>

            <div class="col-md-7">
                <div class="col-md-12" style="padding: 7px;">
                <div class="alert alert-danger alert-dismissible" id="warning" hidden>
                    <a href="#" class="close">&times;</a>
                    <strong>Error!</strong> Please enter numbers.
                </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="col-md-12 well" style="min-height: 154px">
            <form action="operate.php" method="POST">
            <h3 style="margin-top: 5px; display: inline-block;">History</h3>
            <button type="submit" class="btn btn-danger btn-sm pull-right" name="clearh"
            id="clea">clear all</button>
            </form>
            <div id="history">
                <?php

                    include 'includes/database.inc.php';

                    $sql = "SELECT * FROM history";
                    $result = mysqli_query($conn, $sql);
                    while ( $row = mysqli_fetch_assoc($result)) {?>
                        <p><?php echo "{$row['firstnum']} {$row['symbol']} {$row['secondnum']} = {$row['total']}"?>
                        <a href="operate.php?del=<?php echo $row['id'] ?>" class ='btn btn-success btn-xs pull-right' >clear</a></p>
                    <?php } ?>




            </div>
            </div>
        </div>
    </div>






<script>

    var check = {
        field1: false,
        field2: false
    }

    function valid(){
        if (check.field1 && check.field2) {
            $('#calculate').removeAttr("disabled");
        }
        else{
            $('#calculate').attr("disabled","true");
        }
    }

    function valid1(){
        var input = $(this).val();
        var testExp = new RegExp(/^[-+]?[0-9]+([-+*/.]+[-+]?[0-9]+)*$/);
        if (testExp.test(input) && input.length != 0){
            check.field1 = true;
            valid();
        }
        else{
            check.field1 = false;
            valid();

        }
    }

    function valid2(){
        var flag2 = false;
        var input = $(this).val();
        var testExp = new RegExp(/^[-+]?[0-9]+([-+*/.]+[-+]?[0-9]+)*$/);
        if (testExp.test(input) && input.length != 0){
            check.field2 = true;
            valid();

        }
        else{
            check.field2 = false;
            valid();

        }
    }

    function clear(){
        $('#answer').empty();
        $("#form")[0].reset();
        valid();
    }


    $(document).ready(function(){
        $('#num1').on('input', valid1);
        $('#num2').on('input', valid2);
        $(document).on('click', '#clear', clear);
        $('.close').on('click', function(){
            $('#warning').hide();
        })


    })


</script>
</body>
</html>
