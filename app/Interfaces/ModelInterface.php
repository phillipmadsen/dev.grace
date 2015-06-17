<?php namespace Grace\Interfaces;

/**
 * Class ModelInterface
 * @package Grace\Interfaces
 * @author Phillip Madsen
 */
interface ModelInterface {

    /**
     * @param $value
     * @return mixed
     */
    public function setUrlAttribute($value);

    /**
     * @return mixed
     */
    public function getUrlAttribute();
}