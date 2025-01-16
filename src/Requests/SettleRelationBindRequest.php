<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\SettleRelationBindResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 *
 *
 * @package Omnipay\Alipay\Requests
 * @link    https://opendocs.alipay.com/open/c21931d6_alipay.trade.royalty.relation.bind?pathHash=08a24dae&ref=api&scene=common
 */
class SettleRelationBindRequest extends AbstractAopRequest
{
    protected $method = 'alipay.trade.royalty.relation.bind';

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

        return $this->response = new SettleRelationBindResponse($this, $data);
    }

    public function validateParams()
    {
        parent::validateParams();

        $this->validateBizContentOne(
            'out_request_no',
            'receiver_list'
        );
    }
}
