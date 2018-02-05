<?php
    $current_domain = $_SERVER['HTTP_HOST'];

    if($current_domain != 'gadget-bd.com' AND $current_domain != 'localhost'){

        if($current_domain != 'localhost'){

            $message = "<html>
                <head>
                    <title>Try to copy BD-Supershop Theme</title>
                </head>
                <body>
                    <b>Client Name: Choton Mondol</b><br>
                    <b>Email: chotonmb@gmail.com </b><br>
                    <b>Phone No: 01811-129855, 01511-129855</b><br>
                    <b>Main Domain Name : gedget-bd</b><br>
                    <b>Try to Domain Name: $current_domain </b><br>
                </body>
            </html>";

            $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

            mail('abdullah.ssc13@gmail.com','Try to copy BD-Supershop Theme',$message,$headers);
        }
        die;
    }
?>