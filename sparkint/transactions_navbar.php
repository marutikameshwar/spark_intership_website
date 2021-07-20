<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
</head>
<style>
    h4 {
        text-align: center;
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
    <h4>Transactions</h4>

    <?php
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

    ?>
    <table  class="table table-striped">
        <thead class="table-info">
        <tr>
            <th scope="col">serial No</th>
            <th scope="col">Sender name</th>
            <th scope="col">Reciver name</th>
            <th scope="col">Amount sent</th>
            <th scope="col"> status</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $result10=mysqli_query($conn,"Select * from transactions ");
        while( $row=mysqli_fetch_assoc($result10)){
            echo '<tr>
            <th scope="row">' .$row['id']. '</th>  
            <td>'.$row ['fromo'].'</td>   
            <td>'.$row ['too'].'</td>   
            <td>'.$row ['ammout'].'</td>
            <td>'.$row['status'].'</td>
            </tr>';
        }
        ?>
        </tbody>
    </table>
    <form action="index.html">
        <div class="text-center">
            <input type="submit" value="Return home" class="btn btn-primary " name="sub">
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
</body>
</html>
<?php

?>

