<?php namespace Grace\Repositories\Slider;

use Grace\Models\Slider;
use Grace\Repositories\RepositoryAbstract;
use Grace\Repositories\AbstractValidator as Validator;

/**
 * Class SliderRepository
 * @package Grace\Repositories\Slider
 * @author Phillip Madsen
 */
class SliderRepository extends Validator implements SliderInterface {

    /**
     * @var \Slider
     */
    protected $slider;

    /**
     * @param Slider $slider
     */
    public function __construct(Slider $slider) {

        $this->slider = $slider;
    }

    /**
     * @return mixed
     */
    public function all() {

        return $this->slider->where('lang', getLang())->orderBy('created_at', 'DESC')->get();
    }
}
