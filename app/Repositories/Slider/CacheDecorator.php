<?php namespace Grace\Repositories\Slider;

use Grace\Services\Cache\CacheInterface;
use Grace\Repositories\Slider\AbstractSliderDecorator;

/**
 * Class CacheDecorator
 * @package Grace\Repositories\Slider
 * @author Phillip Madsen
 */
class CacheDecorator extends AbstractSliderDecorator {

    /**
     * @var \Grace\Services\Cache\CacheInterface
     */
    protected $cache;

    /**
     * Cache key
     * @var string
     */
    protected $cacheKey = "slider";

    /**
     * @param SliderInterface $slider
     * @param CacheInterface $cache
     */
    public function __construct(SliderInterface $slider, CacheInterface $cache) {

        parent::__construct($slider);
        $this->cache = $cache;
    }

    /**
     * @return mixed
     */
    public function all() {

        $key = md5(getLang() . $this->cacheKey . 'all.sliders');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $sliders = $this->slider->all();

        $this->cache->put($key, $sliders);

        return $sliders;
    }
}