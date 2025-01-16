<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\SettleRelationUnbindRequest;

class SettleRelationUnbindResponse extends AbstractAopResponse
{
    protected $key = 'alipay_trade_royalty_relation_unbind_response';

    /**
     * @var SettleRelationUnbindRequest
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
