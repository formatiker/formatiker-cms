<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('/PHPMailer/PHPMailer.php');
require_once('/PHPMailer/SMTP.php');
require_once('/PHPMailer/Exception.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $company = htmlspecialchars($_POST['company'] ?? '');
    $message = htmlspecialchars($_POST['msg'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        echo "Fehlende Pflichtfelder<br>";
        http_response_code(400);
        echo json_encode(['error' => 'Name, E-Mail und Nachricht sind erforderlich.']);
        exit;
    }

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@formatiker.com';
        $mail->Password = 'uxcdvhjfboqruawq';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';

        $mail->setFrom('info@formatiker.com', 'Formatiker Kontaktformular');
        $mail->addAddress('info@formatiker.com');
        $mail->addReplyTo($email, $name);
        $mail->isHTML(false);
        $mail->Subject = "Neue Nachricht von $name";
        $mail->Body = "Name: $name\nE-Mail: $email\nTelefon: $phone\nFirma: $company\nNachricht:\n$message";
        $mail->send();
        echo "✔️ E-Mail erfolgreich gesendet!";
    } catch (PHPMailer\PHPMailer\Exception $e) {
        http_response_code(500);
        echo "❌ Fehler: " . $mail->ErrorInfo;
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Nur POST-Anfragen sind erlaubt.']);
}
?>
