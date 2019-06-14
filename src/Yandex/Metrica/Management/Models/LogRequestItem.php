<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

class LogRequestItem extends Model
{

    protected $requestId = null;

    protected $counterId = null;

//    protected $source = null;

    protected $date1 = null;

    protected $date2 = null;

//    protected $fields = null;

//    protected $status = null;

    protected $size = null;

//    protected $parts = null;

    protected $mappingClasses = [
//        'parts' => 'Yandex\Metrica\Management\Models\LogRequestParts',
    ];

    protected $propNameMap = [
        'request_id' => 'requestId',
        'counter_id' => 'counterId'
    ];

    /**
     * @return integer|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param integer $requestId
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return integer|null
     */
    public function getCounterId()
    {
        return $this->counterId;
    }

    /**
     * @param integer $counterId
     * @return $this
     */
    public function setCounterId($counterId)
    {
        $this->counterId = $counterId;
        return $this;
    }



    /**
     * @return string|null
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * @param string $date1
     * @return $this
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * @param string $date2
     * @return $this
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;
        return $this;
    }



    /**
     * @return integer|null
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param integer $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
}
