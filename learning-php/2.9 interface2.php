<?php
//1.Design a Notification System with the following features:An interface Notifier that enforces all notification types to implement the sendNotification($message, $recipient) method.Concrete
interface Notifier {
    public function sendNotification(string $message, string $recipient);
}

class EmailNotifier implements Notifier {
    public function sendNotification(string $message, string $recipient) {
        echo "Sending Email to $recipient: $message\n"."<br>";
    }
}

class SMSNotifier implements Notifier {
    public function sendNotification(string $message, string $recipient) {
        echo "Sending SMS to $recipient: $message\n"."<br>";
    }
}

class PushNotifier implements Notifier {
    public function sendNotification(string $message, string $recipient) {
        echo "Sending Push Notification to $recipient: $message\n"."<br>";
    }
}

// Example Usage
function notifyUser(Notifier $notifier, string $message, string $recipient) {
    $notifier->sendNotification($message, $recipient);
}

$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

notifyUser($emailNotifier, "Welcome!", "shanto@gmail.com");
notifyUser($smsNotifier, "Your OTP is 123456", "123-456-7890");
notifyUser($pushNotifier, "You have a new message!", "user123");
?>