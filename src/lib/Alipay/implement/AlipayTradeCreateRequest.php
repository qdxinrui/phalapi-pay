<?php
namespace Qdxinrui\payment\lib\Alipay\implement;
use Qdxinrui\payment\lib\Alipay\AlipayBase;
/**
 * 商户通过该接口进行交易的创建订单对象---需要买家支付宝号（手机号或唯一支付宝号）
 **/
class AlipayTradeCreateRequest extends AlipayBase
{
    protected $apiMethodName ='alipay.trade.create';
}