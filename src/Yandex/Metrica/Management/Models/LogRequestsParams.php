<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

class LogRequestsParams extends Model
{
    protected $callback = null;

    /**
     * @var string|null $date1 Первый день.
     * @example 2019-06-07
     */
    protected $date1 = null;

    /**
     * @var string|null $date2 Последний день (не может быть текущим днем).
     * @example 2019-06-07
     */
    protected $date2 = null;

    /**
     * @see https://tech.yandex.ru/metrika/doc/api2/logs/fields/hits-docpage/
     * @see https://tech.yandex.ru/metrika/doc/api2/logs/fields/visits-docpage/
     *
     * @var string|null $field Список полей через запятую.
     * @example "ym:pv:dateTime, ym:pv:referer"
     */
    protected $field = null;


    /**
     * @var string|null $source Источник логов.
     * @example hits — просмотры.
     * @example visits — визиты.
     */
    protected $source = null;

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Retrieve the callback property
     *
     * @return string|null
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set the callback property
     *
     * @param string $callback
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
        return $this;
    }

    /**
     * Retrieve the date1 property
     *
     * @return string|null
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set the date1 property
     *
     * @param string $date1
     * @return $this
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Retrieve the date2 property
     *
     * @return string|null
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set the date1 property
     *
     * @param string $date2
     * @return $this
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Retrieve the field property
     *
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set the field property
     *
     * @param string $field
     * @return $this
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Retrieve the source property
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set the source property
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

}
