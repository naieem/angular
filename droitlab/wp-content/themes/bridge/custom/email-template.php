<?php
/**
 * Created by PhpStorm.
 * User: Naieem
 * Date: 6/19/2016
 * Time: 4:32 PM
 */
ob_start();
?>

<html>
    <head>

        <title>Droitlab</title>

    </head>
    <body>
        <div id="email_container" style="background:#444">
            <div style="width:570px; padding:0 0 0 20px; margin:50px auto 12px auto" id="email_header">
                <span style="background:#585858; color:#fff; padding:12px;font-family:trebuchet ms; letter-spacing:1px;
                      -moz-border-radius-topleft:5px; -webkit-border-top-left-radius:5px;
                      border-top-left-radius:5px;moz-border-radius-topright:5px; -webkit-border-top-right-radius:5px;
                      border-top-right-radius:5px;">
                    Droitlab.com
            </div>
        </div>


        <div style="width:550px; padding:0 20px 20px 20px; background:#fff; margin:0 auto; border:3px #000 solid;
             moz-border-radius:5px; -webkit-border-radius:5px; border-radius:5px; color:#454545;line-height:1.5em; " id="email_content">

            <h1 style="padding:5px 0 0 0; font-family:georgia;font-weight:500;font-size:24px;color:#000;border-bottom:1px solid #bbb">
                Download Freebie File
            </h1>

            <p>
                Hello,<br>
                It is really nice that you subscribed to our website. Thanks!<br>
                Here is the download link of the product:<br>
                <a href="<?php echo $file_path; ?>" style="font-size: 30px;font-weight: bold;">Click</a>
            </p>

            <p style="">
                Warm regards,<br>
                The Droitlab Team
            </p>

            <div style="text-align:center; border-top:1px solid #eee;padding:5px 0 0 0;" id="email_footer">
                <small style="font-size:11px; color:#999; line-height:14px;">
                    You have received this email because you are a member of droitlab.com.
                    If you would like to stop receiving emails from us, feel free to
                    <a href="#" style="color:#666">unregister</a> from our mailing list
                </small>
            </div>

        </div>
    </div>
</body>
</html>