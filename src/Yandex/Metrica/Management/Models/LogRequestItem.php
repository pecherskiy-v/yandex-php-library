<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

/**
 * Class LogRequestItem
 *
 * @package Yandex\Metrica\Management\Models
 * @see https://tech.yandex.ru/metrika/doc/api2/logs/queries/class_logrequest-docpage/#class_logrequest
 */
class LogRequestItem extends Model
{
    /**
     * @var integer|null $requestId Идентификатор запроса логов.
     */
    protected $requestId = null;
    /**
     * @var integer|null $counterId Идентификатор счётчика.
     */
    protected $counterId = null;
    /**
     * @var string|null $source Источник логов.
     * @example hits — просмотры.
     * @example visits — визиты.
     */
    protected $source = null;
    /**
     * @var string|null $date1 Первый день.
     */
    protected $date1 = null;

    /**
     * @var string|null $date2 Последний день (не может быть текущим днем).
     */
    protected $date2 = null;
    /**
     * @see https://tech.yandex.ru/metrika/doc/api2/logs/fields/hits-docpage/
     * @see https://tech.yandex.ru/metrika/doc/api2/logs/fields/visits-docpage/
     *
     * @var string[]|null $field Список полей.
     */
    protected $fields = null;
    /**
     * @var string|null $status Статус запроса.
     * @example processed — обработан.
     * @example canceled — отменён.
     * @example processing_failed — ошибка при обработке.
     * @example created — создан.
     * @example cleaned_by_user — очищен пользователем.
     * @example cleaned_automatically_as_too_old — очищен автоматически.
     */
    protected $status = null;
    /**
     * @var integer|null $size Размер логов запроса в байтах.
     */
    protected $size = null;
    /**
     * @var LogRequestsParts[]|null
     */
    protected $parts = null;

    protected $mappingClasses = [
        'parts' => 'Yandex\Metrica\Management\Models\LogRequestsParts',
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
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param null $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
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
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array|null $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return LogRequestsParts[]|null
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * @param LogRequestsParts|null $parts
     * @return $this
     */
    public function setParts($parts)
    {
        $this->parts = $parts;
        return $this;
    }
}
