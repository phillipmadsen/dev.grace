<?php namespace Grace\Exceptions\Validation;

use Exception;

/**
 * Class ValidationException
 * @package Grace\Exceptions\Validation
 * @author Phillip Madsen
 */
class ValidationException extends Exception {

    /**
     * @var int
     */
    protected $errors;

    /**
     * @param string $message
     * @param int $errors
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($message, $errors, $code = 0, Exception $previous = null) {

        $this->errors = $errors;

        parent::__construct($message, $code, $previous);
    }

    /**
     * Get error messages
     * @return int
     */
    public function getErrors() {

        return $this->errors;
    }
}