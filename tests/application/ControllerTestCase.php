<?php

require_once 'Zend/Test/PHPUnit/ControllerTestCase.php';

abstract class ControllerTestCase extends Zend_Test_PHPUnit_ControllerTestCase
{
    protected $application;
    
     public function setUp()
    {     
        $this->bootstrap = array($this, 'appBootstrap');
        parent::setUp();
        $this->getFrontController()->setParam('noErrorHandler', true);
    }
    
    public function appBootstrap()
    {
         $this->application = new Zend_Application(APPLICATION_ENV,APPLICATION_PATH . '/configs/application.ini');
         $this->application->bootstrap();
    }    
}