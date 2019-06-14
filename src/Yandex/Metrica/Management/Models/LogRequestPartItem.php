<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

class LogRequestPartItem extends Model
{
    /**
     * @var integer $partNumber Номер части.
     */
    protected $partNumber = null;

    /**
     * @var integer $size Размер в байтах.
     */
    protected $size = null;

    protected $mappingClasses = [];

    protected $propNameMap = [
        'part_number' => 'partNumber'
    ];

    /**
     * @return integer|null
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @param integer|null $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return$this;
    }

    /**
     * @return integer|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param integer|null $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        return$this;
    }
}
