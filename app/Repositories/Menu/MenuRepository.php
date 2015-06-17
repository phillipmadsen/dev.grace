<?php namespace Grace\Repositories\Menu;

use Grace\Models\Menu;
use Config;
use Response;
use Grace\Models\Tag;
use Grace\Models\Category;
use Str;
use Event;
use Image;
use File;
use Grace\Repositories\RepositoryAbstract;
use Grace\Repositories\CrudableInterface as CrudableInterface;
use Grace\Repositories\RepositoryInterface as RepositoryInterface;
use Grace\Exceptions\Validation\ValidationException;
use Grace\Repositories\AbstractValidator as Validator;

/**
 * Class MenuRepository
 * @package Grace\Repositories\Menu
 * @author Phillip Madsen
 */
class MenuRepository extends RepositoryAbstract implements MenuInterface {
 
    /**
     * @var \Menu
     */
    protected $menu;

    /**
     * @param Menu $menu
     */
    public function __construct(Menu $menu) {

        $this->menu = $menu;
    }

    /**
     * @return mixed
     */
    public function all() {

        return $this->menu->where('is_published', 1)->where('lang', $this->getLang())->orderBy('order', 'asc')->get();
    }

    /**
     * @param $menu
     * @param int $parentId
     * @param bool $starter
     * @return null|string
     */
    public function generateFrontMenu($menu, $parentId = 0, $starter = false) {

        $result = null;

        foreach ($menu as $item) {

            if ($item->parent_id == $parentId) {

                $childItem = $this->hasChildItems($item->id);

                $result .= "<li class='menu-item " . (($childItem) ? 'dropdown' : null) . (($childItem && $item->parent_id != 0) ? ' dropdown-submenu' : null) . "' itemprop='additionalType' itemscope itemtype='https://www.schema.org/SiteNavigationElement,https://schema.org/itemListElement'>
                                <a href='" . url($item->url) . "' " . (($childItem) ? 'class="dropdown-toggle" data-toggle="dropdown"' : null) . " itemprop='url'>
                                    <span itemprop='name'>{$item->title}" . (($childItem && $item->parent_id == 0) ? '<b class="caret"></b>' : null) . "</span></a>" . $this->generateFrontMenu($menu, $item->id) . "
                            </li>";
            }
        }

        return $result ? "\n<ul class='" . (($starter) ? ' nav navbar-nav navbar-right ' : null) . ((!$starter) ? ' dropdown-menu ' : null) . "' itemscope itemtype='https://schema.org/WebPageElement,https://schema.org/ItemList'><meta itemprop='name' content='navigation_menu' />\n$result</ul>\n" : null;
    }

    /**
     * @param $items
     * @return null|string
     */
    public function getFrontMenuHTML($items) {

        return $this->generateFrontMenu($items, 0, true);
    }

    /**
     * @param $id
     * @return bool
     */
    public function hasChildItems($id) {

        $count = $this->menu->where('parent_id', $id)->where('is_published', 1)->where('lang', $this->getLang())->get()->count();
        if ($count === 0) return false;
        return true;
    }
}
