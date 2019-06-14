<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\ObjectModel;

class LogRequestsParts extends ObjectModel
{
    /**
     * @var LogRequestItem[]
     */
    protected $collection = [];

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Add item
     * @param array|LogRequestPartItem
     * @return $this
     */
    public function add($logRequestPartItem)
    {
        if (is_array($logRequestPartItem)) {
            $this->collection[] = new LogRequestPartItem($logRequestPartItem);
        } elseif (is_object($logRequestPartItem) && $logRequestPartItem instanceof LogRequestPartItem) {
            $this->collection[] = $logRequestPartItem;
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
