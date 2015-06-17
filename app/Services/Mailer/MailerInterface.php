<?php namespace Grace\Services;

/**
 * Class MailInterface
 * @package Grace\Services
 * @author Phillip Madsen
 */
interface MailInterface {

    public function send($view, $email, $subject, $data = array());
    public function queue($view, $email, $subject, $data = array());
}

