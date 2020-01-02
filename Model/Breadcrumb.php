<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 27/06/19
 * Time: 17:18
 */

namespace Lch\BreadcrumbBundle\Model;


use Doctrine\Common\Collections\ArrayCollection;

class Breadcrumb
{

    /**
     * @var ArrayCollection[BreadcrumbItem]
     */
    protected $items;

    /**
     * Breadcrumb constructor.
     */
    private function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     *
     * @return Breadcrumb
     */
    public static function createEmpty(): Breadcrumb {

        return new static();
    }

    /**
     * @return ArrayCollection
     */
    public function getItems(): ArrayCollection
    {
        return $this->items;
    }

    /**
     * @param ArrayCollection $items
     *
     * @return Breadcrumb
     */
    public function setItems(ArrayCollection $items): Breadcrumb
    {
        $this->items = $items;

        return $this;
    }

    public function __toString()
    {
        return 'BIM';
    }
}