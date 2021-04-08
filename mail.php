<?php 
if(isset($_POST['submit'])){
    $to = "daniithepa@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "New website form submission!";
    $subject2 = "Thank you for reaching out!";
    $message = $name . " " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Thank you for reaching out to daniela, She will get back to you as soon as possible! ";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>