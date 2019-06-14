<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\ObjectModel;

/**
 * Class LogRequests
 *
 * @package Yandex\Metrica\Management\Models
 */
class LogRequests extends ObjectModel
{
    /**
     * @var LogRequestItem[]|array
     */
    protected $collection = [];

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Add item
     * @param LogRequestItem|array
     * @return $this
     */
    public function add($logRequestItem)
    {
        if (is_array($logRequestItem)) {
            $this->collection[] = new LogRequestItem($logRequestItem);
        } elseif (is_object($logRequestItem) && $logRequestItem instanceof LogRequestItem) {
            $this->collection[] = $logRequestItem;
        }

        return $this;
    }

    /**
     * Get items
     * @return LogRequestItem[]
     */
    public function getAll()
    {
        return $this->collection;
    }
}
