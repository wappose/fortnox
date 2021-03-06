<?php

/**
 * @Author: Phu Hoang
 * @Date:   2016-01-11 16:17:27
 * @Last Modified by:   Phu Hoang
 * @Last Modified time: 2016-01-12 09:35:06
 */

namespace hmphu\fortnox;

/**
 * Class FortnoxConfig
 * @package hmphu\fortnox
 */
class FortnoxConfig
{
    
    /**
     * @var string
     */
    public $accessToken;
    
    /**
     * @var string
     */
    public $clientId;

     /**
     * @var string
     */
    public $clientSecret;
    
    /**
     * @var string
     */
    public $useSandbox = true;
    
    function __construct($accessToken, $clientId, $clientSecret, $useSandbox = true) {
        $this->accessToken = $accessToken;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->useSandbox = $useSandbox;
    }

    public function getParameterArray(){
    	return [];
    }
}
