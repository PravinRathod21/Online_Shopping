<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online_shopping Sign_up </title>
    <link rel="icon"href="http://localhost:8080/coreigniter_4/image/website_logo.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    @media (max-width: 1500px) {
        .container {
            max-width: 500px;
            margin-top: 10%;
        }
    }

    /* @media (max-width: 1200px)
 {.container{max-width: 500px;
    margin-top: 20%;}
    } */
    @media (max-width: 1000px) {
        .container {
            max-width: 500px;
            margin-top: 15%;
        }
    }

    @media (max-width: 500px) {
        .container {
            max-width: 385px;
            margin-top: 25%;
        }
    }

    @media (min-width: 1500px) {
        .container {
            max-width: 500px;
            margin-top: 11%;
        }
    }
</style>

<body style="background: #292929">
    <div class="container">
        <form method="post" action="#"
            style="background: #8d8d8d;border-radius: 3%;     box-shadow: 0px 0px 20px 0px #888888;">
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
                <div class="col-12">
                    <p style="       margin-top: -8%;    font-size: 208%;  text-align: center;">
                        <b>Sign up</b>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <!-- <input type="text" name="name" style="text-align: center;" class="form-control" placeholder="Enter your email"> -->
                </div>
                <div class="col-10">
                    <div class="input-group has-validation">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" name="first_name" placeholder=" First Name" required>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" name="last_name" placeholder=" Last Name" required>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path
                                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                                <path
                                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                            </svg>
                        </span>
                        <input type="email" class="form-control" name="email" placeholder=" Email ID" required>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" name="phone_no" placeholder=" Phone no" required>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM2.545 3h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1c0-.276.244-.5.545-.5z" />
                            </svg>
                        </span>
                        <input type="date" class="form-control" name="dob" placeholder=" Date of birth" required>
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
                    <div class="input-group has-validation">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </span>
                        <textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black"
                                class="bi bi-lock" viewBox="0 0 16 16">
                                <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/>
                                    <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.492 1.492 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.72.72 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.72.72 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
                            </svg>
                        </span>&nbsp;&nbsp;
                        <div class="form-check" style=" margin-top: 2%;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>&nbsp;&nbsp;
                        <div class="form-check" style=" margin-top: 2%;">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
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
                    <input type="submit" class="btn btn-primary form-control" name="save" value="Sign up">
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
                    <a href="http://localhost:8080/coreigniter_4/Crud/login">Already Have Account ?</a>
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