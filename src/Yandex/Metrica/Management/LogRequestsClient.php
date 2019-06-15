<?php

namespace Yandex\Metrica\Management;


use Yandex\Common\Exception\ForbiddenException;
use Yandex\Common\Exception\TooManyRequestsException;
use Yandex\Common\Exception\UnauthorizedException;
use Yandex\Metrica\Exception\BadRequestException;
use Yandex\Metrica\Exception\MetricaException;

/**
 * Class LogRequestsClient
 * Logs API позволяет получать неагрегированные данные, собираемые Яндекс.Метрикой.
 *
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
        $resource = 'counter/' . $counterId . '/logrequest/' . $requestId;
        $response = $this->sendGetRequest($resource);
        $counter = new Models\GetLogRequestResponse($response);
        return $counter->getLogRequest();
    }

    /**
     * Загрузка части подготовленных логов обработанного запроса
     *
     * @param integer $counterId идентификатор счетчика.
     * @param integer $requestId идентификатор запроса логов.
     * @param integer $partNumber номер части подготовленных логов обработанного запроса.
     *
     * @return array[]
     *
     * @throws BadRequestException
     * @throws ForbiddenException
     * @throws MetricaException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     */
    public function downloadCounterLogRequestsPart($counterId, $requestId, $partNumber)
    {
        $resource = 'counter/' . $counterId . '/logrequest/' . $requestId . '/part/' . $partNumber . '/download';
        $response = $this->sendRequest(
            'GET',
            $this->getServiceUrl($resource),
            [
                'headers' => [
                    'Accept' => 'application/x-yametrika+json',
                    'Content-Type' => 'application/x-yametrika+json',
                    'Authorization' => 'OAuth ' . $this->getAccessToken(),
                ]
            ]
        );
        $respArray = explode("\n", $response->getBody()->getContents());
        $func = function($string) {
            return explode("\t", $string);
        };
        return array_map($func, $respArray);
    }

}
