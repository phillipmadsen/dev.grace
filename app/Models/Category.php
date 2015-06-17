<?php namespace Grace\Models;

use Grace\Interfaces\ModelInterface as ModelInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @author Phillip Madsen
 */
class Category extends Model implements ModelInterface, SluggableInterface {

    use SluggableTrait;

    public $table = 'categories';
    public $timestamps = false;
    protected $fillable = ['title'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    public function articles() {

        return $this->hasMany('Grace\Models\Article');
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "category/" . $this->attributes['slug'];
    }
}
