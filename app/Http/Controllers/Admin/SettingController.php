<?php namespace Grace\Http\Controllers\Admin;

use Grace\Http\Controllers\Controller;
use Redirect;
use View;
use Input;
use Grace\Models\Setting;
use Notification;

/**
 * Class SettingController
 * @package App\Controllers\Admin
 * @author Phillip Madsen
 */
class SettingController extends Controller {

    public function index() {

        $obj = (Setting::where('lang', getLang())->first()) ?: new Setting();

        $jsonData = $obj->settings;
        $setting = json_decode($jsonData, true);

       if($setting === null)
            $setting = array(
                'site_title'       => null,
                'ga_code'          => null,
                'meta_keywords'    => null,
                'meta_description' => null
            );

        return view('backend.setting.setting', compact('setting'))->with('active', 'settings');
    }

    public function save() {

        $setting = (Setting::where('lang', getLang())->first()) ?: new Setting();

        $formData = Input::all();
        unset($formData['_token']);

        $json = json_encode($formData);
        $setting->fill(array('settings' => $json, 'lang' => getLang()))->save();

        Notification::success('Settings was successfully updated');

        return Redirect::route('admin.settings');
    }
}
