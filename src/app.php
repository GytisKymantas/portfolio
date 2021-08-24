<?php

    

    $vardas=trim($_POST['vardas']);
    $email=trim($_POST['email']);
    $message=trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to ="gytis.kymantas@yahoo.com";
            $subject = "nauja zinute";
            $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com';
            // $autorius = 'nuo: '.$vardas.','.$email;
            // $zinute = htmlspecialchars($message);
            mail($to, $subject, $from, $headers);
            echo "<script>alert('Thank You, we received your message.');</script>" ;       
        }
    }
    include('db.php');