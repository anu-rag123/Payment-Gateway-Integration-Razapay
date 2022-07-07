<?php
    include('db.php');
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['amt'] = $_POST['amt'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['city'] = $_POST['city'];
    $emailotp = rand(100000,999999);
    $mobotp = rand(100000,999999);
    $_SESSION['emailotp'] = $emailotp;
    $_SESSION['mobotp'] = $mobotp;

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
    $mail->addAddress($_POST['email'],$_POST['name']);     // Add a recipient              // Name is optional
    $mail->addReplyTo(EMAIL);
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'Urgent & Important - Light-De-Literacy';
    $mail->Body    = 'Dear ' . $_POST['name'].','.'<br>'.'Your One Time Password for Email Verification is: '.'<b>'.$emailotp.'</b>'. '.'.'<br>'.'Regards'.'<br>' . 'Team' . '<br>'.'Light-De-Literacy NGO';
    $mail->AltBody = 'Dear ' . $_POST['name'].','.'<br>'.'Your One Time Password for Email Verification is: '.'<b>'.$emailotp.'</b>'. '.'.'<br>'.'Regards'.'<br>' . 'Team' . '<br>'.'Light-De-Literacy NGO';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    

    
    $name = $_POST['name'];
    $email = $_POST['email'];

    

    //WhatsApp Message sender
    //require_once ('vendor/autoload.php'); // if you use Composer
    require_once('ultramsg.class.php'); // if you download ultramsg.class.php
    $ultramsg_token=""; // Ultramsg.com token
    $instance_id=""; // Ultramsg.com instance id
    $client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);
    $to=$_POST['contact']; 
    $body='Dear ' . $_POST['name'].','.'your One Time Password for contact verification is: '. $mobotp . '.';
    $api=$client->sendChatMessage($to,$body);

    $contact = $_POST['contact'];
?>
<html>
    <head>
        <title>Light-De-Literacy</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <style type="text/css">
          
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button 
            {
                -webkit-appearance: none;
                 margin: 0;
            }
            .textbox
            {
                height: 30px;
                width: 400px;
                font-size: 20px;
                padding-top: 0.2em;
                text-align: center;
                font-family: "Times New Roman";
                background-color: black;
                color: white;
            }

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
            #btn
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

            #btn2
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
                    <legend>Thanks for your Kindness!<br> Get yourself verified...</legend>
                    <form method="post" action="verification.php">
                        <label for="emailotp">Email OTP:</label>
                        <input type="number" min = "0" max = "999999" name="emailotp" id="emailotp" placeholder="Enter OTP sent on your email..." oninput="validity.valid||(value='');"required class="textbox" autocomplete="off">
                        <br><br>
                        <label for="mobotp">Contact OTP:</label>
                        <input type="number" min = "0" max = "999999" name="mobotp" id="mobotp" placeholder="Enter OTP sent on your Whatsapp..." oninput="validity.valid||(value='');" required class="textbox" autocomplete="off">
                        <br><br>
                        <input type="submit" name="btn" id="btn" value="DONATE">
                        &nbsp
                        <input type="button" name="btn" id="btn2" value="BACK" onclick="history.back()">
                    </form>
                </fieldset>
        </div>
        </section>


        <script type="text/javascript">
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


