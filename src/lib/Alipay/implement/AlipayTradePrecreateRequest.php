<?php
namespace Qdxinrui\payment\lib\Alipay\implement;
use Qdxinrui\payment\lib\Alipay\AlipayBase;
/**
 * 线下/线上--扫码支付
 * 收银员通过收银台或商户后台调用支付宝接口，生成二维码后，展示给用户，由用户扫描二维码完成订单支付。
 **/
class AlipayTradePrecreateRequest extends AlipayBase
{
    protected $apiMethodName = 'alipay.trade.precreate';
}