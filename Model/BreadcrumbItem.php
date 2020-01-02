<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 27/06/19
 * Time: 17:18
 */

namespace Lch\BreadcrumbBundle\Model;


class BreadcrumbItem
{
    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string $route
     */
    protected $route;

    /**
     * @var array $routeParams
     */
    protected $routeParams;

    /**
     * @var bool $current true if breadcrumb item points to current route
     */
    protected $current = false;

    /**
     * BreadcrumbItem constructor.
     */
    private function __construct()
    {

    }

    public static function create(string $title, string $route = null, array $routeParams = []): BreadcrumbItem {

        // TODO add checks

        $breadcrumbItem =  new static();
        $breadcrumbItem->title = $title;
        $breadcrumbItem->route = $route;
        $breadcrumbItem->routeParams = $routeParams;

        return $breadcrumbItem;

    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * @return array
     */
    public function getRouteParams(): array
    {
        return $this->routeParams;
    }

    /**
     * @return bool
     */
    public function isCurrent(): bool
    {
        return $this->current;
    }

    /**
     * @param bool $current
     *
     * @return BreadcrumbItem
     */
    public function setCurrent(bool $current): BreadcrumbItem
    {
        $this->current = $current;

        return $this;
    }
}