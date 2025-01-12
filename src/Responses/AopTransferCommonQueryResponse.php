<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\AopTransferToAccountQueryRequest;

class AopTransferCommonQueryResponse extends AbstractAopResponse
{
    protected $key = 'alipay_fund_trans_common_query_response';

    /**
     * @var AopTransferToAccountQueryRequest
     */
    protected $request;
}
