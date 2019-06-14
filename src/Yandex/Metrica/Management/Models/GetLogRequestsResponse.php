<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Common\Model;

/**
 * Class GetLogRequestsResponse
 *
 * @package Yandex\Metrica\Management\Models
 */
class GetLogRequestsResponse extends Model
{
    /**
     * @var LogRequests|null
     */
    protected $requests = null;

    protected $mappingClasses = [
        'requests' => 'Yandex\Metrica\Management\Models\LogRequests'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the requests property
     *
     * @return LogRequests|null
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Set the requests property
     *
     * @param LogRequests $requests
     * @return $this
     */
    public function setRequests($requests)
    {
        $this->requests = $requests;
        return $this;
    }
}
