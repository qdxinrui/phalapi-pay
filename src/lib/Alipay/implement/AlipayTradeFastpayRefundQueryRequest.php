<?php
namespace Qdxinrui\payment\lib\Alipay\implement;
use Qdxinrui\payment\lib\Alipay\AlipayBase;
/**
 * 查询退款对象
 **/
class AlipayTradeFastpayRefundQueryRequest extends AlipayBase
{
    protected $apiMethodName ='alipay.trade.fastpay.refund.query';
}