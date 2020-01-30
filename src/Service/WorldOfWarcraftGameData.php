<?php

namespace BlizzardApi\Service;

use Psr\Http\Message\ResponseInterface;

/**
 * Class World Of Warcraft Community APIs
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class WorldOfWarcraftGameData extends Service
{
    /**
     * {@inheritdoc}
     */
    protected $serviceParam = '/data/wow';

    /**
     * Get item classes index information
     *
     * Returns data about an the item classes index.
     *
     * @param array $options       Options
     *
     * @return ResponseInterface
     */
    public function getItemClassesIndex(array $options = [])
    {
        return $this->request('/item-class/index', $options);
    }

    /**
     * Get item information by ID
     *
     * Returns data about an individual item class.
     *
     * @param int $itemClassId The ID of the item class to retrieve.
     * @param array $options       Options
     *
     * @return ResponseInterface
     */
    public function getItemClass($itemClassId, array $options = [])
    {
        return $this->request('/item-class/'.(int) $itemClassId, $options);
    }

    /**
     * Get item information by ID
     *
     * Returns data about an individual item sub class.
     *
     * @param int $itemClassId The ID of the item class to retrieve.
     * @param int $itemSubClassId The ID of the item sub class to retrieve.
     * @param array $options       Options
     *
     * @return ResponseInterface
     */
    public function getItemSubClass($itemClassId, $itemSubClassId, array $options = [])
    {
        return $this->request('/item-class/'.(int) $itemClassId .'/item-subclass/'.(int) $itemSubClassId, $options);
    }

    /**
     * Get item information by ID
     *
     * Returns data about an individual item.
     *
     * @param int   $itemId The ID of the Item to retrieve.
     * @param array $options       Options
     *
     * @return ResponseInterface
     */
    public function getItem($itemId, array $options = [])
    {
        return $this->request('/item/'.(int) $itemId, $options);
    }

    /**
     * Get item information by ID
     *
     * Returns data about an individual item media.
     *
     * @param int   $itemId The ID of the Item to retrieve.
     * @param array $options       Options
     *
     * @return ResponseInterface
     */
    public function getItemMedia($itemId, array $options = [])
    {
        return $this->request('/media/item/'.(int) $itemId, $options);
    }

}