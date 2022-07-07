<?php
    include('db.php');
    session_start();
    ob_end_clean();
    require('fpdf/fpdf.php');
      
    // Instantiate and use the FPDF class 
    $pdf = new FPDF();
      
    //Add a new page
    $pdf->AddPage();
      
    // Set the font for the text
    $pdf->SetFont('Times', 'B', 24);
    $pdf->Text(56, 20, "Your Contribution Details");

    $pdf->SetFont('Times', 'I', 15);
    $pdf->Text(20, 40, "Name: " . $_SESSION['name']);
    $pdf->Text(20, 60, "Email: ". $_SESSION['email']);
    $pdf->Text(20, 80, "Contact: ". $_SESSION['contact']);
    $pdf->Text(20, 100, "Address: ". $_SESSION['city'].", ". $_SESSION['country']);
    $pdf->Text(20, 120, "Recipient: Light-De-Literacy");
    $pdf->Text(20, 140, "Donation Amount: ". $_SESSION['amt']);
    $pdf->Text(20, 160, "Donation Status: Completed");
    $pdf->Text(20, 180, "Donation ID: ".$_SESSION['pay_id']);
    $pdf->Text(20, 200, "Donation Time: ". date("l jS \of F Y h:i:s A"));
    // return the generated output
    $filename="/home/anurag/Desktop/Donation_Details.pdf";
    $pdf->Output($filename,'F'); 

    //Mail Sender
    require 'PHPMailerAutoload.php';
    require 'credentials.php';

    $mail = new PHPMailer;

    $mail->SMTPDebug = 0;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom(EMAIL, 'Light-De-Literacy');
    $mail->addAddress($_SESSION['email'],$_SESSION['name']);     // Add a recipient              // Name is optional
    $mail->addReplyTo(EMAIL);
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->addAttachment('/home/anurag/Desktop/Donation_Details.pdf');   
    $mail->Subject = 'We are grateful - Light-De-Literacy';
    $mail->Body    = 'Dear ' . $_SESSION['name'].','.'<br>'.'We are grateful to you for joining hands in this noble cause of promoting girls education. Please refer below pdf for your donation details.'.
    '<br>'.'Thanks and Regards'.'<br>' . 'Team' . '<br>'.'Light-De-Literacy NGO';
    $mail->AltBody = 'Dear ' . $_SESSION['name'].','.'<br>'.'We are grateful to you for joining hands in this noble cause of promoting girls education. Please refer below pdf for your donation details.'.
    '<br>'.'Thanks and Regards'.'<br>' . 'Team' . '<br>'.'Light-De-Literacy NGO';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

    require_once('ultramsg.class.php'); // if you download ultramsg.class.php
    $ultramsg_token="70at4kv8yulavtew"; // Ultramsg.com token
    $instance_id="instance11376"; // Ultramsg.com instance id
    $client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);
    $body='Dear ' . $_SESSION['name'].','.'We are grateful to you for joining hands in this noble cause of promoting girls education. A copy of your donation details is sent to you on your email.';
    $to=$_SESSION['contact'];
    $api=$client->sendChatMessage($to,$body); 
?>
<html>
    <head>
        <title>Light-De-Literacy</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <style type="text/css">

             fieldset 
             {
                  padding: 1em;
                  padding-bottom:2em;
                  padding-left:2em;
                  padding-right:2em;
                  border-width:5px;
                  color:black;
                  border-color:green;
                  border-radius:5px;
                  width:400px;
                  text-align:center;
                  font-family: "Times New Roman";
                  background-color: black;
              }
             legend  
              {
                  background-color:rgba(228, 200, 200, 0.78);
                  color:black;
                  opacity:1;
                  border: 1px solid thin;
                  padding: 10px 20px;
                  text-align:center;
                  font-size: 25px;
                  border-radius:5px;
                  font-weight: bold;
                  font-family: "Times New Roman";

              }
            label 
            {
                width:50%;
                font-size: 20px;
                margin-right: 0.5em;
                padding-top: 0.2em;
                padding-bottom:2em;
                text-align: center;
                font-weight: bold;
                font-family: "Times New Roman";
                color: lightgreen;
            }
            .button
            {
                height: 30px;
                width: 100px;
                font-size: 20px;
                padding-top: 0.1em;
                text-align: center;
                color: lightgreen;
                font-weight: bold;
                font-family: "Times New Roman";
                background-color: black;
            }
    
        </style>
    </head>
    <body>
        <section>
            <div align="center" id="details">
                <fieldset>
                    <legend>Thanks for your Kindness!<br> Payment Successful!!...</legend>
                        <label>Your contribution details are mailed as well as whatsapped to your verified email and whatsapp!!</label>
                        <br><br>
                        <label>Kindly download them.</label>
                        <br><br>
                        <input type="button" name="btn" id="btn2" value="VISIT US" class="button" 
                        onclick="visitUs()">
                </fieldset>
            </div>
        </section>


        <script type="text/javascript">

            function visitUs()
            {
                location.href = "index.php";
            }

            function changebg()
            {
                const images = [
                'url("images/1.jpg")',
                'url("images/2.jpg")',
                'url("images/3.jpeg")',
                'url("images/4.jpg")',
                 'url("images/5.jpg")',
                 'url("images/6.jpg")',
                 'url("images/7.jpg")',
                 'url("images/8.jpg")',
                 'url("images/9.png")',
                 'url("images/10.jpg")'];
                const section = document.querySelector('section'); 
                const bg = images[Math.floor(Math.random() * images.length)];
                section.style.backgroundImage = bg;
            }

            setInterval(changebg,3000);
        </script>
    </body>
</html>