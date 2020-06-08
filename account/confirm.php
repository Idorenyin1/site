<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Confirm Deposit | Crypto303options </title>
    <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon'>
    <link rel='icon' href='images/favicon.png' type='image/x-icon'>

    <link rel='stylesheet' type='text/css' href='fonts/icomoon/style.css'>
    <link rel='stylesheet' type='text/css' href='fonts/stylesheet.css'>
    <link rel='stylesheet' type='text/css' href='css/jquery-ui.css'>
    <link rel='stylesheet' type='text/css' href='css/ion.rangeSlider.css'>
    <link rel='stylesheet' type='text/css' href='css/ion.rangeSlider.skinSimple.css'>
    <link rel='stylesheet' type='text/css' href='css/owl.carousel.css'>
    <link rel='stylesheet' type='text/css' href='css/selectric.css'>
    <link rel='stylesheet' type='text/css' href='build/css/style.css'> 
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>  

    <script type='text/javascript' src='js/jquery-3.3.1.js'></script>
    <script type='text/javascript' src='js/jquery-ui.js'></script>
    <script type='text/javascript' src='js/clipboard.js'></script>
    <script type='text/javascript' src='js/detect.js'></script>
    <script type='text/javascript' src='js/ion.rangeSlider.js'></script>
    <script type='text/javascript' src='js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='js/jquery.selectric.js'></script>
    <script type='text/javascript' src='js/snap.svg-min.js'></script>
    <script type='text/javascript' src='js/walkway.min.js'></script>
    <script type='text/javascript' src='js/animation.js'></script>
    <script type='text/javascript' src='js/script.js'></script>
    <script type='text/javascript' src='js/bootstrap.js'></script>
</head>
    <body>
    <div class="bodyWrap">
        <div class="wrapper">
            <div class="leftSide">
                <ul class="cabNav">
                    <li class="active invisLink">
                        <span class="icon-menu1"></span>
                        <span>john2020</span>
                        <a href="index.php">john2020</a>
                    </li>
                    <li class="invisLink">
                        <span class="icon-menu2"></span>
                        <span>Make Deposit</span>
                        <a href="deposit.php">Make Deposit</a>
                    </li>
                    <li class="invisLink">
                        <span class="icon-menu3"></span>
                        <span>Make Withdrawal</span>
                        <a href="withdrawal.php">Make Withdrawal</a>
                    </li>
                    <li class="invisLink">
                        <span class="icon-menu4"></span>
                        <span>View Profile</span>
                        <a href="profile.php">View Profile</a>
                    </li>
                    <li class="invisLink">
                        <span class="icon-menu5"></span>
                        <span>Account Status</span>
                        <a href="status.php">Account Status</a>
                    </li>
                    <li class="invisLink">
                        <span class="icon-menu6"></span>
                        <span>logout</span>
                        <a href="logout.php">logout</a>
                    </li>
                </ul>
                <p class="copyright">2008 - 2020 &copy; Crypto303options LTD</p>
            </div>
            <div class="rightSide">
                <div class="cabHead">
                    <div class="wrap cfix">
                        <div class="logoWrap">
                            <div class="logo invisLink">
                                <div class="txt">
                                    <span>Crypto303options.com</span>
                                    <span></span>
                                </div>
                                <a href="#">main</a>
                            </div>
                        </div>
                        
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="deposit.php">Make Deposit</a></li>
                            <li><a href="plan.php">Plans</a></li>
                            <li><a href="withdrawal.php">Make Withdraw</a></li>
                            <li><a href="trade.php" target="_blank">Trade</a></li>
                            <li><a href="profile.php" >View Profile</a></li>
                            <li><a href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="accInfo">
                    <div class="wrap cfix">
                        <div class="userInfo">
                            <div class="userpic" style="background-image: url(img/user.png)">
                                <label for="userpic"></label>
                            </div>
                            <ul>
                                <li>
                                    <span>Username:</span>
                                    <a href="#">john2020</a>
                                </li>
                                <li>
                                    <span>Online Now:</span>
                                    <b>Saturday, May 9, 2020</b>
                                </li>
                                <li>
                                    <span>Account Status:</span>
                                    <b>Active</b>
                                </li>
                            </ul>
                            <div class="back"></div>
                            <span class="shadow"></span>
                        </div>
                        <div class="operBtns">
                            <div class="back"></div>
                            <a href="#" class="btnColor3LgLeftIcon dep">Deposit <span class="icon-left iconBack"></span></a>
                            <div class="userBal">
                                <div class="cabTitle">
                                    <div class="iconLeft">
                                        <span class="icon-coins"></span>
                                        <div class="data" id="balance">
                                            <span class="title">your balance:</span>
                                            <span class="num">$0.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btnColor2LgRightIcon with">withdraw <span class="icon-right iconBack"></span></a>
                            <span class="shadow"></span>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="balInfo">
                            <ul class="rates" id="infodata">
                                    <li>
                                        <div class="iconLeftMd table full">
                                            <div class="icon tCell left middle">
                                                <span class="icon-pay18 icon-cur18 payIcon iconBack">
                                                    <span class="shadow"></span>
                                                </span>
                                            </div>
                                            <div class="data tCell left middle">
                                                
                                                <div class="item">
                                                    <span class="title">Balance: </span>
                                                    <span class="num">$0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconLeftMd table full">
                                            <div class="icon tCell left middle">
                                                <span class="icon-pay43 icon-cur43 payIcon iconBack">
                                                    <span class="shadow"></span>
                                                </span>
                                            </div>
                                            <div class="data tCell left middle">
                                                
                                                <div class="item">
                                                    <span class="title">Balance: </span>
                                                    <span class="num">$0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconLeftMd table full">
                                            <div class="icon tCell left middle">
                                                <span class="icon-pay48 icon-cur48 payIcon iconBack">
                                                    <span class="shadow"></span>
                                                </span>
                                            </div>
                                            <div class="data tCell left middle">
                                                
                                                <div class="item">
                                                    <span class="title">Balance: </span>
                                                    <span class="num">$0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconLeftMd table full">
                                            <div class="icon tCell left middle">
                                                <span class="icon-pay68 icon-cur68 payIcon iconBack">
                                                    <span class="shadow"></span>
                                                </span>
                                            </div>
                                            <div class="data tCell left middle">
                                                
                                                <div class="item">
                                                    <span class="title">Balance: </span>
                                                    <span class="num">$0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconLeftMd table full">
                                            <div class="icon tCell left middle">
                                                <span class="icon-pay69 icon-cur69 payIcon iconBack">
                                                    <span class="shadow"></span>
                                                </span>
                                            </div>
                                            <div class="data tCell left middle">
                                                
                                                <div class="item">
                                                    <span class="title">Balance: </span>
                                                    <span class="num">$0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                  </ul>
                        </div>
                    </div>
                </div>


