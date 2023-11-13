<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .image{
        margin-top: 40%;   width: 250px; height: auto;
    }
    .shop{
        margin-top: -5%;
    }
    @media (max-width:1000px) {
        .container .row {
        display:flex;
        flex-direction: column;
    }
    .container .row .col-4{
        max-width: 100.333333%;
    }
    .container .row .col-4img{
        margin-top: 10%;
    }
    .rounded{
        margin-top: 10%;
    }

    .container .row .col-6{
        max-width: 100%;
    }

    .shop{
        margin-top: -1%;
    }
    
    }

    @media (max-width:550px) {
        .container .row .col-4{
        max-width: 88.333333%;
        margin-left: 6%;
    }
    .container .row .col-12{
        max-width: 88%;
        margin-left: 6%;
    }
    }
</style>

<body style="    background-color: whitesmoke;"><br>
<?php
  $i=1;
  foreach($data as $row)
  {
  ?>
    <div class="container">
        <div class="row" >
            <div class="col-4" style="    background-color: white;"><br>
                <img src="<?php echo $row->image;?>" class=" image rounded mx-auto d-block" alt="..."style=" ">
                <div class="row" style="align-items: center;    margin-top: 10%;">
                    <div class="col-6" style="background-color: white;"><br>
                        <button  class="form-control" style="background: #ff9f00;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class=" shop bi bi-cart4" viewBox="0 0 16 16" style="">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg><span style="color: black;"><b>  Add To Card</b></span>
                        </button>
                    </div>
                    <div class="col-6" style="    background-color: white;"><br>
                    <a href="http://localhost:8080/coreigniter_4/Crud/checkout?id=<?php echo $row->id;?>" style="    text-decoration: none;">
                        <button  class="form-control" style="background: #fb641b;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5z"/>
                            </svg><span style="color: black;"><b>Buy now</b></span></button>
                    </a>
                        
                    </div>
               </div>
            </div>
            <div class="col-8" style="    max-width: 100.666667%;">
                <div class="row">
                    <div class="col-12" style="    background-color: white;"><br>
                    
                        <h4>Fire-Boltt Ninja Call Pro Smart Watch Dual Chip Bluetooth Calling, 1.69" Display, AI Voice Assistance with 100 Sports Modes, with SpO2 & Heart Rate Monitoring</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;"><BR>
                        <b style="font-size: 150%;">₹<?php echo $row->price;?></b>       <span>₹86% off</span>
                    </div>
                </div>
                <div class="row" style=" ">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: %;">M.R.P.: ₹17,999</p>
                    </div>
                </div>
                <div class="row" style=" display: flex;flex-direction: row;   ">
                    <div class="col-12" style=" display: flex;  background-color: white;">
                        <p style="font-size: 18px;">Strap Color :</p>
                        <span style="color: red;border: 1px solid black;     height: 86%;   margin-left: 8%;    border-radius: 25%;background: red;"><b><p style=" width: 32px;">5</p></b></span>&nbsp;
                        <input type="checkbox">
                        <span style="color: black;border: 1px solid black;  height: 86%;    margin-left: 3%;  border-radius: 25%;background: black;"><b><p style=" width: 32px;">5</p></b></span>&nbsp;
                        <input type="checkbox">
                        <span style="color: white;border: 1px solid black;  height: 86%;   margin-left: 3%;   border-radius: 25%;background: white;"><b><p style=" width: 32px;">5</p></b></span>&nbsp;
                        <input type="checkbox">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;"><br>
                        <p style="font-size: 18px;"><b>Product details</b></p>
                    </div>
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">Brand :   Fire-Boltt</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">Model Name:   Ninja Call Pro</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">Style :   Modern</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">Display Size :   1.69 inche</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;"><br>
                        <p style="font-size: 18px;"><b>About This Item</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   1.83 inch Large Color LCD Full Touch Screen with 2.5D Curved Glass and   240*284 pixel Resolution.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   Ultra Thin 9.8mm and IP68 Water Resistance.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   Smart Health Tracking with SpO2, Heart Rate, Sleep Monitoring.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   100 + Cloud Faces to match each style | All in One Social Update Notifications.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   Touchscreen.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   Fitness & Outdoor.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="    background-color: white;">
                        <p style="font-size: 18px;">*   Battery Runtime: Upto 8 days.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <br>

    <?php } ?>
</body>
</html>