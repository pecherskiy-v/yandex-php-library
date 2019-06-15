<?php

namespace Yandex\Metrica\Management;


/**
 * Class LogRequestsClient
 * Logs API позволяет получать неагрегированные данные, собираемые Яндекс.Метрикой.
 * @see https://tech.yandex.ru/metrika/doc/api2/logs/intro-docpage/
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
     * Список запросов логов
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
     * Оценка возможности создания запроса
     *
     * @param integer $id (counter id)
     * @param Models\LogRequestsParams $params
     *
     * @return Models\logRequestEvaluation|null
     */
    public function getCounterLogRequestsEvaluate($id, Models\LogRequestsParams $params)
    {
        $resource = 'counter/' . $id . '/logrequests/evaluate';
        $response = $this->sendGetRequest($resource, $params->toArray());
        $counter = new Models\GetLogRequestsEvaluateResponse($response);
        return $counter->getLogRequestEvaluation();
    }

    /**
     * Информация о запросе логов
     *
     * @param integer $counterId идентификатор счетчика.
     * @param integer $requestId идентификатор запроса логов.
     *
     * @return Models\LogRequestItem|null
     */
    public function getCounterLogRequestsInfo($counterId, $requestId)
    {
        $resource = 'counter/' . $counterId . '/logrequests/' . $requestId;
        $response = $this->sendGetRequest($resource);
        $counter = new Models\GetLogRequestResponse($response);
        return $counter->getLogRequest();
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
