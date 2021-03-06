<?php
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;

class MailHelper
{

    public static function send($message)
    {
        $subject = '[auto] Facebook Campaign Status - '. date("Y-m-d (w) H:i");
        self::_send($subject, $message);
    }

    /* --------------------------------------------------------------------------------
        private
    -------------------------------------------------------------------------------- */

    private static function _send($subject, $body)
    {
        $mail = new Message;
        $mail
            ->setFrom('System <system@localhost.com>')
            ->setSubject($subject)
            ->setBody($body);

        foreach (conf('emails.users') as $email) {
            $mail->addTo($email);
        }

        $mailer = new SendmailMailer;
        $mailer->send($mail);
    }

}

