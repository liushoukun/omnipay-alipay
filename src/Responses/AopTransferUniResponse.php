<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\AopTransferToAccountRequest;

class AopTransferUniResponse extends AbstractAopResponse
{
    protected $key = 'alipay_fund_trans_uni_transfer_response';

    /**
     * @var AopTransferToAccountRequest
     */
    protected $request;
}
