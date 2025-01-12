<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\AopTransferCommonQueryResponse;
use Omnipay\Alipay\Responses\AopTransferToAccountQueryResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 * Class AopTransferToAccountQueryRequest
 *
 * @package Omnipay\Alipay\Requests
 * @link    https://opendocs.alipay.com/open/58a29899_alipay.fund.trans.common.query
 */
class AopTransferCommonQueryRequest extends AbstractAopRequest
{
    protected $method = 'alipay.fund.trans.common.query';

    /**
     * Send the request with specified data
     *
     * @param mixed $data The data to send
     *
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $data = parent::sendData($data);

        return $this->response = new AopTransferCommonQueryResponse($this, $data);
    }

    public function validateParams()
    {
        parent::validateParams();

        $this->validateBizContentOne(
            'out_biz_no',
            'order_id'
        );
    }
}
