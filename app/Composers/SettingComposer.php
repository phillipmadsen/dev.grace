<?php namespace Grace\Composers;

use Grace\Models\Setting;
use Grace\Repositories\Setting\SettingInterface;

/**
 * Class SettingComposer
 * @package Grace\Composers
 * @author Phillip Madsen
 */
class SettingComposer {

    /**
     * @var \Grace\Repositories\Setting\SettingInterface
     */
    protected $setting;

    /**
     * @param SettingInterface $setting
     */
    public function __construct(SettingInterface $setting) {

        $this->setting = $setting;
    }

    /**
     * @param $view
     */
    public function compose($view) {

        $settings = $this->setting->getSettings();
        $view->with('settings', $settings);
    }
}