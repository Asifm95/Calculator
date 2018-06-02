<?php  
session_start();
  	if(isset($_POST['calculate'])){
                    include 'includes/database.inc.php';
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                        if (is_numeric($num1) && is_numeric($num2)) {
                            
                            if ($_POST['operator'] == 'add') {
                                $symbol = "+";
                                $total = $num1 + $num2;
                                $sql = "INSERT INTO history(firstnum, symbol, secondnum, total) 
                                VALUES('$num1','$symbol','$num2','$total')";
                                mysqli_query($conn, $sql);
                            }

                            if ($_POST['operator'] == 'subtract') {
                                $symbol = "-";
                                $total = $num1 - $num2;
                                $sql = "INSERT INTO history(firstnum, symbol, secondnum, total) 
                                VALUES('$num1','$symbol','$num2','$total')";
                                mysqli_query($conn, $sql);
                            }

                            if ($_POST['operator'] == 'multiply') {
                                $symbol = "*";
                                $total = $num1 * $num2;
                                $sql = "INSERT INTO history(firstnum, symbol, secondnum, total) 
                                VALUES('$num1','$symbol','$num2','$total')";
                                mysqli_query($conn, $sql);
                            }

                            if ($_POST['operator'] == 'divide') {
                                $symbol = "/";
                                $total = $num1 / $num2;
                                $sql = "INSERT INTO history(firstnum, symbol, secondnum, total) 
                                VALUES('$num1','$symbol','$num2','$total')";
                               	mysqli_query($conn, $sql);
                            }

                            $_SESSION['ans'] = $total;
                            header('location: Calculator.php');


                        }
                    
                    }

    if (isset($_POST['clearh'])) {
    	include 'includes/database.inc.php';
    	$sql = "DELETE FROM history";
    	mysqli_query($conn, $sql);
    	header('location: Calculator.php');



    }

    if (isset($_GET['del'])){
    	include 'includes/database.inc.php';
    	$id = $_GET['del'];
    	$sql = "DELETE FROM history WHERE id = $id";
    	mysqli_query($conn, $sql);
    	header('location: Calculator.php');

    }