<html>
    <head>
        <title>Light-De-Literacy</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <style type="text/css">
            .selectPlace
            { 
                color:grey; 
            }
            .others
            {
                color:black;
            }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button 
            {
                -webkit-appearance: none;
                 margin: 0;
            }
            .drop
            {
                height: 30px;
                width: 400px;
                font-size: 20px;
                padding-top: 0.2em;
                text-align: center;
                font-family: "Times New Roman";
                background-color: black;
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
            <h2 id="h2" onmouseover="visibleDetails(this)">Girls are the future..</h2>
            <div align="center" id="details">
                <fieldset>
                    <legend>Thanks for your Kindness!<br> Fill your details below...</legend>
                    <form method="post" action="verify.php">
                        <label for="name">Name:</label>
                        <input type="textbox" name="name" id="name" placeholder="Enter your name..." 
                        maxlength="50" required class="textbox" autocomplete="off">
                        <br><br>
                        <label for="amt">Amount:</label>
                        <input type="number" min = "1" name="amt" id="amt" placeholder="Enter amount you want to donate..." oninput="validity.valid||(value='');" required class="textbox"
                        autocomplete="off">
                        <br><br>
                        <label for="country">Country:</label>
                        <select id="country" name="country" 
                        onchange="this.className=this.options[this.selectedIndex].className" class="selectPlace drop" required autocomplete="off">
                            <option value="" disabled selected hidden>Select country of your residence...</option>
                            <option value="AF" class="others textbox">Afghanistan</option>
                            <option value="AX" class="others textbox">Aland Islands</option>
                            <option value="AL" class="others textbox">Albania</option>
                            <option value="DZ" class="others textbox">Algeria</option>
                            <option value="AS" class="others textbox">American Samoa</option>
                            <option value="AD" class="others textbox">Andorra</option>
                            <option value="AO" class="others textbox">Angola</option>
                            <option value="AI" class="others textbox">Anguilla</option>
                            <option value="AQ" class="others textbox">Antartica</option>
                            <option value="AG" class="others textbox">Antigua and Barbuda</option>
                            <option value="AR" class="others textbox">Argentina</option>
                            <option value="AM" class="others textbox">Armenia</option>
                            <option value="AW" class="others textbox">Aruba</option>
                            <option value="AU" class="others textbox">Australia</option>
                            <option value="AT" class="others textbox">Austria</option>
                            <option value="AZ" class="others textbox">Azerbaijan</option>
                            <option value="BS" class="others textbox">Bahamas</option>
                            <option value="BH" class="others textbox">Bahrain</option>
                            <option value="BD" class="others textbox">Bangladesh</option>
                            <option value="BB" class="others textbox">Barbados</option>
                            <option value="BY" class="others textbox">Belarus</option>
                            <option value="BE" class="others textbox">Belgium</option>
                            <option value="BZ" class="others textbox">Belize</option>
                            <option value="BJ" class="others textbox">Benin</option>
                            <option value="BM" class="others textbox">Bermuda</option>
                            <option value="BT" class="others textbox">Bhutan</option>
                            <option value="BO" class="others textbox">Bolivia</option>
                            <option value="BQ" class="others textbox">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA" class="others textbox">Bosnia and Herzegovina</option>
                            <option value="BW" class="others textbox">Botswana</option>
                            <option value="BV" class="others textbox">Bouvet Island</option>
                            <option value="BR" class="others textbox">Brazil</option>
                            <option value="IO" class="others textbox">British Indian Ocean Territory</option>
                            <option value="BN" class="others textbox">Brunei Darussalam</option>
                            <option value="BG" class="others textbox">Bulgaria</option>
                            <option value="BF" class="others textbox">Burkina Faso</option>
                            <option value="BI" class="others textbox">Burundi</option>
                            <option value="KH" class="others textbox">Cambodia</option>
                            <option value="CM" class="others textbox">Cameroon</option>
                            <option value="CA" class="others textbox">Canada</option>
                            <option value="CV" class="others textbox">Cape Verde</option>
                            <option value="KY" class="others textbox">Cayman Islands</option>
                            <option value="CF" class="others textbox">Central African Republic</option>
                            <option value="TD" class="others textbox">Chad</option>
                            <option value="CL" class="others textbox">Chile</option>
                            <option value="CN" class="others textbox">China</option>
                            <option value="CX" class="others textbox">Christmas Island</option>
                            <option value="CC" class="others textbox">Cocos (Keeling) Islands</option>
                            <option value="CO" class="others textbox">Colombia</option>
                            <option value="KM" class="others textbox">Comoros</option>
                            <option value="CG" class="others textbox">Congo</option>
                            <option value="CD" class="others textbox">Congo, Democratic Republic of the Congo</option>
                            <option value="CK" class="others textbox">Cook Islands</option>
                            <option value="CR" class="others textbox">Costa Rica</option>
                            <option value="CI" class="others textbox">Cote D'Ivoire</option>
                            <option value="HR" class="others textbox">Croatia</option>
                            <option value="CU" class="others textbox">Cuba</option>
                            <option value="CW" class="others textbox">Curacao</option>
                            <option value="CY" class="others textbox">Cyprus</option>
                            <option value="CZ" class="others textbox">Czech Republic</option>
                            <option value="DK" class="others textbox">Denmark</option>
                            <option value="DJ" class="others textbox">Djibouti</option>
                            <option value="DM" class="others textbox">Dominica</option>
                            <option value="DO" class="others textbox">Dominican Republic</option>
                            <option value="EC" class="others textbox">Ecuador</option>
                            <option value="EG" class="others textbox">Egypt</option>
                            <option value="SV" class="others textbox">El Salvador</option>
                            <option value="GQ" class="others textbox">Equatorial Guinea</option>
                            <option value="ER" class="others textbox">Eritrea</option>
                            <option value="EE" class="others textbox">Estonia</option>
                            <option value="ET" class="others textbox">Ethiopia</option>
                            <option value="FK" class="others textbox">Falkland Islands (Malvinas)</option>
                            <option value="FO" class="others textbox">Faroe Islands</option>
                            <option value="FJ" class="others textbox">Fiji</option>
                            <option value="FI" class="others textbox">Finland</option>
                            <option value="FR" class="others textbox">France</option>
                            <option value="GF" class="others textbox">French Guiana</option>
                            <option value="PF" class="others textbox">French Polynesia</option>
                            <option value="TF" class="others textbox">French Southern Territories</option>
                            <option value="GA" class="others textbox">Gabon</option>
                            <option value="GM" class="others textbox">Gambia</option>
                            <option value="GE" class="others textbox">Georgia</option>
                            <option value="DE" class="others textbox">Germany</option>
                            <option value="GH" class="others textbox">Ghana</option>
                            <option value="GI" class="others textbox">Gibraltar</option>
                            <option value="GR" class="others textbox">Greece</option>
                            <option value="GL" class="others textbox">Greenland</option>
                            <option value="GD" class="others textbox">Grenada</option>
                            <option value="GP" class="others textbox">Guadeloupe</option>
                            <option value="GU" class="others textbox">Guam</option>
                            <option value="GT" class="others textbox">Guatemala</option>
                            <option value="GG" class="others textbox">Guernsey</option>
                            <option value="GN" class="others textbox">Guinea</option>
                            <option value="GW" class="others textbox">Guinea-Bissau</option>
                            <option value="GY" class="others textbox">Guyana</option>
                            <option value="HT" class="others textbox">Haiti</option>
                            <option value="HM" class="others textbox">Heard Island and Mcdonald Islands</option>
                            <option value="VA" class="others textbox">Holy See (Vatican City State)</option>
                            <option value="HN" class="others textbox">Honduras</option>
                            <option value="HK" class="others textbox">Hong Kong</option>
                            <option value="HU" class="others textbox">Hungary</option>
                            <option value="IS" class="others textbox">Iceland</option>
                            <option value="IN" class="others textbox">India</option>
                            <option value="ID" class="others textbox">Indonesia</option>
                            <option value="IR" class="others textbox">Iran, Islamic Republic of</option>
                            <option value="IQ" class="others textbox">Iraq</option>
                            <option value="IE" class="others textbox">Ireland</option>
                            <option value="IM" class="others textbox">Isle of Man</option>
                            <option value="IL" class="others textbox">Israel</option>
                            <option value="IT" class="others textbox">Italy</option>
                            <option value="JM" class="others textbox">Jamaica</option>
                            <option value="JP" class="others textbox">Japan</option>
                            <option value="JE" class="others textbox">Jersey</option>
                            <option value="JO" class="others textbox">Jordan</option>
                            <option value="KZ" class="others textbox">Kazakhstan</option>
                            <option value="KE" class="others textbox">Kenya</option>
                            <option value="KI" class="others textbox">Kiribati</option>
                            <option value="KP" class="others textbox">Korea, Democratic People's Republic of</option>
                            <option value="KR" class="others textbox">Korea, Republic of</option>
                            <option value="XK" class="others textbox">Kosovo</option>
                            <option value="KW" class="others textbox">Kuwait</option>
                            <option value="KG" class="others textbox">Kyrgyzstan</option>
                            <option value="LA" class="others textbox">Lao People's Democratic Republic</option>
                            <option value="LV" class="others textbox">Latvia</option>
                            <option value="LB" class="others textbox">Lebanon</option>
                            <option value="LS" class="others textbox">Lesotho</option>
                            <option value="LR" class="others textbox">Liberia</option>
                            <option value="LY" class="others textbox">Libyan Arab Jamahiriya</option>
                            <option value="LI" class="others textbox">Liechtenstein</option>
                            <option value="LT" class="others textbox">Lithuania</option>
                            <option value="LU" class="others textbox">Luxembourg</option>
                            <option value="MO" class="others textbox">Macao</option>
                            <option value="MK" class="others textbox">Macedonia, the Former Yugoslav Republic of</option>
                            <option value="MG" class="others textbox">Madagascar</option>
                            <option value="MW" class="others textbox">Malawi</option>
                            <option value="MY" class="others textbox">Malaysia</option>
                            <option value="MV" class="others textbox">Maldives</option>
                            <option value="ML" class="others textbox">Mali</option>
                            <option value="MT" class="others textbox">Malta</option>
                            <option value="MH" class="others textbox">Marshall Islands</option>
                            <option value="MQ" class="others textbox">Martinique</option>
                            <option value="MR" class="others textbox">Mauritania</option>
                            <option value="MU" class="others textbox">Mauritius</option>
                            <option value="YT" class="others textbox">Mayotte</option>
                            <option value="MX" class="others textbox">Mexico</option>
                            <option value="FM" class="others textbox">Micronesia, Federated States of</option>
                            <option value="MD" class="others textbox">Moldova, Republic of</option>
                            <option value="MC" class="others textbox">Monaco</option>
                            <option value="MN" class="others textbox">Mongolia</option>
                            <option value="ME" class="others textbox">Montenegro</option>
                            <option value="MS" class="others textbox">Montserrat</option>
                            <option value="MA" class="others textbox">Morocco</option>
                            <option value="MZ" class="others textbox">Mozambique</option>
                            <option value="MM" class="others textbox">Myanmar</option>
                            <option value="NA" class="others textbox">Namibia</option>
                            <option value="NR" class="others textbox">Nauru</option>
                            <option value="NP" class="others textbox">Nepal</option>
                            <option value="NL" class="others textbox">Netherlands</option>
                            <option value="AN" class="others textbox">Netherlands Antilles</option>
                            <option value="NC" class="others textbox">New Caledonia</option>
                            <option value="NZ" class="others textbox">New Zealand</option>
                            <option value="NI" class="others textbox">Nicaragua</option>
                            <option value="NE" class="others textbox">Niger</option>
                            <option value="NG" class="others textbox">Nigeria</option>
                            <option value="NU" class="others textbox">Niue</option>
                            <option value="NF" class="others textbox">Norfolk Island</option>
                            <option value="MP" class="others textbox">Northern Mariana Islands</option>
                            <option value="NO" class="others textbox">Norway</option>
                            <option value="OM" class="others textbox">Oman</option>
                            <option value="PK" class="others textbox">Pakistan</option>
                            <option value="PW" class="others textbox">Palau</option>
                            <option value="PS" class="others textbox">Palestinian Territory, Occupied</option>
                            <option value="PA" class="others textbox">Panama</option>
                            <option value="PG" class="others textbox">Papua New Guinea</option>
                            <option value="PY" class="others textbox">Paraguay</option>
                            <option value="PE" class="others textbox">Peru</option>
                            <option value="PH" class="others textbox">Philippines</option>
                            <option value="PN" class="others textbox">Pitcairn</option>
                            <option value="PL" class="others textbox">Poland</option>
                            <option value="PT" class="others textbox">Portugal</option>
                            <option value="PR" class="others textbox">Puerto Rico</option>
                            <option value="QA" class="others textbox">Qatar</option>
                            <option value="RE" class="others textbox">Reunion</option>
                            <option value="RO" class="others textbox">Romania</option>
                            <option value="RU" class="others textbox">Russian Federation</option>
                            <option value="RW" class="others textbox">Rwanda</option>
                            <option value="BL" class="others textbox">Saint Barthelemy</option>
                            <option value="SH" class="others textbox">Saint Helena</option>
                            <option value="KN" class="others textbox">Saint Kitts and Nevis</option>
                            <option value="LC" class="others textbox">Saint Lucia</option>
                            <option value="MF" class="others textbox">Saint Martin</option>
                            <option value="PM" class="others textbox">Saint Pierre and Miquelon</option>
                            <option value="VC" class="others textbox">Saint Vincent and the Grenadines</option>
                            <option value="WS" class="others textbox">Samoa</option>
                            <option value="SM" class="others textbox">San Marino</option>
                            <option value="ST" class="others textbox">Sao Tome and Principe</option>
                            <option value="SA" class="others textbox">Saudi Arabia</option>
                            <option value="SN" class="others textbox">Senegal</option>
                            <option value="RS" class="others textbox">Serbia</option>
                            <option value="CS" class="others textbox">Serbia and Montenegro</option>
                            <option value="SC" class="others textbox">Seychelles</option>
                            <option value="SL" class="others textbox">Sierra Leone</option>
                            <option value="SG" class="others textbox">Singapore</option>
                            <option value="SX" class="others textbox">Sint Maarten</option>
                            <option value="SK" class="others textbox">Slovakia</option>
                            <option value="SI" class="others textbox">Slovenia</option>
                            <option value="SB" class="others textbox">Solomon Islands</option>
                            <option value="SO" class="others textbox">Somalia</option>
                            <option value="ZA" class="others textbox">South Africa</option>
                            <option value="GS" class="others textbox">South Georgia and the South Sandwich Islands</option>
                            <option value="SS" class="others textbox">South Sudan</option>
                            <option value="ES" class="others textbox">Spain</option>
                            <option value="LK" class="others textbox">Sri Lanka</option>
                            <option value="SD" class="others textbox">Sudan</option>
                            <option value="SR" class="others textbox">Suriname</option>
                            <option value="SJ" class="others textbox">Svalbard and Jan Mayen</option>
                            <option value="SZ" class="others textbox">Swaziland</option>
                            <option value="SE" class="others textbox">Sweden</option>
                            <option value="CH" class="others textbox">Switzerland</option>
                            <option value="SY" class="others textbox">Syrian Arab Republic</option>
                            <option value="TW" class="others textbox">Taiwan, Province of China</option>
                            <option value="TJ" class="others textbox">Tajikistan</option>
                            <option value="TZ" class="others textbox">Tanzania, United Republic of</option>
                            <option value="TH" class="others textbox">Thailand</option>
                            <option value="TL" class="others textbox">Timor-Leste</option>
                            <option value="TG" class="others textbox">Togo</option>
                            <option value="TK" class="others textbox">Tokelau</option>
                            <option value="TO" class="others textbox">Tonga</option>
                            <option value="TT" class="others textbox">Trinidad and Tobago</option>
                            <option value="TN" class="others textbox">Tunisia</option>
                            <option value="TR" class="others textbox">Turkey</option>
                            <option value="TM" class="others textbox">Turkmenistan</option>
                            <option value="TC" class="others textbox">Turks and Caicos Islands</option>
                            <option value="TV" class="others textbox">Tuvalu</option>
                            <option value="UG" class="others textbox">Uganda</option>
                            <option value="UA" class="others textbox">Ukraine</option>
                            <option value="AE" class="others textbox">United Arab Emirates</option>
                            <option value="GB" class="others textbox">United Kingdom</option>
                            <option value="US" class="others textbox">United States</option>
                            <option value="UM" class="others textbox">United States Minor Outlying Islands</option>
                            <option value="UY" class="others textbox">Uruguay</option>
                            <option value="UZ" class="others textbox">Uzbekistan</option>
                            <option value="VU" class="others textbox">Vanuatu</option>
                            <option value="VE" class="others textbox">Venezuela</option>
                            <option value="VN" class="others textbox">Viet Nam</option>
                            <option value="VG" class="others textbox">Virgin Islands, British</option>
                            <option value="VI" class="others textbox">Virgin Islands, U.s.</option>
                            <option value="WF" class="others textbox">Wallis and Futuna</option>
                            <option value="EH" class="others textbox">Western Sahara</option>
                            <option value="YE" class="others textbox">Yemen</option>
                            <option value="ZM" class="others textbox">Zambia</option>
                            <option value="ZW" class="others textbox">Zimbabwe</option>
                        </select>
                        <br><br>
                        <label for="city">City:</label>
                        <input type="textbox" name="city" id="city" placeholder="Select city of your residence..." class="textbox" required autocomplete="off" maxlength="50">
                        <br><br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email..." class="textbox" required autocomplete="off" maxlength="50">
                        <br><br>
                        <label for="contact">Contact:</label>
                        <input type="number" name="contact" id="contact" placeholder="Enter your contact number..." min="0" max="9999999999"oninput="validity.valid||(value='');" class="textbox"required autocomplete="off">
                        <br><br>
                        <input type="submit" name="btn" id="btn" value="DONATE">
                        &nbsp
                        <input type="button" name="btn" id="btn2" value="BACK" onclick="back()">
                    </form>
                </fieldset>
        </div>
        </section>


        <script type="text/javascript">
            const details = document.getElementById("details");
            details.style.display = "none";
            function changebg()
            {
                const details = document.getElementById("details");
                const h2 = document.getElementById("h2");
                if(h2.style.display == "block")
                {
                    details.style.display = "none";
                }
                const quotes = [
                "Girls are the future..",
                "Education shapes a girl's life..",
                "Every girl has the rights to learn..",
                "Never make a girl devoid of education..",
                "Focus on girls education..",
                "Let them grow and educate..",
                "To educate girls is to reduce poverty..",
                "My pen is my sword..",
                "Education is a vaccine for violence..",
                "Girls Education must be a priority.."
                ];
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
                const quote = quotes[Math.floor(Math.random() * quotes.length)];
                h2.innerHTML = quote;
                section.style.backgroundImage = bg;
            }
            
            function visibleDetails(element)
            {
                element.style.display = "none";
                const details = document.getElementById("details");
                details.style.display = "block";
            }

            function back()
            {
                const details = document.getElementById("details");
                details.style.display = "none";
                const h2 = document.getElementById("h2");
                h2.style.display = "block";
            }
            setInterval(changebg,3000);

        </script>
    </body>
</html>
