<?php namespace Grace\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * @author Phillip Madsen
 */
class Setting extends Model {

    public $table = 'settings';
    public $fillable = ['settings', 'lang'];
}
