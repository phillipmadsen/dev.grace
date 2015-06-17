<?php namespace Grace\Repositories\Menu;

use Grace\Services\Cache\CacheInterface;
use Grace\Repositories\Menu\AbstractMenuDecorator;

/**
 * Class CacheDecorator
 * @package Grace\Repositories\Menu
 * @author Phillip Madsen
 */
class CacheDecorator extends AbstractMenuDecorator {

    /**
     * @var \Grace\Services\Cache\CacheInterface
     */
    protected $cache;

    /**
     * Cache key
     * @var string
     */
    protected $cacheKey = "menu";

    /**
     * @param MenuInterface $menu
     * @param CacheInterface $cache
     */
    public function __construct(MenuInterface $menu, CacheInterface $cache) {

        parent::__construct($menu);
        $this->cache = $cache;
    }

    /**
     * @return mixed
     */
    public function all() {

        $key = md5(getLang() . $this->cacheKey. 'all.menus');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $menus = $this->menu->all();

        $this->cache->put($key, $menus);

        return $menus;
    }

    /**
     * @param $menu
     * @param int $parentId
     * @param bool $starter
     * @return mixed|null|string
     */
    public function generateFrontMenu($menu, $parentId = 0, $starter = false) {

        $key = md5(getLang() . $this->cacheKey . $parentId . '.menu.html');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $result = null;

        foreach ($menu as $item) {

            if ($item->parent_id == $parentId) {

                $childItem = $this->hasChildItems($item->id);
 
                $result .= "<li class='menu-item " . (($childItem) ? 'dropdown' : null) . (($childItem && $item->parent_id != 0) ? ' dropdown-submenu' : null) . "' itemscope itemtype='https://www.schema.org/SiteNavigationElement,https://schema.org/itemListElement'>
                                <a href='" . url($item->url) . "' " . (($childItem) ? 'class="dropdown-toggle" data-toggle="dropdown"' : null) . " itemprop='url'>
                                   <span itemprop='name'>{$item->title}" . (($childItem && $item->parent_id == 0) ? '<b class="caret"></b>' : null) . "</span></a>" . $this->generateFrontMenu($menu, $item->id) . "
                            </li>";
            }
        }

        $returnData = $result ? "\n<ul class='" . (($starter) ? ' nav navbar-nav navbar-right ' : null) . ((!$starter) ? ' dropdown-menu ' : null) . "' itemscope itemtype='https://schema.org/WebPageElement,https://schema.org/ItemList'><meta itemprop='name' content='navigation_menu' />\n$result</ul>\n" : null;

        $this->cache->put($key, $returnData);

        return $returnData;
    }

    /**
     * @param $items
     * @return mixed|null|string
     */
    public function getFrontMenuHTML($items) {

        $menus = $this->generateFrontMenu($items, 0, true);

        return $menus;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function hasChildItems($id) {

        $key = md5(getLang() . $this->cacheKey . $id . '.has.child');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $result = $this->menu->hasChildItems($id);
        $this->cache->put($key, $result);
        return $result;
    }
}