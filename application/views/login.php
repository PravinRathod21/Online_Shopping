<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online_shopping login </title>
    <link rel="icon"href="http://localhost:8080/coreigniter_4/image/website_logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    @media (max-width: 1500px)
 {.container{max-width: 500px;
    margin-top: 10%;}
    }
    /* @media (max-width: 1200px)
 {.container{max-width: 500px;
    margin-top: 20%;}
    } */
    @media (max-width: 1000px)
 {.container{max-width: 500px;
    margin-top: 25%;}
    }
    @media (max-width: 500px)
 {.container{max-width: 385px;
    margin-top: 35%;}
    }

    @media (min-width: 1500px)
 {.container{max-width: 500px;
    margin-top: 13%;}
    }
    
</style>
<body style="background: #292929">
    <div class="container">
        <form method="post" action="#" style="background: #8d8d8d;border-radius: 7%;     box-shadow: 0px 0px 20px 0px #888888;">
            <br>
            <div class="row">
                <div class="col-12">
                    <p style="      margin-top: -16%;  text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" style="background: white;border-radius: 56%;"viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </p><br>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p style="       margin-top: -8%;    font-size: 208%;  text-align: center;">
                         <b>Log in</b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
                <div class="col-10">
                    <div class="input-group has-validation">
                        <span class="input-group-text" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path
                                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                                <path
                                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" name="email"  placeholder=" Email ID" required>
                    </div>
                </div>
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
            </div><br>
            <div class="row">
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
                <div class="col-10">
                    <div class="input-group has-validation">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-lock" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                        </span>
                        <input type="text" class="form-control"name="password"   placeholder=" Password" required>
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
                <input type="submit" class="btn btn-primary form-control" name="collect" value="login">
            </div>
            <div class="col-1">
                <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
            </div>
            <div class="col-10" style="    text-align: center;font-size: 80%;">
                <a href="http://localhost:8080/coreigniter_4/Crud/forget_password" >Forget Password ?</a>  /  <a href="http://localhost:8080/coreigniter_4/Crud/sign_up">Create a new account ?</a>
            </div>
            <div class="col-1">
                <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
            </div>
        </div><br>
        </form><br>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
    </div>
</body>

</html>