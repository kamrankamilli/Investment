<?php
require_once("./controller/validation.php");
require_once("./controller/storeData.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
  <link rel="stylesheet" href="lib/intl-tel-input-master/build/css/intlTelInput.css" type="text/css" />
  <link rel="stylesheet" href="lib/jquery-ui-1.12.1.custom/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" href="src/css/style.css" type="text/css" />
  <title>Investment</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row full">
      <aside class="col-lg-4 col-sm-12 leftcontainer" role="aside">
        <div class="row">
          <div class="col-sm-12">
            <div class="logo">
              <img src="src/assets/logo.png" alt="logo" />
            </div>
          </div>
        </div>
        <div class="row progressbar">
          <div class="col-lg-12 col-sm-4">
            <div class="mt-4">
              <p class="step" id="contactdetails">Contact Details</p>
            </div>
          </div>
          <div class="col-lg-12 col-sm-4">
            <div class="step mt-4">
              <p class="step" id="investmentplans">Investment Plans</p>
            </div>
          </div>
          <div class="col-lg-12 col-sm-4">
            <div class="step mt-4">
              <p class="step" id="investmentpref">Investment Preferences</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="shadow-sm p-3 mb-5 bg-white rounded roundedrectangle">
              <div class="text">
                <p id="text">
                </p>
              </div>
              <div class="quotation">
                <img src="src/assets/‘‘.png" alt="quotation" />
              </div>
            </div>
          </div>
        </div>
      </aside>
      <!--Right Column-->
      <div class="col-lg-8 col-sm-12 justify-content-center" role="main">
        <header class="row header">
          <div class="col-4">
            <p id="step"></p>
          </div>
          <div class="col-6 p-0">
            <p style="float: right">Lost or have trrouble?</p>
          </div>
          <div class="col-2 p-0">
            <a style="float: left" href="#">Get help<i class="fas fa-arrow-right"></i></a>
          </div>
        </header>
        <main>
          <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
            <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green; text-align: center;"><?php echo $_SESSION['success_message']; ?></div>
          <?php
            unset($_SESSION['success_message']);
          }
          ?>
          <article>
            <form action="" class="form" method="POST">
              <div id="contact" style="display: block">
                <header>
                  <div class="row">
                    <div class="col-12">
                      <div class="formheader">
                        <h1>Contact Details</h1>
                      </div>
                    </div>
                    <div class="col-12">
                      <p>
                        Welcome to United Properties, we are glad to see you!
                        Let’s get started by letting us know a little bit
                        about you
                      </p>
                    </div>
                  </div>
                </header>
                <section>
                  <div class="row">
                    <div class="col-6 mt-4">
                      <label for="fullname">Full Name</label>
                      <input type="text" name="fullname" class="form-control" value="<?php echo $fullname; ?>" />
                      <span class="help-block"><?php echo $fullname_err; ?></span>
                    </div>
                    <div class="col-6 flagsdropdown">
                      <input class="form-control" name="phoneNumber[main]" type="tel" id="phone" value="<?php echo $phoneNumber; ?>" />
                      <span id="valid-msg" class="hide">✓ Valid</span>
                      <span id="error-msg" class="hide"></span>
                      <span class="help-block"><?php echo $phoneNumber_err; ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 email">
                      <label for="email">Email address</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" />
                      <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 country">
                      <select class="form-control" name="country">
                        <option value=" " hidden selected>Select a country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                      </select>
                      <span class="help-block"><?php echo $country_err; ?></span>
                    </div>
                  </div>
                  <div class="row privacy">
                    <div class="col-12">
                      <h3>Privacy Policy</h3>
                    </div>
                    <div class="col-12">
                      <p>
                        We know you care about how your personal information
                        is used and shared, so we take your privacy seriously
                      </p>
                    </div>
                    <div class="col-12">
                      <a href="#">Expand privacy policy</a><i class="fas fa-arrow-right"></i>
                    </div>
                  </div>
                  <div class="row action">
                    <div class="col-12 col-sm-4">
                      <a href="#"><i class="fas fa-arrow-left"></i>Back to the
                        homepage</a>
                    </div>
                    <div class="col-12 col-sm-8 btn-toolbar">
                      <button type="button" class="btn btn-primary" id="skip-button"></button>
                      <button type="button" class="btn btn-primary next-button" id="next-button">
                        <i class="fas fa-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                </section>
              </div>
              <div id="plans" style="display: none">
                <header>
                  <div class="row">
                    <div class="col-12">
                      <div class="formheader">
                        <h1>Investment plans</h1>
                      </div>
                    </div>
                    <div class="col-12">
                      <p>
                        Let us know about your investment plans. This will
                        help us get you to the right expert who will help you
                        further
                      </p>
                    </div>
                  </div>
                </header>
                <section>
                  <div class="row investplan">
                    <div class="col-12">
                      <h3>
                        How much are you planning to invest in this year?
                      </h3>
                    </div>
                  </div>
                  <div class="row number-input">
                    <div class="col-6">
                      <label for="from">From</label>
                    </div>
                    <div class="col-6">
                      <label for="to">To</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="dollar ">
                        <input id="from" type="number" min="1" name="from"  class="form-control" value="<?php echo $invest_from; ?>" />
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="dollar ">
                        <input id="to" type="number" min="1"  name="to" class="form-control" value="<?php echo $invest_to; ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <span class="help-block"><?php echo $invest_from_err; ?></span>
                    </div>
                    <div class="col-6">
                      <span class="help-block"><?php echo $invest_to_err; ?></span>
                    </div>
                  </div>

                  <div class="row range">
                    <div class="col-12">
                      <div id="slider"></div>
                    </div>
                  </div>
                  <div class="row accrinvestor">
                    <div class="col-12">
                      <h3>Are you an accredited investor?</h3>
                    </div>
                  </div>
                  <div class="row radiocontainer mt-4">
                    <label class="radiobutton col-2" for="yes"><input type="radio" class="radio" name="investor" id="yes" value="yes" <?php if (isset($_POST['investor']) && $input_accrinvestor == "yes") {
                                                                                                                                        echo "checked";
                                                                                                                                      } ?> />Yes</label>
                    <label class="radiobutton col-2 offset-2" for="no"><input type="radio" class="radio" name="investor" id="no" value="no" <?php if (isset($_POST['investor']) && $input_accrinvestor == "no") {
                                                                                                                                              echo "checked";
                                                                                                                                            } ?> />No</label>
                    <span class="help-block"><?php echo $accrinvest_err; ?></span>
                  </div>
                  <div class="row action">
                    <div class="col-4">
                      <a href="javascript:;" class="back-step"><i class="fas fa-arrow-left"></i>Back to the previous
                        step</a>
                    </div>
                    <div class="col-8 btn-toolbar">
                      <button type="button" class="btn btn-primary" id="skip-button"></button>
                      <button type="button" class="btn btn-primary next-button" id="next-button">
                        <i class="fas fa-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                </section>
              </div>
              <div id="pref" style="display: none">
                <header>
                  <div class="row">
                    <div class="col-12">
                      <div class="formheader">
                        <h1>Investment preferences</h1>
                      </div>
                    </div>
                    <div class="col-12">
                      <p>
                        This will help us figure out what your investment
                        options are so that we can show you only possibly
                        intresting for you deals
                      </p>
                    </div>
                  </div>
                </header>
                <section>
                  <div class="row investplan">
                    <div class="col-12">
                      <h3>What kind of real estate are you interested in?</h3>
                    </div>
                  </div>
                  <div class="row checkboxrow mt-4 ">
                    <div class="col-6 col-sm-3 checkboxcontainer">
                      <label class="form-check-label" for="checkbox1"><input class="form-check-input" type="checkbox" id="checkbox1" name="checkbox[0]" <?php if (isset($_POST['checkbox']) && $single_family == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Single family</label>
                    </div>
                    <div class="col-6 col-sm-3">
                      <label class="form-check-label" for="checkbox2"><input class="form-check-input" type="checkbox" id="checkbox2" name="checkbox[1]" <?php if (isset($_POST['checkbox']) && $residential_multifamily == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Residential multifamily</label>
                    </div>
                    <div class="col-6 col-sm-3">
                      <label class="form-check-label" for="checkbox3"><input class="form-check-input" type="checkbox" id="checkbox3" name="checkbox[2]" <?php if (isset($_POST['checkbox']) && $commercial_retail == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Commercial retail</label>
                    </div>
                    <div class="col-6 col-sm-3">
                      <label class="form-check-label" for="checkbox4"><input class="form-check-input" type="checkbox" id="checkbox4" name="checkbox[3]" <?php if (isset($_POST['checkbox']) && $commercial_industrial == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Commercial industrial</label>
                    </div>
                  </div>
                  <div class="row checkboxrow">
                    <div class="col-6 col-sm-3">
                      <label class="form-check-label" for="checkbox5"><input class="form-check-input" type="checkbox" id="checkbox5" name="checkbox[4]" <?php if (isset($_POST['checkbox']) && $commercial_hospital == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Commercial hospital</label>
                    </div>
                    <div class="col-6 col-sm-3">
                      <label class="form-check-label" for="checkbox6"><input class="form-check-input" type="checkbox" id="checkbox6" name="checkbox[5]" <?php if (isset($_POST['checkbox']) && $commercial_warehousing == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Commercial warehousing</label>
                    </div>
                    <div class="col-6 col-sm-3">
                      <label class="form-check-label" for="checkbox7"><input class="form-check-input" type="checkbox" id="checkbox7" name="checkbox[6]" <?php if (isset($_POST['checkbox']) && $commercial_office == "1") {
                                                                                                                                                          echo "checked";
                                                                                                                                                        } ?> />Commercial office</label>
                    </div>
                    <div class="col-6 col-sm-3">
                      <div class="col-6 ">
                        <label class="form-check-label" for="checkbox8"><input class="form-check-input" type="checkbox" id="checkbox8" name="checkbox[7]" <?php if (isset($_POST['checkbox']) && $other == "1") {
                                                                                                                                                            echo "checked";
                                                                                                                                                          } ?> />Other</label>
                      </div>
                    </div>
                    <span class="help-block"><?php echo $multi_checkbox_err; ?></span>
                    <div class="row action">
                      <div class="col-4">
                        <a href="javascript:;" class="back-step"><i class="fas fa-arrow-left"></i>Back to the previous
                          step</a>
                      </div>
                      <div class="col-8 btn-toolbar">
                        <button type="button" class="btn btn-primary" id="skip-button"></button>
                        <button type="submit" class="btn btn-primary" id="finish-button">Finish
                        </button>
                      </div>
                    </div>
                </section>
              </div>
            </form>
          </article>
        </main>
      </div>
    </div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="lib/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
  <script src="lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="lib/intl-tel-input-master/build/js/intlTelInput.js"></script>
  <script src="src/js/slider-range.js"></script>
  <script src="src/js/radiobutton.js"></script>
  <script src="src/js/backForward.js"></script>
  <script src="src/js/checkbox.js"></script>
  <script src="src/js/intlTelInput.js"></script>
</body>

</html>