<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/mobirise/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/my_style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>



</head>
<?php
include ("admin/connection/connect.php");
include ("includes/functions.php");

if(isset($_GET['sign'])){
    if($_GET['sign']=='done'){
      ?>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#done').modal('toggle');
        });
        </script>
      <?php
    }elseif($_GET['sign']=='error'){
      ?>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#error').modal('toggle');
        });
        </script>
      <?php
    }elseif($_GET['sign']=='exist'){
        ?>
          <script type="text/javascript">
          $(document).ready(function(){
              $('#exist').modal('toggle');
          });
          </script>
        <?php
      }
  }

  include ("includes/modal.php");
?>
<body>
    <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-0" data-rv-view="0" style="background-image: url(assets/images/bg1-resized-1200x509.jpg);">
        <div class="  mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">

            <div class="mbr-box__container mbr-section__container container">
                <div class="mbr-box mbr-box--stretched">
                    <div class="mbr-box__magnet mbr-box__magnet--center-center">
                        <div class="row">
                            <div class=" col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero animated fadeInUp">

                                    <p class="mbr-hero__subtext" style="background:#ffffff; padding:15px; margin:0px; font-size:35px;">a lot has changed, why hasn’t <strong>education</strong>?</p>
                                </div>
                            </div>
                        </div>
                        <a class="scrollbtn" href="#msg-box4-81"><span></span>Scroll</a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box4-81" data-rv-view="22" style="background-image: url(assets/images/back.jpg);">

        <div class="my_bg1 mbr-section__container mbr-section__container--isolated container" style="padding-top: 93px; padding-bottom: 93px;">
            <div class="row my_bg1_div1">
                <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a class="mbr-buttons__btn btn btn-lg btn-default" href="#">JOIN THE MOVEMENT</a></div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-sm-5"></div>
                <div class="col-sm-5 card1 animated fadeInUp delay ">
                    <h1>OUR MANIFESTO</h1>
                    <p>FOR EVERY CLASSROOM TO BE A MOONSHOT CLSSROOM.</p>
                    <p> <strong>WHAT IS A MOONSHOT CLASSROOM?</strong> </p>
                    <p> A moonshot classroom is a fundamental shift to give students more autommy and agency in the classroom to empower greeter...</p>
                </div>
            </div>
            <div class="row " style="padding-bottom:300px;">

                <div class="col-sm-5 card2 animated fadeInUp delay ">
                    <h3>TRUST <br> RESPECT <br>INDEPENDENCE<br> COLLABORAION<br> KINDNESS</h3>
                </div>
                <div class="col-sm-5 card3 animated fadeInUp delay ">
                    <h1>OUR VALUES</h1>
                    <P> A moonshot classroom is a fundamental shift to give students moer autommy and agency in the classroom to empower greeter...</P>
                </div>
            </div>
        </div>
    </section>


    <section class="right-padding-0 mbr-box mbr-section mbr-section--relative cntrbox1  mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-1" data-rv-view="3" style="background:#ffffff;padding-left:0px !important;">

        <div class="cntrbox2 row">
            <div id="myCarousel" class="carousel slide animated fadeInUp" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators ">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/Chicago.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption" style="left:10%;right:10%;">
                           
                        </div>
                    </div>

                    <div class="item">
                        <img src="assets/chicago.jpg" alt="" style="width:100%;">
                        <div class="carousel-caption" style="left:10%;right:10%;">
                        
                    </div>
                    </div>

                    <div class="item">
                        <img src="assets/Chicago.jpg" alt="" style="width:100%;">
                        <div class="carousel-caption" style="left:10%;right:10%;">
                        
                    </div>
                    </div>
                </div>

                <!-- 
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>Left and right controls -->


            </div>
            <div id="text-content1">
                <div class="row animated fadeInUp" style="margin-top:50px; margin-bottom:50px;">
                      <div class="col-sm-1 text-center" style="color:white; margin-top:20px;">
                            <!-- 2 / -->
                            <!-- <h1><strong>2</strong></h1> -->
                            <span style="font-size:30px; padding:10px 20px; background-color:#3498DB ;border-radius:100px;">1</span>
                  </div>
                  <div class="col-sm-1 " style="">
                        
                   </div>
                    <div class="col-sm-6">
                        <h3><strong>JOIN THE MOVEMENT</strong></h3>
                        <h5><strong><em>Pledge</em> A MOONSHOT</strong></h5>
                        <P style="text-align:left !important;"> a moonshots pledge is a publilc commitment from teachers,students, paents, and administrators evernywhere.These pledges are representative of the collective global voice and demand for change is educatiion.
                        </P>
                        <div class="mbr-hero ">
                            <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a class="mbr-buttons__btn btn btn-lg btn-info" href="#">PLEDGE</a></div>
                        </div>
                    </div>
                </div>
                <div class="row animated fadeInUp"  style="margin-bottom:20px;margin-top:20px;">
                        <div class="col-sm-1">
                               
                        </div>
                    <div class="col-sm-3">
                        <h2><strong>PLEDGES <br> SO FAR</strong>
                        </h2>
                        <hr style="border-top: 1px solid #8c8b8b;">
                        <h2> <strong>
                        <?php 
                            echo getcountryCount($conn);
                        ?>
                        </strong> </h2><br> COUNTRIES <br>
                        <h2> <strong> <?php 
                            echo getUsersCount($conn);
                        ?></strong> </h2><br> PLEDGES
                    </div>
                    <div class="col-sm-8" style="">
                        <div class="row">
                            <div class="col-sm-5 box_card1">

                                <blockquote>
                                    <p>"I see an education system that is inclusive"</p>
                                    <footer>JULIAN FREEMAN, USA <button type="button" class="btn  btn-circle"><i class="glyphicon glyphicon-heart"></i></button>
                                    </footer>
                                </blockquote>

                            </div>
                            <div class="col-sm-5 box_card1">

                                <blockquote>
                                    <p>"I see an education system that is inclusive"</p>
                                    <footer>JULIAN FREEMAN, USA <button type="button" class="btn  btn-circle"><i class="glyphicon glyphicon-heart"></i></button>
                                    </footer>
                                </blockquote>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 box_card1">

                                <blockquote>
                                    <p>"I see an education system that is inclusive"</p>
                                    <footer>JULIAN FREEMAN, USA <button type="button" class="btn  btn-circle"><i class="glyphicon glyphicon-heart"></i></button>
                                    </footer>
                                </blockquote>

                            </div>
                            <div class="col-sm-5 box_card1">

                                <blockquote>
                                    <p>"I see an education system that is inclusive"</p>
                                    <footer>JULIAN FREEMAN, USA <button type="button" class="btn  btn-circle"><i class="glyphicon glyphicon-heart"></i></button>
                                    </footer>
                                </blockquote>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row animated fadeInUp" style="margin-top:50px; margin-bottom:50px;">
                        <div class="col-sm-1 " style="color:white;  margin-top:20px;">
                                <!-- 2 / -->
                                <!-- <h1><strong>2</strong></h1> -->
                                <span style="font-size:30px; padding:10px 20px; background-color:#DB0A5B ;border-radius:100px;">2</span>
                      </div>
                      <div class="col-sm-1 " style="">
                         
                    </div>
                    <div class="col-sm-6">
                        <h3><em>Donate </em><strong>TO THE FUTURE</strong></h3>
                        <p>Your donation will go to support the Moonshots movement. We are in our eariy days but with audacious goals to empower changemakers in education. Our commitment is to sow every doller for future harvest.global voice and demand for
                            change in education.

                        </p>
                        <div class="mbr-hero ">
                            <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="#">DONATE</a></div>
                        </div>
                    </div>
                </div>
                <div class="righted row animated fadeInUp" style="display: flex;">
                    <div class="col-sm-6 "></div>
                    <div class="col-sm-5">
                        <h3>GET <em>Reyowey </em></h3>
                        <p>Our resource and tooling page for educators will be launching soon.Register your interest below to be notified.
                        </p>
                    </div>
                  
                  <div class="col-sm-1 text-center" style="color:white; margin-top:70px;">
                        <!-- 2 / -->
                        <!-- <h1><strong>2</strong></h1> -->
                        <span style="font-size:30px; padding:10px 20px; background-color:#2574A9 ;border-radius:100px;">3</span>
              </div>
                </div>
                <div class="righted row animated fadeInUp" style="margin-bottom:200px;">
                    <div class="col-sm-6 "></div>
                    <div class="col-sm-6 " style="margin-top:20px;">
                        <form  enctype="multipart/form-data" action="includes\coustomer_action.php"  method="post">
                            <div class="form-group">
                                <label for="exampleInputfname">First Name</label>
                                <input type="text" class="form-control" required name="fname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputlname">Last Name</label>
                                <input type="text" class="form-control" required name="lname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" required name="email" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country</label>
                                <select class="form-control" required name="country" >
                                    <option value="">Select your country</option>
                                    <option value="AFG">Afghanistan</option>
                                    <option value="ALA">Åland Islands</option>
                                    <option value="ALB">Albania</option>
                                    <option value="DZA">Algeria</option>
                                    <option value="ASM">American Samoa</option>
                                    <option value="AND">Andorra</option>
                                    <option value="AGO">Angola</option>
                                    <option value="AIA">Anguilla</option>
                                    <option value="ATA">Antarctica</option>
                                    <option value="ATG">Antigua and Barbuda</option>
                                    <option value="ARG">Argentina</option>
                                    <option value="ARM">Armenia</option>
                                    <option value="ABW">Aruba</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AUT">Austria</option>
                                    <option value="AZE">Azerbaijan</option>
                                    <option value="BHS">Bahamas</option>
                                    <option value="BHR">Bahrain</option>
                                    <option value="BGD">Bangladesh</option>
                                    <option value="BRB">Barbados</option>
                                    <option value="BLR">Belarus</option>
                                    <option value="BEL">Belgium</option>
                                    <option value="BLZ">Belize</option>
                                    <option value="BEN">Benin</option>
                                    <option value="BMU">Bermuda</option>
                                    <option value="BTN">Bhutan</option>
                                    <option value="BOL">Bolivia, Plurinational State of</option>
                                    <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BIH">Bosnia and Herzegovina</option>
                                    <option value="BWA">Botswana</option>
                                    <option value="BVT">Bouvet Island</option>
                                    <option value="BRA">Brazil</option>
                                    <option value="IOT">British Indian Ocean Territory</option>
                                    <option value="BRN">Brunei Darussalam</option>
                                    <option value="BGR">Bulgaria</option>
                                    <option value="BFA">Burkina Faso</option>
                                    <option value="BDI">Burundi</option>
                                    <option value="KHM">Cambodia</option>
                                    <option value="CMR">Cameroon</option>
                                    <option value="CAN">Canada</option>
                                    <option value="CPV">Cape Verde</option>
                                    <option value="CYM">Cayman Islands</option>
                                    <option value="CAF">Central African Republic</option>
                                    <option value="TCD">Chad</option>
                                    <option value="CHL">Chile</option>
                                    <option value="CHN">China</option>
                                    <option value="CXR">Christmas Island</option>
                                    <option value="CCK">Cocos (Keeling) Islands</option>
                                    <option value="COL">Colombia</option>
                                    <option value="COM">Comoros</option>
                                    <option value="COG">Congo</option>
                                    <option value="COD">Congo, the Democratic Republic of the</option>
                                    <option value="COK">Cook Islands</option>
                                    <option value="CRI">Costa Rica</option>
                                    <option value="CIV">Côte d'Ivoire</option>
                                    <option value="HRV">Croatia</option>
                                    <option value="CUB">Cuba</option>
                                    <option value="CUW">Curaçao</option>
                                    <option value="CYP">Cyprus</option>
                                    <option value="CZE">Czech Republic</option>
                                    <option value="DNK">Denmark</option>
                                    <option value="DJI">Djibouti</option>
                                    <option value="DMA">Dominica</option>
                                    <option value="DOM">Dominican Republic</option>
                                    <option value="ECU">Ecuador</option>
                                    <option value="EGY">Egypt</option>
                                    <option value="SLV">El Salvador</option>
                                    <option value="GNQ">Equatorial Guinea</option>
                                    <option value="ERI">Eritrea</option>
                                    <option value="EST">Estonia</option>
                                    <option value="ETH">Ethiopia</option>
                                    <option value="FLK">Falkland Islands (Malvinas)</option>
                                    <option value="FRO">Faroe Islands</option>
                                    <option value="FJI">Fiji</option>
                                    <option value="FIN">Finland</option>
                                    <option value="FRA">France</option>
                                    <option value="GUF">French Guiana</option>
                                    <option value="PYF">French Polynesia</option>
                                    <option value="ATF">French Southern Territories</option>
                                    <option value="GAB">Gabon</option>
                                    <option value="GMB">Gambia</option>
                                    <option value="GEO">Georgia</option>
                                    <option value="DEU">Germany</option>
                                    <option value="GHA">Ghana</option>
                                    <option value="GIB">Gibraltar</option>
                                    <option value="GRC">Greece</option>
                                    <option value="GRL">Greenland</option>
                                    <option value="GRD">Grenada</option>
                                    <option value="GLP">Guadeloupe</option>
                                    <option value="GUM">Guam</option>
                                    <option value="GTM">Guatemala</option>
                                    <option value="GGY">Guernsey</option>
                                    <option value="GIN">Guinea</option>
                                    <option value="GNB">Guinea-Bissau</option>
                                    <option value="GUY">Guyana</option>
                                    <option value="HTI">Haiti</option>
                                    <option value="HMD">Heard Island and McDonald Islands</option>
                                    <option value="VAT">Holy See (Vatican City State)</option>
                                    <option value="HND">Honduras</option>
                                    <option value="HKG">Hong Kong</option>
                                    <option value="HUN">Hungary</option>
                                    <option value="ISL">Iceland</option>
                                    <option value="IND">India</option>
                                    <option value="IDN">Indonesia</option>
                                    <option value="IRN">Iran, Islamic Republic of</option>
                                    <option value="IRQ">Iraq</option>
                                    <option value="IRL">Ireland</option>
                                    <option value="IMN">Isle of Man</option>
                                    <option value="ISR">Israel</option>
                                    <option value="ITA">Italy</option>
                                    <option value="JAM">Jamaica</option>
                                    <option value="JPN">Japan</option>
                                    <option value="JEY">Jersey</option>
                                    <option value="JOR">Jordan</option>
                                    <option value="KAZ">Kazakhstan</option>
                                    <option value="KEN">Kenya</option>
                                    <option value="KIR">Kiribati</option>
                                    <option value="PRK">Korea, Democratic People's Republic of</option>
                                    <option value="KOR">Korea, Republic of</option>
                                    <option value="KWT">Kuwait</option>
                                    <option value="KGZ">Kyrgyzstan</option>
                                    <option value="LAO">Lao People's Democratic Republic</option>
                                    <option value="LVA">Latvia</option>
                                    <option value="LBN">Lebanon</option>
                                    <option value="LSO">Lesotho</option>
                                    <option value="LBR">Liberia</option>
                                    <option value="LBY">Libya</option>
                                    <option value="LIE">Liechtenstein</option>
                                    <option value="LTU">Lithuania</option>
                                    <option value="LUX">Luxembourg</option>
                                    <option value="MAC">Macao</option>
                                    <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MDG">Madagascar</option>
                                    <option value="MWI">Malawi</option>
                                    <option value="MYS">Malaysia</option>
                                    <option value="MDV">Maldives</option>
                                    <option value="MLI">Mali</option>
                                    <option value="MLT">Malta</option>
                                    <option value="MHL">Marshall Islands</option>
                                    <option value="MTQ">Martinique</option>
                                    <option value="MRT">Mauritania</option>
                                    <option value="MUS">Mauritius</option>
                                    <option value="MYT">Mayotte</option>
                                    <option value="MEX">Mexico</option>
                                    <option value="FSM">Micronesia, Federated States of</option>
                                    <option value="MDA">Moldova, Republic of</option>
                                    <option value="MCO">Monaco</option>
                                    <option value="MNG">Mongolia</option>
                                    <option value="MNE">Montenegro</option>
                                    <option value="MSR">Montserrat</option>
                                    <option value="MAR">Morocco</option>
                                    <option value="MOZ">Mozambique</option>
                                    <option value="MMR">Myanmar</option>
                                    <option value="NAM">Namibia</option>
                                    <option value="NRU">Nauru</option>
                                    <option value="NPL">Nepal</option>
                                    <option value="NLD">Netherlands</option>
                                    <option value="NCL">New Caledonia</option>
                                    <option value="NZL">New Zealand</option>
                                    <option value="NIC">Nicaragua</option>
                                    <option value="NER">Niger</option>
                                    <option value="NGA">Nigeria</option>
                                    <option value="NIU">Niue</option>
                                    <option value="NFK">Norfolk Island</option>
                                    <option value="MNP">Northern Mariana Islands</option>
                                    <option value="NOR">Norway</option>
                                    <option value="OMN">Oman</option>
                                    <option value="PAK">Pakistan</option>
                                    <option value="PLW">Palau</option>
                                    <option value="PSE">Palestinian Territory, Occupied</option>
                                    <option value="PAN">Panama</option>
                                    <option value="PNG">Papua New Guinea</option>
                                    <option value="PRY">Paraguay</option>
                                    <option value="PER">Peru</option>
                                    <option value="PHL">Philippines</option>
                                    <option value="PCN">Pitcairn</option>
                                    <option value="POL">Poland</option>
                                    <option value="PRT">Portugal</option>
                                    <option value="PRI">Puerto Rico</option>
                                    <option value="QAT">Qatar</option>
                                    <option value="REU">Réunion</option>
                                    <option value="ROU">Romania</option>
                                    <option value="RUS">Russian Federation</option>
                                    <option value="RWA">Rwanda</option>
                                    <option value="BLM">Saint Barthélemy</option>
                                    <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KNA">Saint Kitts and Nevis</option>
                                    <option value="LCA">Saint Lucia</option>
                                    <option value="MAF">Saint Martin (French part)</option>
                                    <option value="SPM">Saint Pierre and Miquelon</option>
                                    <option value="VCT">Saint Vincent and the Grenadines</option>
                                    <option value="WSM">Samoa</option>
                                    <option value="SMR">San Marino</option>
                                    <option value="STP">Sao Tome and Principe</option>
                                    <option value="SAU">Saudi Arabia</option>
                                    <option value="SEN">Senegal</option>
                                    <option value="SRB">Serbia</option>
                                    <option value="SYC">Seychelles</option>
                                    <option value="SLE">Sierra Leone</option>
                                    <option value="SGP">Singapore</option>
                                    <option value="SXM">Sint Maarten (Dutch part)</option>
                                    <option value="SVK">Slovakia</option>
                                    <option value="SVN">Slovenia</option>
                                    <option value="SLB">Solomon Islands</option>
                                    <option value="SOM">Somalia</option>
                                    <option value="ZAF">South Africa</option>
                                    <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SSD">South Sudan</option>
                                    <option value="ESP">Spain</option>
                                    <option value="LKA">Sri Lanka</option>
                                    <option value="SDN">Sudan</option>
                                    <option value="SUR">Suriname</option>
                                    <option value="SJM">Svalbard and Jan Mayen</option>
                                    <option value="SWZ">Swaziland</option>
                                    <option value="SWE">Sweden</option>
                                    <option value="CHE">Switzerland</option>
                                    <option value="SYR">Syrian Arab Republic</option>
                                    <option value="TWN">Taiwan, Province of China</option>
                                    <option value="TJK">Tajikistan</option>
                                    <option value="TZA">Tanzania, United Republic of</option>
                                    <option value="THA">Thailand</option>
                                    <option value="TLS">Timor-Leste</option>
                                    <option value="TGO">Togo</option>
                                    <option value="TKL">Tokelau</option>
                                    <option value="TON">Tonga</option>
                                    <option value="TTO">Trinidad and Tobago</option>
                                    <option value="TUN">Tunisia</option>
                                    <option value="TUR">Turkey</option>
                                    <option value="TKM">Turkmenistan</option>
                                    <option value="TCA">Turks and Caicos Islands</option>
                                    <option value="TUV">Tuvalu</option>
                                    <option value="UGA">Uganda</option>
                                    <option value="UKR">Ukraine</option>
                                    <option value="ARE">United Arab Emirates</option>
                                    <option value="GBR">United Kingdom</option>
                                    <option value="USA">United States</option>
                                    <option value="UMI">United States Minor Outlying Islands</option>
                                    <option value="URY">Uruguay</option>
                                    <option value="UZB">Uzbekistan</option>
                                    <option value="VUT">Vanuatu</option>
                                    <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                    <option value="VNM">Viet Nam</option>
                                    <option value="VGB">Virgin Islands, British</option>
                                    <option value="VIR">Virgin Islands, U.S.</option>
                                    <option value="WLF">Wallis and Futuna</option>
                                    <option value="ESH">Western Sahara</option>
                                    <option value="YEM">Yemen</option>
                                    <option value="ZMB">Zambia</option>
                                    <option value="ZWE">Zimbabwe</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Me Up</button>
                        </form>
                    </div>
                </div>
            </div>

    </section>




    
    <script src="assets/smooth-scroll/smooth-scroll.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/mobirise/js/script.js"></script>
    <script src="assets/lib.js"></script>


</body>

</html>