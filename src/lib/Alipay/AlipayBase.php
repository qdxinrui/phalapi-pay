<?php
namespace Qdxinrui\payment\lib\Alipay;
/**
 * Created by PhpStorm.
 * User: qiu han
 * Date: 2016/11/25
 * Time: 5:05
 */
abstract class AlipayBase
{
    /** @var  string 回调地址 */
    protected $notifyUrl;
    /** @var  string 请求参数集合 */
    protected $bizContent;
    /** @var  string 接口名称 */
    protected $apiMethodName;
    /** @var  string 终端类型 */
    protected $terminalType;
    /** @var  string 终端信息 */
    protected $terminalInfo;
    /** @var  string 产品代码 */
    protected $prodCode;
    /** @var  string 网页支付回跳地址 */
    protected $returnUrl;
    protected $apiParas     = array();
    protected $apiVersion   = "1.0";
    protected $needEncrypt  = false;
    
    public function getApiMethodName()
    {
        return $this->apiMethodName;
    }
    
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl=$notifyUrl;
    }
    
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }
    
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl=$returnUrl;
    }
    
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }
    
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParas["biz_content"] = $bizContent;
    }
    
    public function getBizContent()
    {
        return $this->bizContent;
    }
    
    public function getTerminalType()
    {
        return $this->terminalType;
    }
    
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }
    
    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }
    
    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }
    
    public function getProdCode()
    {
        return $this->prodCode;
    }
    
    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }
    
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion=$apiVersion;
    }
    
    public function getApiVersion()
    {
        return $this->apiVersion;
    }
    
    public function setNeedEncrypt($needEncrypt)
    {
        $this->needEncrypt=$needEncrypt;
    }
    
    public function getNeedEncrypt()
    {
        return $this->needEncrypt;
    }
    
    public function getApiParas()
    {
        return $this->apiParas;
    }
}