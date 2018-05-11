<?php

require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['text']) && isset($_POST['to'])){
    $str= $_POST['text'];
    $str1=$_POST['to'];
    echo html_entity_decode($str);
}
//var_dump('Gavejas' . $str1);
//var_dump('laiskas' . $str);

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
                    
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'postmaster@sandbox0a904993afaa4f918d292b0f1bff8cc0.mailgun.org';                 // SMTP username
    $mail->Password = '6dcc8b4969cea97ffffc1689b322e21e-97923b2d-9bc2c5fd';                           // SMTP password    
    $mail->Port = 587;                                    // TCP port to connect to
    //is kur laiskas
    $mail->setFrom('meskus@gmail.com');
    //Kam laiskas
    $mail->addAddress($str1);
    //$mail->addAddress('vyksta@icoud.com', 'tija.ra@icloud.com', 'tikrisciunaite@gmail.com'); // Add a recipient
    //explode (',', $mail);
    //$mail->addCC('tija.ra@icloud.com');
    //Kam atsakyti
    $mail->addReplyTo('noreply@noreply.re', 'No reply');
    //Content    
    $mail->isHtml(true);
    $mail->Subject = 'Oooo! Veikia!';
    $mail->Body    = $str;
    //send mail
    $mail->send();
    echo 'Balandziai nunese laiska...';
} catch (Exception $e) {
    echo 'Nenuskrido balandziai <img draggable="false" class="emoji" alt="):" src="https://s.w.org/images/core/emoji/2.4/svg/1f641.svg"> Mailer Error: ', $mail->ErrorInfo;
}

?>

<?php
    if(isset($_POST['send'])):
        $data = array();
        $data['to'] = $_POST['to'];
        $data['text'] = $_POST['text'];
        storePost($data);
    endif;    
?>
<?php
function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "tijosbaze";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
function storePost($data){
    var_dump($data);
    $sql = "INSERT INTO mail (receiver, email) VALUES (:receiver, :email)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'receiver' => $data['to'],
        'email' => $data['text']
    ]);
}
?>