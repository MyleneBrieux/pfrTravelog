<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

include_once("../presentation/fonctionsContact.php");
// include '../libs/phpmailer/Exception.php';
// include '../libs/phpmailer/PHPMailer.php';
// include '../libs/phpmailer/SMTP.php';

    $errorMsg ="";
    $emailMSG = "";

    if(isset ($_POST['submit']) ){
        $message = $_POST['message'];
        $email = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $subject = "message Travelog provenant de " .$pseudo;

        if(strlen($message) <10){
            $errorMsg = "Votre message est trop court.";
        }

        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $errorMsg = "Votre adresse mail n'est pas conforme.";
        }

        if(strlen($pseudo) <2){
            $errorMsg = "Veuillez saisir votre Pseudonyme.";
        }
    
        echo($errorMsg);

        $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer="smtp";
            $mail->SMTPDebug=0;  
            $mail->SMTPAuth=TRUE;
            $mail->SMTPSecure="tls";
            $mail->Port=587;
            $mail->Host="smtp.gmail.com";
            $mail->Username="andhromede@gmail.com";
            $mail->Password="Fm8APqpp";
            $mail->AddAddress("andhromede@gmail.com", "recipient-name");
            $mail->SetFrom($email, "from-name");
            $mail->AddReplyTo($email, "reply-to-name");
            $mail->Subject=$subject;
            $content=$message;
            $mail->MsgHTML($content); 


        if(!$mail->send()) {
            echo ("Une erreur s'est produite, votre message n'a pas pu être envoyé");
            var_dump($mail);
            } 

        else {
            echo 'Le message a bien été envoyé !';
            header('Location: ../../libs/templates/contact.php');
            }



          
        // if($errorMsg == ''){
        //     $subject ="Message envoyé par".$pseudo;
        //     $emailAdmin = "n.gibilaro@andhromede.planethoster.world";
        //     $subject = "message du site provenant de " .$pseudo;
        //     $headers = array ('from' => $email, 'Reply-To' => $email);
        //     // mail($emailAdmin, $subject, $message, $headers);
        //     mail( $emailAdmin , $subject , $message , $headers);
        //     $emailMSG= "Votre message à bien été envoyé !";
        // }

    }

    contact_enteteHtml();
    contact_corpsPage();
    contact_basDePage();








    












?>













