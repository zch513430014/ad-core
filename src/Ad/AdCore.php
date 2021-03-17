<?php


abstract class AdCore
{
    protected $options;
    protected $config;
    protected $mock = false;
    protected $accountId = '';
    protected $secret = '';

    protected $appId = '';
    protected $refreshToken = '';

    protected function __construct()
    {
        $this->setConfig();
        $this->setStore();
        $this->setMock();
    }

    public function setConfig()
    {

    }

    public function setStore()
    {

    }

    public function setMock()
    {

    }
}