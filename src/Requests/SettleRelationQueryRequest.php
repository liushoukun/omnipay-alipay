<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\SettleRelationBindResponse;
use Omnipay\Alipay\Responses\SettleRelationQueryResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 *
 *
 * @package Omnipay\Alipay\Requests
 * @link    https://opendocs.alipay.com/open/1860be54_alipay.trade.royalty.relation.batchquery
 */
class SettleRelationQueryRequest extends AbstractAopRequest
{
    protected $method = 'alipay.trade.royalty.relation.batchquery';

    /**
     * Send the request with specified data
     *
     * @param  mixed  $data  The data to send
     *
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $data = parent::sendData($data);

        return $this->response = new SettleRelationQueryResponse($this, $data);
    }

    public function validateParams()
    {
        parent::validateParams();

        $this->validateBizContentOne(
            'out_request_no',
        );
    }
}
