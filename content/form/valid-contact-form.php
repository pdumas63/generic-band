<?php
if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['message'])) {
    echo 'error:empty';
}
else {
    $name= htmlspecialchars( stripslashes( nl2br( $_POST['name'] ) ) );
    $email= htmlspecialchars( stripslashes( nl2br( $_POST['email'] ) ) );
    $message= htmlspecialchars( stripslashes( nl2br( $_POST['message'] ) ) );
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to      = 'pascal-dumas@niwee.fr';
        $subject = $name . ' vous a envoyé un message';		
        $headers = array(
            'From' => $email,
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);
        echo 'success';

    } else {
        echo 'error:email';
    }		
}
?>