<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['send'])){
        $name = $_POST['formName'];
        $email = $_POST['formEmail'];
        $message = $_POST['formMessage'];

        require_once "./PHPMailer-6.3.0/src/PHPMailer.php";
        require_once "./PHPMailer-6.3.0/src/SMTP.php";
        require_once "./PHPMailer-6.3.0/src/Exception.php";

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->Username = "yourEmailHere@gmail.com"; //enter your email.
        $mail->Password = "PassWordHere"; //enter your password.
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("recipentEmailHere@gmail.com"); // Recipent Email.
        $mail->Subject = ("soubject");
        $mail->Body = $message;

        if($mail->send()){
            $status = "success";
            $response = "Email Sent!";
        }
        else{
            $status = "failed";
            $response = "error!!". $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response")));

    }



?>