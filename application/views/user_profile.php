<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost:8080/coreigniter_4/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<body>
    <div class="sidebar">
        <div class="logo_details">
            <span class="logo_name">Online_shop</span>
            <button
                style="width: 16%;height: 50%; margin-left: 11%; background: #001c4f;     border: 0px solid #ced4da;"
                class="hide ">
                <svg xmlns="http://www.w3.org/2000/svg" style="    margin-left: -34%; " width="32" height="32"
                    fill="white" class="bi bi-x-square" viewBox="0 0 16 16">
                    <path
                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>
        <ul class="nav-links">
            <li>
                <a href="http://localhost:8080/coreigniter_4/Crud/dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                        <path
                            d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z" />
                    </svg>
                    <span class="link-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8080/coreigniter_4/Crud/product">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-archive" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <span class="link-name">Product</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8080/coreigniter_4/Crud/order">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-card-checklist" viewBox="0 0 16 16">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path
                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <span class="link-name">Order list</span>
                </a>
            </li>
            <li>
                <a href="stock.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-stack" viewBox="0 0 16 16">
                        <path
                            d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z" />
                        <path
                            d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z" />
                    </svg>
                    <span class="link-name">Stock</span>
                </a>
            </li>
            <li>
                <a href="http://localhost:8080/coreigniter_4/Crud/website_setting">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-gear" viewBox="0 0 16 16">
                        <path
                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                        <path
                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                    </svg>
                    <span class="link-name"> Setting</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>
                    <span class="link-name"> Log Out</span>
                </a>
            </li>
        </ul>
    </div>


    <script>
        $(document).ready(function () {
            $(".show").click(function () {
                $(".sidebar").show("display: none");
            });
        });
        $(document).ready(function () {
            $(".hide").click(function () {
                $(".sidebar").hide("display: none");
            });
        });
    </script>
    <!-- home-content -->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <button class="show form-control" style="      border: 0px solid #ced4da;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="sidebarBtn" width="25" height="25"
                        fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
                        <path
                            d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <span class="dashboard">Online_Shop</span>
            </div>
            <div class="user-details">
                <input type="text" class="form-control" placeholder="  Search .....">
                <button type="button" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
            <div class="profile-details">
                <a href="#" style="    text-decoration: none; "><img
                        src="http://localhost:8080/coreigniter_4/image/16.png" alt="">
                    <span class="admin_name">Pravin</span>
                </a>
            </div>

        </nav>
    </section><br>

    <section id="Dashbord">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><b>Update Profile</b></h1>
                </div>
                <div class="col-12">
                    <h6 style="color: #a99191;"><a href="#" style="color: #9da2a9;text-decoration: none;">User </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                            class="bi bi-caret-right-fill" viewBox="0 0 16 16" style="    margin-bottom: 2px;">
                            <path
                                d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg> <span style="color: blue;">Profile</span>
                    </h6>
                </div>
            </div>
        </div>
        <?php
        $i = 1;
        foreach ($data as $row) {
            ?>
            <div class="container" style="background: whitesmoke;    text-align: center;border-radius: 2%;">
                <div class="row">
                    <div class="col-12" style="    margin-top: 3%;">
                        <img src="http://localhost:8080/coreigniter_4/image/<?php echo $row->photo; ?>" width="50" height="50"
                            style="    border-radius: 60%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 style=""><b>
                                <?php echo $row->first_name; ?>&nbsp
                                <?php echo $row->last_name; ?>
                            </b> </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 style="">
                            <?php echo $row->email; ?>
                        </h6>
                    </div>
                </div><br>
            </div><br>

            <form action="" method="post">
                <div class="container" style="">
                    <div class="row">
                        <div class="col-12" style="background: whitesmoke; border-radius: 2%;  ">
                            <div class="row">
                                <div class="col-12" style="    margin-top: 3%;">
                                    <h3 style=""><b>User information</b> </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style="    margin-top: 2%;">
                                    <h6 style="">Profile Picture :-</h6>
                                </div>
                                <div class="col-6" style="    margin-top: 2%;">
                                    <h6 style="">Phone Number :-</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style=" ">
                                    <input type="file" class="form-control" name="photo"
                                        value="<?php echo $row->first_name; ?>">
                                </div>
                                <div class="col-6" style=" ">
                                    <input type="text" class="form-control" name="phone_no"
                                        value="<?php echo $row->phone_num; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style="    margin-top: 4%;">
                                    <h6 style="">Name :-</h6>
                                </div>
                                <div class="col-6" style="    margin-top: 4%;">
                                    <h6 style="">Date of Birth :-</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style=" ">
                                    <input type="text" class="form-control" name="name"
                                        value="<?php echo $row->first_name; ?>">
                                </div>
                                <div class="col-6" style=" ">
                                    <input type="date" class="form-control" name="dob" value="<?php echo $row->dob; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style="    margin-top: 4%;">
                                    <h6 style="">Last name :-</h6>
                                </div>
                                <div class="col-6" style="    margin-top: 4%;">
                                    <h6 style="">Address :- </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style=" ">
                                    <input type="text" class="form-control" name="last_name"
                                        value="<?php echo $row->last_name; ?>">
                                </div>
                                <div class="col-6" style=" ">
                                    <input type="textarea" class="form-control" name="address"
                                        value="<?php echo $row->address; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style="    margin-top: 4%;">
                                    <h6 style="">Email ID :- </h6>
                                </div>
                                <div class="col-6" style="    margin-top: 4%;">
                                    <h6 style="">Gender :- </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6" style=" ">
                                    <input type="email" class="form-control" name="email"
                                        value="<?php echo $row->email; ?>">
                                </div>
                                <div class="col-6" style=" ">
                                    <select class="form-select" name="gender">
                                        <option selected>
                                            <?php echo $row->gender; ?>
                                        </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" style="     text-align: center;  margin-top: 4%; ">
                                    <input type="submit" class="btn btn-success" value="update" name="update">
                                </div>
                            </div><br>
                        </div>

                    </div>
                    <br>
                </div>
            </form>
            <?php
        }
        ?>
    </section>


    <br>


</body>

</html>