<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\ObjectModel;

class LogRequests extends ObjectModel
{

    protected $collection = [];

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Add item
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
     */
    public function getAll()
    {
        return $this->collection;
    }
}
