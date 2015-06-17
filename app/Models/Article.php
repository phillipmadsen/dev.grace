<?php namespace Grace\Models;

use Grace\Interfaces\ModelInterface as ModelInterface;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

/**
 * Class Article
 * @author Phillip Madsen
 */
class Article extends BaseModel implements ModelInterface, SluggableInterface {

    use SluggableTrait;

    public $table = 'articles';
    protected $fillable = ['title', 'content', 'meta_keywords', 'meta_description', 'is_published'];
    protected $appends = ['url'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    public function tags() {

        return $this->belongsToMany('Grace\Models\Tag', 'articles_tags');
    }

    public function category() {

        return $this->hasMany('Grace\Models\Category', 'id', 'category_id');
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "article/" . $this->attributes['slug'];
    }
}
