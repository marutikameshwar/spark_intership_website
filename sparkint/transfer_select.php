<?php
function drop1()
{
//    $user_id1 = '';
//    $user_id2 = '';


    $servername = "localhost";
    $database = "sparkint";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $result = mysqli_query($conn, "Select * from coustmer");
    echo('<option selected value="-1">Choose from which account you want to send the ammount</option>');
    while ($row1 = mysqli_fetch_assoc($result)) {
        echo('<option value="' . $row1['id'] . '" >' . $row1['name'] . '</option>');

    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<style>
    h4 {
        text-align: center;
    }

    form {
        padding: 10px;
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
</style>
<body>
<! –– the start of the navigation bar ––>
<nav class="navbar navbar-expand-lg navbar-light bg-primary" >

    <a class="navbar-brand" href="index.html"><img src="spark.png" alt="" width="100" height="30">  Bank of Spark</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="main.php">customers <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transfer.php">Transfer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transactions_navbar.php">Transations</a>
            </li>
        </ul>
    </div>
</nav>
<! –– the end of the navigation bar ––>
<h4>Money Transfer</h4>

<form action="transactions.php" method="post">
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Select from which account you want to send the
                ammount</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="d">
              <?php drop1();?>

            </select>
        </div>
    </div>

    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect1">Select to which account you want to send the
                ammount</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect1" name="d2">
                <?php


                $servername = "localhost";
                $database = "sparkint";
                $username = "root";
                $password = "";


                $conn = mysqli_connect($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }


                $result = mysqli_query($conn, "Select * from coustmer ");
                $result1 = mysqli_query($conn, "Select * from coustmer where id = " . $_POST['moneyto']);

                //                echo('<option value="">Choose to which account you want to send the ammount</option>');

                while ($row1 = mysqli_fetch_assoc($result1)) {
                    echo('<option selected value="' . $_POST['moneyto'] . '">' . $row1['name'] . '</option>');
                }

                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="ammount" class="col-sm-2 col-form-label">Ammount</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="ammount" name="ammt" placeholder="enter the ammount">
        </div>
    </div>
    <p></p>
    <div class="text-center">
        <input type="submit" value="make the transaction" class="btn btn-primary " name="sub">
    </div>

</form>


<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: blue;">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">Maruti Kameshwar@spark intership</a>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
