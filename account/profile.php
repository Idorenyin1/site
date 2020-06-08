
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard | Crypto303options </title>
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

    <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=cxhMqa3fD8Ls4IxAsPoBXH8MrFgwBCRQPnBT64Adht2JZTXknTERT1GbxDJA3e7gxCyFsKO05ucX_bWQ0anALEuUQvh0KOiSj4PsZjy65YI" charset="UTF-8"></script><script type='text/javascript' src='js/jquery-3.3.1.js'></script>
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
                        <span>username</span>
                        <a href="index.php"></a>
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
                <p class="copyright">2008 - 2020 &copy; Crypto303options  LTD</p>
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
                                <input type="file" name="userpic" id="userpic">
                                <label for="userpic"></label>
                            </div>
                            <ul>
                                <li>
                                    <span>Username:</span>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <span>Online Now:</span>
                                    <b></b>
                                </li>
                                <li>
                                    <span>Account Status:</span>
                                    <b></b>
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


<div class="cabContent">
    <span class="secCap">Profile</span>
    <div class="userAcc">
        <div class="grid">
            <div class="item col6">
                <div class="contentItem">
                    <div class="in">
                        <div class="cabTitle">
                            <div class="iconLeft">
                                <span class="icon-userpic"></span>
                                <div class="data">
                                    <span class="title"></span>
                                    <span>My Profile</span>
                                </div>
                            </div>
                        </div>
                        <ul class="cabTbl1 table full in">
                            <li class="tRow">
                                <span class="param tCell middle">Firstname:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                            <li class="tRow">
                                <span class="param tCell middle">Lastname:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                            <li class="tRow">
                                <span class="param tCell middle">Gender:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                            <li class="tRow">
                                <span class="param tCell middle">Email:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                            <li class="tRow">
                                <span class="param tCell middle">Country:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                            <li class="tRow">
                                <span class="param tCell middle">Phone:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item col6">
                <div class="contentItem">
                    <div class="in">
                        <div class="cabTitle">
                            <div class="iconLeft">
                                <span class="icon-sum"></span>
                                <div class="data">
                                    <span class="title"></span>
                                    <span>My Wallet</span>
                                </div>
                            </div>
                        </div>
                        <ul class="cabTbl1 table full out">
                            <li class="tRow">
                                <span class="param tCell middle">BTC Wallet Address:</span>
                                <span class="tCell data middle right"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
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