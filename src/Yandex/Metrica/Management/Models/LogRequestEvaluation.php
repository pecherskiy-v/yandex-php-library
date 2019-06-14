<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

/**
 * Class logRequestEvaluation
 *
 * @package Yandex\Metrica\Management\Models
 * @see https://tech.yandex.ru/metrika/doc/api2/logs/queries/evaluate-docpage/
 */
class LogRequestEvaluation extends Model
{
    /**
     * @var boolean|null $possible Возможность создания запроса логов за указанный период.
     */
    protected $possible = null;
    /**
     * @var integer|null $maxPossibleDayQuantity Максимальное количество дней периода,
     * который можно указать в запросах логов, с учетом текущей квоты.
     */
    protected $maxPossibleDayQuantity = null;

    protected $mappingClasses = [];

    protected $propNameMap = [
        'max_possible_day_quantity' => 'maxPossibleDayQuantity'
    ];

    /**
     * @return bool|null
     */
    public function getPossible()
    {
        return $this->possible;
    }

    /**
     * @param bool|null $possible
     * @return $this
     */
    public function setPossible($possible)
    {
        $this->possible = $possible;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxPossibleDayQuantity()
    {
        return $this->maxPossibleDayQuantity;
    }

    /**
     * @param int|null $maxPossibleDayQuantity
     * @return $this
     */
    public function setMaxPossibleDayQuantity($maxPossibleDayQuantity)
    {
        $this->maxPossibleDayQuantity = $maxPossibleDayQuantity;
        return $this;
    }

}
