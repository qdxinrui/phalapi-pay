<?php
namespace Qdxinrui\payment\lib\Alipay\implement;
use Qdxinrui\payment\lib\Alipay\AlipayBase;
/**
 * 交易退款
 * 统一收单交易退款接口
 **/
class AlipayTradeRefundRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.refund';
}