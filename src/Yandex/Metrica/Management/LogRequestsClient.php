<?php

namespace Yandex\Metrica\Management;


/**
 * Class LogRequestsClient
 *
 * @category Yandex
 * @package Metrica
 *
 * @author   Valeriy Pecherskiy <pecherskiy.v@yandex.ru>
 * @created  14.06.19
 */
class LogRequestsClient extends ManagementClient
{
    /**
     * Get counter Log Requests list
     *
     * @param int $id (counter id)
     * @return Models\LogRequests
     */
    public function getCounterLogRequests($id)
    {
        $resource = 'counter/' . $id . '/logrequests';
        $response = $this->sendGetRequest($resource);
        $counter = new Models\GetLogRequestsResponse($response);
        return $counter->getRequests();
    }

    /**
     * download counter Log Requests
     *
     * @param int $id
     * @param Models\LogRequestsParams $params
     * @return Models\Counter
     */
//    public function downloadCounterLogRequests($id, Models\LogRequestsParams $params)
//    {
//        $resource = 'counter/' . $id . '/logrequest/' . 3791887 . '/part/' . 0 . '/download';
//        $response = $this->sendGetRequest($resource, $params->toArray());
//        return $response;
//        //        $counter = new Models\GetCounterResponse($response);
//        //        return $counter->getCounter();
//    }

}
