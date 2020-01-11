<?php


@$name = $_POST['name'];
@$collegeName = $_POST['collegeName'];
@$contact = $_POST['contact'];
@$wcontact = $_POST['wcontact'];
@$email = $_POST['email'];
@$profession = $_POST['profession'];
@$events = $_POST['workshop1']." ".$_POST['workshop2'];
@$sipp = $_POST['sipp'];
@$pay = $_POST['pay'];
@$txnid = $_POST['txnid'];
date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$time=date("H:i:sa");

if(isset($_POST['submit'])){
    $query = "INSERT INTO esummit19( fullname, collegeName, contactNumber, wNumber, email, profession, events, SIPP, pay,  fdate, ftime, Txn_id) VALUES ('$name', '$collegeName', '$contact', '$wcontact', '$email', '$profession', '$events', '$sipp', '$pay' ,'$date', '$time', '$txnid')";
    // echo $query;
    if($conn->query($query) === TRUE and $sipp==="yes"){
        header("Location:https://www.edcbvucoep.com/sipp");
    }
    else if ($conn->query($query) === TRUE)
    {
        echo "New record created successfully";
        header("Location: regis_succ/index.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}


$conn->close();
?>
