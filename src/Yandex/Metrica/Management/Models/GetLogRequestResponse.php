<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

/**
 * Class GetLogRequestsResponse
 *
 * @package Yandex\Metrica\Management\Models
 */
class GetLogRequestResponse extends Model
{
    /**
     * @var LogRequestItem|null
     */
    protected $logRequest = null;

    protected $mappingClasses = [
        'logRequest' => 'Yandex\Metrica\Management\Models\LogRequestItem'
    ];

    protected $propNameMap = [
        'log_request' => 'logRequest'
    ];

    /**
     * @return LogRequestItem|null
     */
    public function getLogRequest()
    {
        return $this->logRequest;
    }

    /**
     * @param LogRequestItem|null $logRequest
     * @return $this
     */
    public function setLogRequest($logRequest)
    {
        $this->logRequest = $logRequest;
        return $this;
    }

}
