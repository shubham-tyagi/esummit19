<?php
    include 'config.php';
    include 'registration_process.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resgistration.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<link href="img/favicon.png" rel="icon">

<body>
    <div class="container">
        <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 class="mt-3 text-center">INDIVIDUAL REGISTRATION</h2>
                    <hr>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 field-label-responsive">
                    <label for="name">Full Name</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name"  required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="college">College/Organisation Name</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-university"></i></div>
                            <input type="text" name="collegeName" class="form-control" id="email" placeholder="College/Organisation Name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="college">Contact Number</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-mobile"></i></div>
                            <input type="text" name="contact" class="form-control" maxlength=10 placeholder="Contact Number" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="college">WhatsApp Number</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-whatsapp"></i></div>
                            <input type="text" name="wcontact" class="form-control" maxlength=10 placeholder="WhatsApp Number" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">E-Mail Address</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">Profession</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-pencil"></i></div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="profession" value="student" class="custom-control-input" required>
                                <label class="custom-control-label" for="customRadio1">Student:<br></label>
                                <!-- <div class="form-group">
                                <label for="exampleFormControlSelect1">Year Of Graduation</label>
                                <select class="form-control" name="year" id="year_of_grad">
                                    <option value="2018" style="color:black;">2018</option>
                                    <option value="2019" style="color:black;">2019</option>
                                    <option value="2020" style="color:black;">2020</option>      
                                    <option value="2021" style="color:black;">2021</option>
                                    <option value="2022" style="color:black;">2022</option>
                                    <option value="2023" style="color:black;">2023</option>
                                    <option value="2024" style="color:black;">2024</option>
                                    <option value="2025" style="color:black;">2025</option>
                                </select>
                            </div> -->

                            </div>
                            <div class="custom-control custom-radio">
                                <input onclick="document.getElementById('year_of_grad').disabled = true; document.getElementById('year_of_grad').disabled = false; " type="radio" id="customRadio2" name="profession" value="working Professional" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Working</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">Events Participating</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">

                            <div class="form-check mt-2 mt-2">
                                <input class="form-check-input" type="radio" name="workshop1" value="AI" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Technical Track : Bursting the AI bubble
                                </label>
                            </div>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" value="Youtube" name="workshop1" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Business Track : The art and Science of Building a YouTube channel

                                </label>
                            </div>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" value="BlockChain" name="workshop2" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Technical Track : Applications of Blockchain
                                </label>
                            </div>

                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" value="Design Thinking" name="workshop2" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Business Track : Design Thinking
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">Are you interested Startup Internship And Placement Programe</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"></div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" value="yes" name="sipp" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" value="no" name="sipp" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 field-label-responsive">
                    <label for="email">Payment Options</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-2">
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" value="paytm" name="pay" id="defaultCheck1" onclick="paytm();" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    Paytm
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" value="upi" name="pay" id="defaultCheck1" onclick="upi();" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    UPI
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" value="cash" name="pay" id="defaultCheck1" onclick="cash();" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    Cash
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <!--<div class="input-group-addon" style="width: 2.6rem"></div>-->
                            <button type="button" class="btn btn-dark mr-2 hide" data-toggle="modal" data-target="#paytm" id="paytm1">Paytm</button>
                            <button type="button" class="btn btn-warning mr-2 hide" data-toggle="modal" data-target="#upi" id="upi1">UPI</button>
                            <button type="button" class="btn btn-info hide" data-toggle="modal" data-target="#cash" id="cash1">Cash</button>
                        </div>
                        <br>
                        <p>: <b>Registration Fees: Rs 250/-</b></p>
                        <input type="text" name="txnid" class="form-control mt-2" placeholder="Transcation Id" required autofocus>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" name="submit" value="Register">
                </div>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="paytm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Paytm QR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/paytm.jpeg" width="90%" height="90%" alt="Paytm QR">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="modal fade" id="upi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">UPI QR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/upi.jpeg" height="65%" width="100%" alt="UPI QR">
                    <h6 align="center" style="color:black;">OR</h6>
                    <h3 class="text-center" style="color:black;">7016306975@upi</h3>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
       <div class="modal fade" id="cash" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">CASH</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <h6 class="text-center" style="color:black;">Please Enter Your Receipt Number in Place Of Transaction Number</h6>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> 
</body>

</html>
