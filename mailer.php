<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$lang = $_POST['lang'];

$en_messages = array(
        'allFields' => "Please complete all fields.",
        'invalidEmail' => "Invalid email address.<br />",
        'invalidFirstName' => "Invalid first name.<br />",
        'invalidLastName' => "Invalid last name.<br />",
        'shortMessage' => "Message is too short.<br />",
        'wrongAnswer' => "Wrong answer for human test sum.<br />",
        'messageSent' => "Message sent.<br />",
        'notSent' => "Message could not be sent.<br />"
    );

$cy_messages = array(
        'allFields' => "Llenwch bob un o'r meysydd.",
        'invalidEmail' => "Cyfeiriad e-bost annilys.<br />",
        'invalidFirstName' => "Enw cyntaf annilys.<br />",
        'invalidLastName' => "Enw olaf annilys.<br />",
        'shortMessage' => "Neges rhy fyr.<br />",
        'wrongAnswer' => "Ateb anghywir i'r sym prawf dynol.<br />",
        'messageSent' => "Neges wedi'i gyrru.<br />",
        'notSent' => "Nid oedd yn bossib anfon y neges.<br />"
    );

$ga_messages = array(
        'allFields' => "Líon gach réimse le do thoil",
        'invalidEmail' => "Seoladh r-phost neamhbhalaí.<br />",
        'invalidFirstName' => "Ainm neamhbhalaí.<br />",
        'invalidLastName' => "Sloinne neamhbhalaí.<br />",
        'shortMessage' => "Teachtaireacht ró-ghearr.<br />",
        'wrongAnswer' => "Freagra mícheart don suim teist daonna.<br />",
        'messageSent' => "Teachtaireacht seolta.<br />",
        'notSent' => "Ní raibh an teachtaireacht seolta.<br />"
    );

$messages = ${$lang . '_messages'};

// Only process POST reqeusts.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form fields and remove whitespace.
    $first_name = strip_tags(trim($_POST['first-name']));
	$first_name = str_replace(array('\r','\n'),array(' ',' '),$first_name);

    $last_name = strip_tags(trim($_POST['last-name']));
    $last_name = str_replace(array('\r','\n'),array(' ',' '),$last_name);

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST['message']);
    $human = $_POST['human'];

    // Check that data was sent to the mailer.
    if (empty($first_name) OR empty($last_name) OR empty($message) OR empty($email) OR empty($human)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo $messages['allFields'];
        exit;
    }


    //CHECKING DATA INDIVIDUALLY
    $error_message = '';

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $error_message .= $messages['invalidEmail'];
    }

    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp, $first_name))
    {
        $error_message .= $messages['invalidFirstName'];
    }

    if(!preg_match($string_exp, $last_name))
    {
        $error_message .= $messages['invalidLastName'];
    }

    if(strlen($message) < 2) {
        $error_message .= $messages['shortMessage'];
    }
    
    if($human != 5)
    {
        $error_message .= $messages['wrongAnswer'];
    }


    if(strlen($error_message) > 0)
    {
        http_response_code(400);
        echo $error_message;
        exit;
    }

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // 0 = production - no messages
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail3.gridhost.co.uk';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'contact@geiriadurgwyddeleg.com';                 // SMTP username
        $mail->Password = 'm4d4rchen';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('contact@geiriadurgwyddeleg.com', 'Mailer');
        $mail->addAddress('joejohnmitch@gmail.com');               // Name is optional
        $mail->addReplyTo($email);

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Message from geiriadurgwyddeleg.com";
        $email_content = "Name: $first_name $last_name<br />";
        $email_content .= "Email: $email<br />";
        $email_content .= "Message:<br />$message<br />";
        $mail->Body    = $email_content;

        $mail->send();
        http_response_code(200);
        echo $messages['messageSent'];
    } catch (Exception $e) {
        http_response_code(500);
        echo $messages['notSent']; //' Mailer Error: ', $mail->ErrorInfo;
    }

    } else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    }

?>