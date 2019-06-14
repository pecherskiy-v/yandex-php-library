<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

/**
 * Class GetLogRequestsResponse
 *
 * @package Yandex\Metrica\Management\Models
 */
class GetLogRequestsEvaluateResponse extends Model
{
    /**
     * Оценка возможности создания запросов логов.
     * @var LogRequestEvaluation|null
     */
    protected $logRequestEvaluation = null;

    protected $mappingClasses = [
        'logRequestEvaluation' => 'Yandex\Metrica\Management\Models\LogRequestEvaluation'
    ];

    protected $propNameMap = [
        'log_request_evaluation' => 'logRequestEvaluation'
    ];

    /**
     * Оценка возможности создания запросов логов.
     * @return logRequestEvaluation|null
     */
    public function getLogRequestEvaluation()
    {
        return $this->logRequestEvaluation;
    }

    /**
     * @param logRequestEvaluation|null $logRequestEvaluation
     * @return $this
     */
    public function setLogRequestEvaluation($logRequestEvaluation)
    {
        $this->logRequestEvaluation = $logRequestEvaluation;
        return $this;
    }
}
