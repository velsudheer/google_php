<?php
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverKeys;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

class google_PageObjects {

    public $url = 'https://www.google.co.in/';
    public $driver;
   

    public function __construct(RemoteWebDriver $driver)
    {
          $this->driver = $driver;
          $this->marmon =WebDriverBy::Xpath('//input[@name="q"]');
          
          
          
    }

    public function Login($Marmon){
        $this->driver->get($this->url);
        sleep(3);
        $this->driver->findElement($this->marmon)->sendKeys($Marmon);
        
        return $this->driver;
    }
    

}