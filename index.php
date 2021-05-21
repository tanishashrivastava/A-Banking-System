<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="">

        <title>BASIC BANKING SYSTEM</title>
</head>

<body>
     <!-- Navigation Bar = List of Links/Other pages of website -->
    <?php
    include 'navbar.php';
    ?>
    <div class= "container=fluid">
    <!-- Introduction section -->
    <div class="row intro py-1" style="background-color : #e082b8;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>GREAT STATE BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img\bank.jpeg" class="img">
              </div>
            </div>
    <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img\user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : ##aa82e0;">Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="imp\transfer.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : ##aa82e0;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img\history.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : ##aa82e0;">Transaction History</button></a>
                  </div>
            </div>
        </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>TANSIHA SHRIVASTAVA</b> <br> Make Money Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>