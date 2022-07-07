<?php
    include('db.php');
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $contact = $_SESSION['contact'];
    $mailotp = $_POST['emailotp'];
    $mobotp = $_POST['mobotp'];

    //Email Verification
    if($mailotp == $_SESSION['emailotp'])
    {
        $emailflag = 1;
    }
    else
    {
        $emailflag = 0;
    }

    //Contact Verification
    if($mobotp == $_SESSION['mobotp'])
    {
        $mobflag = 1;
    }
    else
    {
        $mobflag = 0;
    }

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
                    <legend>Thanks for your Kindness!<br> Your Verification Details...</legend>
                    <form method="post" action="payment.php">
                        <img src="images/green.jpg" width="30px" height="25px" align="center" id="emimg">
                        <br><br>
                        <label id="email"></label>
                        <br><br>
                        <img src="images/red.jpg" width="30px" height="25px" align="center" id="coimg">
                         <br><br>
                        <label id="contact"></label>
                        <br><br>
                        <input type="submit" name="btn" id="btn" value="DONATE" class="button">
                        &nbsp
                        <input type="button" name="btn" id="btn2" value="BACK" class="button" onclick="history.back()">
                    </form>
                </fieldset>
        </div>
        </section>


        <script type="text/javascript">
            <?php
             echo "var emailflag ='$emailflag';";
             echo "var mobflag ='$mobflag';";
            ?>
            if(emailflag =="1")
            {
                const email = document.getElementById('email');
                const emimg = document.getElementById('emimg');
                email.innerHTML = "Email Verified!!";
                email.style.color = "green";
                emimg.src = "images/green.jpg";

            }
            else
            {
                const email = document.getElementById('email');
                const emimg = document.getElementById('emimg');
                email.innerHTML = "Email not Verified!!";
                email.style.color = "red";
                emimg.src = "images/red.jpg";
            }
            if(mobflag =="1")
            {
                const contact = document.getElementById('contact');
                const coimg = document.getElementById('coimg');
                contact.innerHTML = "Contact Verified!!";
                contact.style.color = "green";
                coimg.src = "images/green.jpg";
            }
            else
            {
                const contact = document.getElementById('contact');
                const coimg = document.getElementById('coimg');
                contact.innerHTML = "Contact not Verified!!";
                contact.style.color = "red";
                coimg.src = "images/red.jpg";
            }

            if(mobflag =="1" && emailflag =="1")
            {
                const donate = document.getElementById("btn");
                donate.style.visibility="visible";
            }
            else
            {
                const donate = document.getElementById("btn");
                donate.style.display="none";
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