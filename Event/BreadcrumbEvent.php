<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 27/06/19
 * Time: 17:33
 */

namespace Lch\BreadcrumbBundle\Event;


use Lch\BreadcrumbBundle\Model\Breadcrumb;
use Symfony\Component\EventDispatcher\Event;

class BreadcrumbEvent extends Event
{
    public const NAME = 'breadcrumb.generate';

    /**
     * @var Breadcrumb
     */
    protected $breadcrumb;
    /**
     * @var string $route
     */
    protected $route;

    /**
     * @var array
     */
    protected $routeParameters;

    /**
     * @var string $language
     */
    protected $language;

    /**
     * BreadcrumbEvent constructor.
     *
     * @param Breadcrumb $breadcrumb
     * @param string $route
     * @param array|null $routeParameters
     * @param string $language
     */
    public function __construct(Breadcrumb $breadcrumb, string $route, string $language, array $routeParameters = null)
    {
        $this->breadcrumb = $breadcrumb;
        $this->route = $route;
        $this->routeParameters = $routeParameters;
        $this->language = $language;
    }

    /**
     * @return array|null
     */
    public function getRouteParameters(): ?array
    {
        return $this->routeParameters;
    }

    /**
     * @return string
     */
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return Breadcrumb
     */
    public function getBreadcrumb(): Breadcrumb
    {
        return $this->breadcrumb;
    }

    /**
     * @param Breadcrumb $breadcrumb
     *
     * @return BreadcrumbEvent
     */
    public function setBreadcrumb(Breadcrumb $breadcrumb): BreadcrumbEvent
    {
        $this->breadcrumb = $breadcrumb;

        return $this;
    }
}