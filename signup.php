  
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Signup | Expertstrades </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendors/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendors/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign UP
					</span>
				</div>
				<div class="container" style="padding-top: 10px;">
									</div>
			
				<form class="login100-form validate-form" action="signup.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="First Name is required">
						<input type="hidden" name="csrf_token" value="d790e5e67fb1e3ad6b11cf3bfdf2bcd3">						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="firstname" placeholder="Enter First Name" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Last Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lastname" placeholder="Enter Last Name" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Sex is required">
						<span class="label-input100">Gender</span>
						<select class="input100" name="gender" required>
							<option value="">---Select Gender---</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Country is required">
						<span class="label-input100">Country</span>
						<select  class="input100" name="country">
							<option value="">---Select Country---</option>
							<option value='Afghanistan'>Afghanistan</option>
							<option value='Albania'>Albania</option>
							<option value='Algeria'>Algeria</option>
							<option value='American Samoa'>American Samoa</option>
							<option value='Andorra'>Andorra</option>
							<option value='Angola'>Angola</option>
							<option value='Anguilla'>Anguilla</option>
							<option value='Antarctica'>Antarctica</option>
							<option value='Antigua and Barbuda'>Antigua and Barbuda</option>
							<option value='Argentina'>Argentina</option>
							<option value='Armenia'>Armenia</option>
							<option value='Aruba'>Aruba</option>
							<option value='Australia'>Australia</option>
							<option value='Austria'>Austria</option>
							<option value='Azerbaijan'>Azerbaijan</option>
							<option value='Bahamas'>Bahamas</option>
							<option value='Bahrain'>Bahrain</option>
							<option value='Bangladesh'>Bangladesh</option>
							<option value='Barbados'>Barbados</option>
							<option value='Belarus'>Belarus</option>
							<option value='Belgium'>Belgium</option>
							<option value='Belize'>Belize</option>
							<option value='Benin'>Benin</option>
							<option value='Bermuda'>Bermuda</option>
							<option value='Bhutan'>Bhutan</option>
							<option value='Bolivia'>Bolivia</option>
							<option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
							<option value='Botswana'>Botswana</option>
							<option value='Bouvet Island'>Bouvet Island</option>
							<option value='Brazil'>Brazil</option>
							<option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
							<option value='Brunei Darussalam'>Brunei Darussalam</option>
							<option value='Bulgaria'>Bulgaria</option>
							<option value='Burkina Faso'>Burkina Faso</option>
							<option value='Burundi'>Burundi</option>
							<option value='Cambodia'>Cambodia</option>
							<option value='Cameroon'>Cameroon</option>
							<option value='Canada'>Canada</option>
							<option value='Cape Verde'>Cape Verde</option>
							<option value='Cayman Islands'>Cayman Islands</option>
							<option value='Central African Republic'>Central African Republic</option>
							<option value='Chad'>Chad</option>
							<option value='Chile'>Chile</option>
							<option value='China'>China</option>
							<option value='Christmas Island'>Christmas Island</option>
							<option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
							<option value='Colombia'>Colombia</option>
							<option value='Comoros'>Comoros</option>
							<option value='Congo'>Congo</option>
							<option value='Cook Islands'>Cook Islands</option>
							<option value='Costa Rica'>Costa Rica</option>
							<option value='Croatia (Hrvatska)'>Croatia (Hrvatska)</option>
							<option value='Cuba'>Cuba</option>
							<option value='Cyprus'>Cyprus</option>
							<option value='Czech Republic'>Czech Republic</option>
							<option value='Denmark'>Denmark</option>
							<option value='Djibouti'>Djibouti</option>
							<option value='Dominica'>Dominica</option>
							<option value='Dominican Republic'>Dominican Republic</option>
							<option value='East Timor'>East Timor</option>
							<option value='Ecuador'>Ecuador</option>
							<option value='Egypt'>Egypt</option>
							<option value='El Salvador'>El Salvador</option>
							<option value='Equatorial Guinea'>Equatorial Guinea</option>
							<option value='Eritrea'>Eritrea</option>
							<option value='Estonia'>Estonia</option>
							<option value='Ethiopia'>Ethiopia</option>
							<option value='Falkland Islands (Malvinas)'>Falkland Islands (Malvinas)</option>
							<option value='Faroe Islands'>Faroe Islands</option>
							<option value='Fiji'>Fiji</option>
							<option value='Finland'>Finland</option>
							<option value='France'>France</option>
							<option value='France, Metropolitan'>France, Metropolitan</option>
							<option value='French Guiana'>French Guiana</option>
							<option value='French Polynesia'>French Polynesia</option>
							<option value='French Southern Territories'>French Southern Territories</option>
							<option value='Gabon'>Gabon</option>
							<option value='Gambia'>Gambia</option>
							<option value='Georgia'>Georgia</option>
							<option value='Germany'>Germany</option>
							<option value='Ghana'>Ghana</option>
							<option value='Gibraltar'>Gibraltar</option>
							<option value='Guernsey'>Guernsey</option>
							<option value='Greece'>Greece</option>
							<option value='Greenland'>Greenland</option>
							<option value='Grenada'>Grenada</option>
							<option value='Guadeloupe'>Guadeloupe</option>
							<option value='Guam'>Guam</option>
							<option value='Guatemala'>Guatemala</option>
							<option value='Guinea'>Guinea</option>
							<option value='Guinea-Bissau'>Guinea-Bissau</option>
							<option value='Guyana'>Guyana</option>
							<option value='Haiti'>Haiti</option>
							<option value='Heard and Mc Donald Islands'>Heard and Mc Donald Islands</option>
							<option value='Honduras'>Honduras</option>
							<option value='Hong Kong'>Hong Kong</option>
							<option value='Hungary'>Hungary</option>
							<option value='Iceland'>Iceland</option>
							<option value='India'>India</option>
							<option value='Isle of Man'>Isle of Man</option>
							<option value='Indonesia'>Indonesia</option>
							<option value='Iran (Islamic Republic of)'>Iran (Islamic Republic of)</option>
							<option value='Iraq'>Iraq</option>
							<option value='Ireland'>Ireland</option>
							<option value='Israel'>Israel</option>
							<option value='Italy'>Italy</option>
							<option value='Ivory Coast'>Ivory Coast</option>
							<option value='Jersey'>Jersey</option>
							<option value='Jamaica'>Jamaica</option>
							<option value='Japan'>Japan</option>
							<option value='Jordan'>Jordan</option>
							<option value='Kazakhstan'>Kazakhstan</option>
							<option value='Kenya'>Kenya</option>
							<option value='Kiribati'>Kiribati</option>
							<option value='Korea, Democratic People's Republic of'>Korea, Democratic People's Republic of</option>
							<option value='Korea, Republic of'>Korea, Republic of</option>
							<option value='Kosovo'>Kosovo</option>
							<option value='Kuwait'>Kuwait</option>
							<option value='Kyrgyzstan'>Kyrgyzstan</option>
							<option value='Lao People's Democratic Republic'>Lao People's Democratic Republic</option>
							<option value='Latvia'>Latvia</option>
							<option value='Lebanon'>Lebanon</option>
							<option value='Lesotho'>Lesotho</option>
							<option value='Liberia'>Liberia</option>
							<option value='Libyan Arab Jamahiriya'>Libyan Arab Jamahiriya</option>
							<option value='Liechtenstein'>Liechtenstein</option>
							<option value='Lithuania'>Lithuania</option>
							<option value='Luxembourg'>Luxembourg</option>
							<option value='Macau'>Macau</option>
							<option value='Macedonia'>Macedonia</option>
							<option value='Madagascar'>Madagascar</option>
							<option value='Malawi'>Malawi</option>
							<option value='Malaysia'>Malaysia</option>
							<option value='Maldives'>Maldives</option>
							<option value='Mali'>Mali</option>
							<option value='Malta'>Malta</option>
							<option value='Marshall Islands'>Marshall Islands</option>
							<option value='Martinique'>Martinique</option>
							<option value='Mauritania'>Mauritania</option>
							<option value='Mauritius'>Mauritius</option>
							<option value='Mayotte'>Mayotte</option>
							<option value='Mexico'>Mexico</option>
							<option value='Micronesia, Federated States of'>Micronesia, Federated States of</option>
							<option value='Moldova, Republic of'>Moldova, Republic of</option>
							<option value='Monaco'>Monaco</option>
							<option value='Mongolia'>Mongolia</option>
							<option value='Montenegro'>Montenegro</option>
							<option value='Montserrat'>Montserrat</option>
							<option value='Morocco'>Morocco</option>
							<option value='Mozambique'>Mozambique</option>
							<option value='Myanmar'>Myanmar</option>
							<option value='Namibia'>Namibia</option>
							<option value='Nauru'>Nauru</option>
							<option value='Nepal'>Nepal</option>
							<option value='Netherlands'>Netherlands</option>
							<option value='Netherlands Antilles'>Netherlands Antilles</option>
							<option value='New Caledonia'>New Caledonia</option>
							<option value='New Zealand'>New Zealand</option>
							<option value='Nicaragua'>Nicaragua</option>
							<option value='Niger'>Niger</option>
							<option value='Nigeria'>Nigeria</option>
							<option value='Niue'>Niue</option>
							<option value='Norfolk Island'>Norfolk Island</option>
							<option value='Northern Mariana Islands'>Northern Mariana Islands</option>
							<option value='Norway'>Norway</option>
							<option value='Oman'>Oman</option>
							<option value='Pakistan'>Pakistan</option>
							<option value='Palau'>Palau</option>
							<option value='Palestine'>Palestine</option>
							<option value='Panama'>Panama</option>
							<option value='Papua New Guinea'>Papua New Guinea</option>
							<option value='Paraguay'>Paraguay</option>
							<option value='Peru'>Peru</option>
							<option value='Philippines'>Philippines</option>
							<option value='Pitcairn'>Pitcairn</option>
							<option value='Poland'>Poland</option>
							<option value='Portugal'>Portugal</option>
							<option value='Puerto Rico'>Puerto Rico</option>
							<option value='Qatar'>Qatar</option>
							<option value='Reunion'>Reunion</option>
							<option value='Romania'>Romania</option>
							<option value='Russian Federation'>Russian Federation</option>
							<option value='Rwanda'>Rwanda</option>
							<option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
							<option value='Saint Lucia'>Saint Lucia</option>
							<option value='Saint Vincent and the Grenadines'>Saint Vincent and the Grenadines</option>
							<option value='Samoa'>Samoa</option>
							<option value='San Marino'>San Marino</option>
							<option value='Sao Tome and Principe'>Sao Tome and Principe</option>
							<option value='Saudi Arabia'>Saudi Arabia</option>
							<option value='Senegal'>Senegal</option>
							<option value='Serbia'>Serbia</option>
							<option value='Seychelles'>Seychelles</option>
							<option value='Sierra Leone'>Sierra Leone</option>
							<option value='Singapore'>Singapore</option>
							<option value='Slovakia'>Slovakia</option>
							<option value='Slovenia'>Slovenia</option>
							<option value='Solomon Islands'>Solomon Islands</option>
							<option value='Somalia'>Somalia</option>
							<option value='South Africa'>South Africa</option>
							<option value='South Georgia South Sandwich Islands'>South Georgia South Sandwich Islands</option>
							<option value='Spain'>Spain</option>
							<option value='Sri Lanka'>Sri Lanka</option>
							<option value='St. Helena'>St. Helena</option>
							<option value='St. Pierre and Miquelon'>St. Pierre and Miquelon</option>
							<option value='Sudan'>Sudan</option>
							<option value='Suriname'>Suriname</option>
							<option value='Svalbard and Jan Mayen Islands'>Svalbard and Jan Mayen Islands</option>
							<option value='Swaziland'>Swaziland</option>
							<option value='Sweden'>Sweden</option>
							<option value='Switzerland'>Switzerland</option>
							<option value='Syrian Arab Republic'>Syrian Arab Republic</option>
							<option value='Taiwan'>Taiwan</option>
							<option value='Tajikistan'>Tajikistan</option>
							<option value='Tanzania, United Republic of'>Tanzania, United Republic of</option>
							<option value='Thailand'>Thailand</option>
							<option value='Togo'>Togo</option>
							<option value='Tokelau'>Tokelau</option>
							<option value='Tonga'>Tonga</option>
							<option value='Trinidad and Tobago'>Trinidad and Tobago</option>
							<option value='Tunisia'>Tunisia</option>
							<option value='Turkey'>Turkey</option>
							<option value='Turkmenistan'>Turkmenistan</option>
							<option value='Turks and Caicos Islands'>Turks and Caicos Islands</option>
							<option value='Tuvalu'>Tuvalu</option>
							<option value='Uganda'>Uganda</option>
							<option value='Ukraine'>Ukraine</option>
							<option value='United Arab Emirates'>United Arab Emirates</option>
							<option value='United Kingdom'>United Kingdom</option>
							<option value='United States'>United States</option>
							<option value='United States minor outlying islands'>United States minor outlying islands</option>
							<option value='Uruguay'>Uruguay</option>
							<option value='Uzbekistan'>Uzbekistan</option>
							<option value='Vanuatu'>Vanuatu</option>
							<option value='Vatican City State'>Vatican City State</option>
							<option value='Venezuela'>Venezuela</option>
							<option value='Vietnam'>Vietnam</option>
							<option value='Virgin Islands (British)'>Virgin Islands (British)</option>
							<option value='Virgin Islands (U.S.)'>Virgin Islands (U.S.)</option>
							<option value='Wallis and Futuna Islands'>Wallis and Futuna Islands</option>
							<option value='Western Sahara'>Western Sahara</option>
							<option value='Yemen'>Yemen</option>
							<option value='Zaire'>Zaire</option>
							<option value='Zambia'>Zambia</option>
							<option value='Zimbabwe'>Zimbabwe</option> 
    					</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Secret Question answer is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="phone" placeholder="Enter your phone number here" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Bitcoin Wallet is required">
						<span class="label-input100">Bitcoin Wallet</span>
						<input class="input100" type="text" name="bitcoin_wallet" placeholder="Enter Bitcoin Wallet Address(Optional)">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Secret is required">
						<span class="label-input100">Security Question</span>
						<select  class="input100" name="security_question" required>
							<option value="">---Select Question---</option>
							<option value="What is your pet name?">What is your pet name?</option>
							<option value="What is your hobby?">What is your hobby?</option>
							<option value="What is the name of your last child?">What is the name of your last child?</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Secret Question answer is required">
						<span class="label-input100">Your Answer</span>
						<input class="input100" type="password" name="security_answer" placeholder="Enter your answer here" required>
						<span class="focus-input100"></span>
					</div>		

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter Email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter Username" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="signup" type="submit">
							Create Account
						</button>
					</div>
					<div class="container-login100-form-btn" style="margin-top: 10px;">
						<p>Already have an account? <a href="login.php">Login</a></p>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ca601956bba460528013fe9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>