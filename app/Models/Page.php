<?php namespace Grace\Models;

use Grace\Interfaces\ModelInterface as ModelInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

/**
 * Class Page
 * @author Phillip Madsen
 */
class Page extends BaseModel implements ModelInterface, SluggableInterface {

    use SluggableTrait;

    public $table = 'pages';
    protected $fillable = ['title', 'content', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "page/" . $this->attributes['slug'];
    }
}
