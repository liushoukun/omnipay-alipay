<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\SettleRelationBindRequest;

class SettleRelationBindResponse extends AbstractAopResponse
{
    protected $key = 'alipay_trade_royalty_relation_bind_response';

    /**
     * @var SettleRelationBindRequest
     */
    protected $request;

    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return $this->getAlipayResponse('result_code') === 'SUCCESS';
    }

}
