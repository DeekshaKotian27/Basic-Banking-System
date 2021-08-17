<!DOCTYPE html>
<html lang="en">

<head>
    <title>Money Transfer </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;

        }

        * {
            font-family: Poppins;
        }
    </style>
</head>

<body>
    <?php
    include './connection.php';
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include './navbar.php';
    ?>
    <div class="center mt-0 #ffab00 amber accent-3">
        <h3><b><span><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" style="height:60px;width:50px" /></span>Money Transfer</b></h3>
    </div>
    <div class="container">
        <br />
        <div class="row">
            <div class="col">

                <div class="container-fluid table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">Client Id</th>
                                <th scope="col" class="text-center py-2">Image</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Bank Balance</th>
                                <th scope="col" class="text-center py-2">Perform Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($result)) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="center py-2"><?php echo (isset($rows['c_id']) ? $rows['c_id'] : ''); ?></td>
                                        <td class="center py-2"><?php echo '<img src="data:image;base64,'.base64_encode((isset($rows['img']) ? $rows['img'] : '')).'"  width="100" height="120">';?></td>
                                        <td class="center py-2"><?php echo (isset($rows['c_name']) ? $rows['c_name'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['c_mail']) ? $rows['c_mail'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['c_balance']) ? $rows['c_balance'] : ''); ?></td>
                                        <td class="center"><a href="userdetails.php?c_id=<?php echo $rows['c_id']; ?>"> <button type="button" class="btn hide-on-med-and-down">Transfer Money<i class="material-icons right">attach_money</i></button></a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="center footer">
        <h6 class="footer-copyright text-center py-3"><b>2021 © Made by Deeksha K Kotian</b></h6>
        The Sparks Foundation
        <div class="col-12 col-sm-4 ">
           <div class="text-center">
             <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
             <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
             <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
             <a  class="btn btn-social-icon btn-twitter"href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
             <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
             <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
           </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>