<div class="cabContent designed_table">
    <span class="secCap">Deposit Confirmation</span>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>Deposit Summary</h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Selected Plan:</th>
                    <td>Basic                    </td>
                </tr>
                <tr>
                    <th>Amount:</th>
                    <td>$2000</td>
                </tr>
                <tr>
                    <th>Payment Method:</th>
                    <td>Bitcoin</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>Waiting for payment</td>
                </tr>
            </thead>
        </table>
    </div>
    
    <br>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#bitcoin"> Deposit Now</button>
    <br><br>

    <div class="modal fade" id="bitcoin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
              aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Bitcoin Deposit</h4>
                </div>
                <div class="modal-body">
                    <p>Please send exactly the bitcoin equivalent of your selected plan to the bitcoin address below:</p> <br>
                    <p>3Q4ZVYSrWyXpwW91fUqPHpy3xwdPq5bQPf</p> <br>
                    <p>Once we confirm your payment, your account will be funded instantly.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="paypal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
              aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Bitcoin Deposit</h4>
                </div>
                <div class="modal-body">
                    <p>If you wish to fund your trading account via this method, please contact our Live Chat support to receive the appropriate payment details.</p> <br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="westernunion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
              aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Bitcoin Deposit</h4>
                </div>
                <div class="modal-body">
                    <p>If you wish to fund your trading account via this method, please contact our Live Chat support to receive the appropriate payment details.</p> <br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="moneygram" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
              aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Bitcoin Deposit</h4>
                </div>
                <div class="modal-body">
                    <p>If you wish to fund your trading account via this method, please contact our Live Chat support to receive the appropriate payment details.</p> <br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
      
          <div id="divWidgetAreaConversion" style="min-width:280px !important; height:220px !important;"><script>var typeChart='conversion';
var w_baseCurrency = new Array(); var w_targetCurrency = new Array(); w_baseCurrency[0]="BTC"; w_targetCurrency[0]="USD"; var widgetStyle={};
widgetStyle["bgColor"]="#FFFFFF";
widgetStyle["backgroundColor"]="#FFFFFF";
widgetStyle["bgTransparent"]="solid";
widgetStyle["fontSize"]="16px";
widgetStyle["fontFamily"]="arial";
widgetStyle["fontColor"]="#000000";
widgetStyle["borderWidth"]="1";
widgetStyle["borderColor"]="#CCCCCC";
widgetStyle["cornerStyle"]="round";
widgetStyle["lastUpdateTime"]="block";
widgetStyle["chartStyle"]="none";
</script><meta charset="UTF"><script src="https://bitcoinaverage.com/vendor/jquery/dist/jquery.min.js"></script><script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script><script src="https://bitcoinaverage.com/js/widgetGenerator/widgetUserScript.js"></script></div>

        <iframe width="1" height="1" frameborder="0" id="deposit_result_div" src="./confirm_files/544_9de7503d2fb2033670c6a86c41df15a7.html"></iframe>
    </div>
    
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