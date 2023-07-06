<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
 include("header.php"); 

 ?>
<body style="background-color:rgb(184, 238, 184);"> 

    <div class="container m-5">
            <h2 style="text-align: center;">VİP CEMİL</h2>
        <div class="row " style="margin-top: 4%;">
            <div class="col-sm-4" style="background-color:yellow;">


                <div class="row ">
                    <div class="col-sm-12" style="background-color:aqua;">
              <h2>Gurup 1</h2>
                    <div class="card-body">
        <div class="message-box contact-box">

            <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM `users`where degre=35";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>


        </div>
    </div>

                    </div>

                </div>
                <div class="row ">
                    <div class="col-sm-12" style="background-color:pink;">
                    <h2>Gurup 2</h2>

                               <div class="card-body"  style="background-color:pink;">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=36";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>


        </div>
    </div>

                    </div>

                </div>
                <div class="row ">
                    <div class="col-sm-12" style="background-color:burlywood;">
                    <h2>Gurup 3</h2>
                                <div class="card-body">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=37";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>


        </div>
    </div>

                    </div>

                </div>

                <div class="row ">
                    <div class="col-sm-12" style="background-color:beige;">
                    <h2>Gurup 4</h2>
                               <div class="card-body">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=38";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>

            
        </div>
    </div>

                    </div>

                </div>


            </div>
            <div class="col-sm-4"  style="background-color:rgb(184, 238, 184);">
                <div class="col-md-12">
                    <div class="image-card card">
                        <img src="resim.jpg" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                       
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4" style="background-color:cornsilk;">
            <h2>Gurup 5</h2>
                <div class="row ">
                    <div class="col-sm-12" style="background-color:cornsilk;">

                                 <div class="card-body">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=39";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>


        </div>
    </div>

                    </div>

                </div>
                <div class="row ">
                    <div class="col-sm-12" style="background-color:red;">
                    <h2>Gurup 6</h2>
                                <div class="card-body">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=40";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>




        </div>
    </div>

                    </div>

                </div>
                <div class="row ">
                    <div class="col-sm-12" style="background-color:pink;">
                    <h2>Gurup 7</h2>
         <div class="card-body">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=41";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>



        </div>
    </div>

                    </div>

                </div>

                <div class="row ">
                    <div class="col-sm-12" style="background-color:yellow;">
                    <h2>Gurup 8</h2>
                                <div class="card-body">
        <div class="message-box contact-box">

        <div class="message-widget contact-widget">
                <!-- Message -->
                
                <?php
require_once "db_connect.php";
$sql = "SELECT * FROM users where degre=42";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                
                
                <a href="<?php  echo $row["tiktoklink"] ?>" class="d-flex align-items-center">
                    <div class="user-img mb-0"> <img src="<?php  echo $row["imgpath"]; ?>"
                            alt="user" class="img-circle"> <span
                            class="profile-status online pull-right"></span> </div>
                    <div class="mail-contnet">
                        <h5 class="mb-0"><?php  echo $row["adi"]." ".$row["soyadi"]; ?></h5> 
                        
                    </div>
                </a>
                <?php } ?>
            </div>


        </div>
    </div>
                    </div>

                </div>
            </div>

        </div>



    </div>
 <?php include("footer.php"); ?>
</body>

</html>