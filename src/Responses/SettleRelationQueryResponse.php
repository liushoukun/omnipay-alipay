<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\SettleRelationQueryRequest;

class SettleRelationQueryResponse extends AbstractAopResponse
{
    protected $key = 'alipay_trade_royalty_relation_batchquery_response';

    /**
     * @var SettleRelationQueryRequest
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
