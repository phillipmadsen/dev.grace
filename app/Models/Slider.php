<?php namespace Grace\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 * @author Phillip Madsen
 */
class Slider extends Model {

    public $table = 'sliders';

    public function images() {

        return $this->morphMany('Grace\Models\Photo', 'relationship', 'type');
    }
}
