<?php
session_start();
$name = $_SESSION['name'];
$amt = $_SESSION['amt'];
$email = $_SESSION['email'];
$contact = $_SESSION['contact'];
$country = $_SESSION['country'];
$city = $_SESSION['city'];
?>

<html>
    <head>
        <title>Light-De-Literacy</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>    
    </head>
    <body>
        <section>
        </section>


        <script type="text/javascript">
            pay_now();
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

            function pay_now()
            {
                <?php
                    echo "var name ='$name';";
                    echo "var amt ='$amt';";
                    echo "var email ='$email';";
                    echo "var country ='$country';";
                    echo "var city ='$city';";
                    echo "var contact ='$contact';";
                ?>
                 jQuery.ajax({
                       type:'post',
                       url:'payment_process.php',
                       data:"amt="+amt+"&name="+name,
                       success:function(result){
                           var options = {
                                "key": "rzp_test_Rw1ytYnMSklFay", 
                                "amount": amt*100, 
                                "currency": "INR",
                                "name": "Light-De-Literacy",
                                "description": "One step towards girls education!!",
                                "image": 
                                "https://www.lightdeliteracy.com/wp-content/uploads/2017/05/logo-image.png",
                                "handler": function (response){
                                   jQuery.ajax({
                                       type:'post',
                                       url:'payment_process.php',
                                       data:"payment_id="+response.razorpay_payment_id,
                                       success:function(result){
                                           window.location.href="thankyou.php";
                                       }
                                   });
                                },
                                "prefill": {
                                 "name": name,
                                "email": email,
                                "contact": contact

                                },
                                "notes": {
                                "address": city+", "+country
                                },
                                 "theme": {
                                 "color": "#3399cc"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                       }
                   });
            }
            setInterval(changebg,3000);
        </script>
    </body>
</html>