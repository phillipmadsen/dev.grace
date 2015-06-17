<?php namespace Grace\Repositories\Slider;

use Grace\Repositories\Slider\SliderInterface;

/**
 * Class AbstractSliderDecorator
 * @package Grace\Repositories\Slider
 * @author Phillip Madsen
 */
abstract class AbstractSliderDecorator implements SliderInterface {

    /**
     * @var SliderInterface
     */
    protected $slider;

    /**
     * @param SliderInterface $slider
     */
    public function __construct(SliderInterface $slider) {

        $this->slider = $slider;
    }

    /**
     * @return mixed
     */
    public function all() {

        return $this->slider->all();
    }
}