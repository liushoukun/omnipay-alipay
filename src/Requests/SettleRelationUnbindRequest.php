<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\SettleRelationUnbindResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 *
 *
 * @package Omnipay\Alipay\Requests
 * @link    https://opendocs.alipay.com/open/3613f4e1_alipay.trade.royalty.relation.unbind
 */
class SettleRelationUnbindRequest extends AbstractAopRequest
{
    protected $method = 'alipay.trade.royalty.relation.unbind';

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

        return $this->response = new SettleRelationUnbindResponse($this, $data);
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
