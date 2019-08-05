<?php

require_once __DIR__ .'/../vendor/autoload.php';
include_once __DIR__.'/../pageobjects/googlepageobjects.php';
include_once __DIR__.'/../driverutil/DriverUtil.php';

use PHPUnit\Framework\TestCase;


class TC_001 extends TestCase
{
    protected $webDriver;
    //public $url = 'http://www.google.com';
    protected $google_PageObjects;
    

    public function setUp()
    {
        global $argv;
        $this->webDriver = DriverUtil::getDriver($argv[0]);
		$this->webDriver->manage()->window()->maximize();
		$this->google_PageObjects = new google_PageObjects($this->webDriver);
		

        
    }

    public function testDemo()
    {
        
		$this->google_PageObjects->Login('damco soft pvt limited');
		sleep(5);
        
    }
	

}

