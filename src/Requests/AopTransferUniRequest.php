<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\AopTransferUniResponse;
use Omnipay\Common\Message\ResponseInterface;

/**
 * Class AopTransferToAccountRequest
 *
 * @package Omnipay\Alipay\Requests
 * @link    https://opendocs.alipay.com/open/62987723_alipay.fund.trans.uni.transfer
 */
class AopTransferUniRequest extends AbstractAopRequest
{
    protected $method = 'alipay.fund.trans.uni.transfer';


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

        return $this->response = new AopTransferUniResponse($this, $data);
    }


    public function validateParams()
    {
        parent::validateParams();

        $this->validateBizContent(
            'out_biz_no',
            'trans_amount',
            'biz_scene',
            'product_code',
            'order_title',
            'payee_info',
        );
    }
}
