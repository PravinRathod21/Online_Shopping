<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>


</head>
<style>
    @media (max-width: 1500px) {
        .container {
            max-width: 400px;
            margin-top: 10%;
        }
    }

    /* @media (max-width: 1200px)
 {.container{max-width: 500px;
    margin-top: 20%;}
    } */
    @media (max-width: 1000px) {
        .container {
            max-width: 400px;
            margin-top: 25%;
        }
    }

    @media (max-width: 500px) {
        .container {
            max-width: 385px;
            margin-top: 35%;
        }
    }

    @media (min-width: 1500px) {
        .container {
            max-width: 400px;
            margin-top: 13%;
        }
    }
</style>

<body style="background: #292929">
    <div class="container" id="otp">
        <form method="post" action="#"
            style="background: #8d8d8d;border-radius: 7%;     box-shadow: 0px 0px 20px 0px #888888;">
            <br>
            <div class="row">
                <div class="col-12">
                    <p style="      margin-top: -16%;  text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-person-circle" style="background: white;border-radius: 56%;"
                            viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </p><br>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
                <div class="col-10">
                    <p style="    text-align: center;font-size: 126%;"><b> Please enter your OTP..</b></p>
                </div>
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
                <div class="col-10">
                    <div class="input-group has-validation">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/> </svg>
                        </span>
                        <input type="text" class="form-control" name="otp" placeholder=" OTP" required>
                    </div>
                </div>
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
                <div class="col-10">
                    <input type="submit" class="btn btn-primary form-control" name="collect" id="save"
                        value="Submit OTP">
                </div>
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
            </div>
            <br>
        </form><br>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
    </div>

</body>

</html>