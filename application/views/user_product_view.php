<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->


</head>
<style>
    body {
        text-decoration: none;

    }
    .add_to_card{
        display:none;
    }

    .add_to_card :hover {
        display:block;
    }

    .product {
        display: flex;
        justify-content: center;
        text-align: center;
        width: 100%;
        /* background-color: red; */
    }

    .food {
        display: flex;
        justify-content: center;
        text-align: center;
        width: 100%;
        /* background-color: red; */
    }
    .sports {
        display: flex;
        justify-content: center;
        text-align: center;
        width: 100%;
        /* background-color: red; */
    }

    .data {
        margin-top: 2%;
        padding-top: 2%;
        margin-left: 1%;
        margin-right: 1%;
        background: whitesmoke;
        margin-bottom: 2%;
    }

    .content {
        background: white;
        width: 25%;
        margin-top: 1%;
        margin-right: 1%;
        border-radius: 2%;
        margin-left: 1%;
        margin-bottom: 2%;
        box-shadow: 0px 0px 3px 0px #888888;

    }

    h3 {
        background-color: whitesmoke;
    }

    .image {
        width: 100px;
        height: 44%;
    }

    .product :hover {
        box-shadow: black;

        /* .add_to_card{
        display:block;
        box-shadow: 0px 0px 100px 50px #888888;
        position: absolute;
        width: 7%;
        margin-left: 49px;
        margin-top: -3%;
        transition:  4s; */
    }
    

    .food :hover {
        
        box-shadow: black;
    }
    .sports :hover {
        
        box-shadow: black;
    }

    @media(max-width:1000px) {
        .product {
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            width: 100%;
            /* background-color: red; */
            flex-wrap: wrap;
            flex-direction: row;
            align-content: stretch;
        }

        .food {
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            width: 100%;
            /* background-color: red; */
            flex-wrap: wrap;
            flex-direction: row;
            align-content: stretch;
        }
        .sports {
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            width: 100%;
            /* background-color: red; */
            flex-wrap: wrap;
            flex-direction: row;
            align-content: stretch;
        }
    }

    @media(max-width:700px) {
        .product {
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            width: 100%;
            /* background-color: red; */
            flex-wrap: wrap;
            flex-direction: row;
            align-content: stretch;
        }

        .product {
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            width: 100%;
            /* background-color: red; */
            flex-wrap: wrap;
            flex-direction: row;
            align-content: stretch;
        }

        P {
            font-size: 70%;
        }

        .data .body h3 {
            font-size: 100%;
        }

    }

    @media(max-width:600px) {
        .content {
            width: 46%;
        }
    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}



/* Home-section css */

.home-section {
    background: #f5f5ff;
    /* position: relative; */
    /* min-height: 100vh; */
    left: calc(100% - 240px);
    left: 240px;
}

.home-section nav {
    height: 55px;
    background: whitesmoke;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;

}

.home-section nav .sidebar-button {
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 500;
}

.home-section nav .sidebar-button svg {
    font-size: 35px;
    margin-right: 10px;
}

.home-section nav .search-box {
    height: 50px;
    width: 550px;
    margin: 0 20px;
    position: relative;
}

nav .search-box input {
    position: absolute;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    padding: 0 15px;
    font-size: 17px;
    color: #000000;
    background: #F5F6FA;
    border: 2PX solid #efeef1;
    outline: none;
}

nav .search-box svg {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 22px;
    width: 40px;
    /* background: #2697ff; */
    border-radius: 6px;
    color: #000000;
    font-size: 22px;
    line-height: 40px;
    text-align: center;
}

.home-section nav .profile-details {
    display: flex;
    align-items: center;
    height: 50px;
    min-width: 139px;
    background: #F5F6FA;
    border: 2px solid#efeef1;
    border-radius: 6px;
    padding: 0 15px 0 2px;
}

nav .profile-details img {
    height: 40px;
    width: 40px;
    object-fit: cover;
    border-radius: 6px;
}

nav .profile-details .admin_name {
    font-size: 15px;
    font-weight: 500;
    color: #333;
    margin: 0 10px;
    white-space: nowrap;

}

nav .profile-details svg {
    color: #333;
    font-size: 25px;
}
nav .user-details  {
    display: flex;
 }
 .search-bar{
    display: none;
 }

 .user-list{
    background: whitesmoke;border-radius: 2%;text-align: center;
}

