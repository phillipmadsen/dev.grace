<?php namespace Grace\Models;

use Grace\Interfaces\ModelInterface as ModelInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @author Phillip Madsen
 */
class Project extends Model implements ModelInterface, SluggableInterface {

    use SluggableTrait;

    public $table = 'projects';
    protected $fillable = array('title', 'description');

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "project/" . $this->attributes['slug'];
    }
}
