<?php
namespace Qdxinrui\payment;
class Lite
{
    /**
     * 支付驱动实例
     * @var Object
     */
    private $payer;

    /**
     * 配置参数
     * @var type
     */
    private $config;

    /**
     * 获取引擎
     * @var string
     */
    private $engine;

    /**
     * 获取错误
     * @var string
     */
    public $error = '';
    public function __call($method, $arguments) {
        if (method_exists($this, $method)) {
            return call_user_func_array(array(&$this, $method), $arguments);
        } elseif (!empty($this->payer) && $this->payer && method_exists($this->payer, $method)) {
            return call_user_func_array(array(&$this->payer, $method), $arguments);
        }
    }

    /**
     * 设置配置信息
     * @param string $engine 要使用的支付引擎
     * @return bool 是否成功
     */
    public function set($engine) {
        /* 配置 */
        $this->engine = strtolower($engine);
        $this->config = array();
        //获取配置
        $config = \PhalApi\DI()->config->get('app.Pay.' . $this->engine);

        if(!$config){
            \PhalApi\DI()->logger->log('payError','No engine config', $this->engine);
             return false;
        }
        //合并配置
        $this->config = array_merge($this->config, $config);
        //设置引擎
        $engine = 'Qdxinrui\\payment\\lib\\' .ucfirst(strtolower($this->engine)) . 'Payment';
        $this->payer = new $engine($this->config);
        if (!$this->payer) {
            \PhalApi\DI()->logger->log('payError','No engine class', $engine);
            return false;
        }
        return true;
    }
}