@media (max-width:550px) {
    nav .profile-details img {
        height: 30px;
        width: 30px;
        margin-left: 16%;
        object-fit: cover;
        border-radius: 6px;
    }
    .home-section nav .sidebar-button{
        font-size: 20px;
    }

    .dropdown-menu{
        left: -102px;

    }

    .Dashbord .user-list{
        font-size: 20px;
    }
    nav .user-details input {
       width: 80%;
       margin-left: 12%;
    }

    .search-bar{
        display: inline;
     }

    nav .profile-details .admin_name {
        font-size: 10px;
        font-weight: 500;
        display: none;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;

    }

    .home-section nav .profile-details {
        min-width: 50px;
        height: 40px;

    }
}
</style>

<body>
<div class="product-detail">
        <div class="data">
            <div class="body">
                <div class="product-heading" style="display: flex;">
                    <h4 style="    margin-left: 3%; width: 85%;"><b style="    font-size: 100%;"> Electronic Gadgest</b></h4>
                    <a href="http://localhost:8080/coreigniter_4/Crud/view_user" style="       display: flex;     margin-right: 3%;">
                        <p>View more</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </a>
                </div>
                    <div id="product" class="product">
                        <?php
                            foreach ($data as $row) {
                        ?>
                            <div class='content'>
                                <div class='img-box'style='    margin-top: 8%;'>
                                    <a href="http://localhost:8080/coreigniter_4/Crud/view_info_product?id=<?php echo $row->id; ?>"><img style='width: 150px;height: 150px;'class='images' src="<?php echo $row->image; ?>"></img></a>
                                </div>
                                <div class="add_to_card">
                                    <button style='height: 44px;width: 100%;background-color: #ffd13d;'>Buy Now</button>
                                </div> <br>
                                <div class='bottom'>
                                    <a href="#"><h3 style="background: white;"><?php echo $row->name; ?></h3></a>
                                    <a href="#"><p>₹  <?php echo $row->price; ?></p></a>  
                                </div>
                            </div>
                        <?php 
                               } 
                        ?>
                    </div> 
                </div>
            </div>
       </div>
    <div class="product-detail">
        <div class="data">
            <div class="body">
                <div class="product-heading" style="display: flex;">
                <h4 style="    margin-left: 3%; width: 85%;"><b style="    font-size: 100%;">Sports & Toys Items</b></h4>
                <a href="http://localhost:8080/coreigniter_4/Crud/view" style="       display: flex;     margin-right: 3%;">
                        <p>View more</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </a>
                </div>
                <div id="food" class="food">
                <?php
                                foreach ($toy as $row) {
                            ?>
                                <div class='content'>
                                    <div class='img-box'style='    margin-top: 8%;'>
                                        <a href=""><img style='width: 100px;height: 100px;'class='images' src="<?php echo $row->image; ?>"></img></a>
                                    </div>
                                    <div class="add_to_card">
                                        <button style='height: 44px;width: 100%;background-color: #ffd13d;'>Buy Now</button>
                                    </div> <br>
                                    <div class='bottom'>
                                    <a href="#"><p><?php echo $row->price; ?>$</p></a>
                                    <a href="#"><h3 style="background: white;"><?php echo $row->name; ?></h3></a>
                                    </div>
                                </div>
                            <?php 
                               } 
                            ?>
                </div>
            </div>
        </div>
    </div>
    <div class="product-detail">
        <div class="data">
            <div class="body">
                <div class="product-heading" style="display: flex;">
                <h4 style="    margin-left: 3%; width: 85%;"><b style="    font-size: 100%;">Home & Kitchen Essential</b></h4>
                <a href="http://localhost:8080/coreigniter_4/Crud/view" style="       display: flex;     margin-right: 3%;">
                        <p>View more</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg>
                    </a>
                </div>
                <div id="food" class="food">
                <?php
                                foreach ($home as $row) {
                            ?>
                                <div class='content'>
                                    <div class='img-box'style='    margin-top: 8%;'>
                                        <a href="http://localhost:8080/coreigniter_4/Welcome/view_info?id=<?php echo $row->id; ?>"><img style='width: 100px;height: 100px;'class='images' src="<?php echo $row->image; ?>"></img></a>
                                    </div>
                                    <div class="add_to_card">
                                        <button style='height: 44px;width: 100%;background-color: #ffd13d;'>Buy Now</button>
                                    </div> <br>
                                    <div class='bottom'>
                                    <a href="#"><h3 style="background: white;"><?php echo $row->name; ?></h3></a>
                                    <a href="#"><p><?php echo $row->price; ?>$</p></a>
                                    </div>
                                </div>
                            <?php 
                               } 
                            ?>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>