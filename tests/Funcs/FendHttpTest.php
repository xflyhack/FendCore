<?php

declare(strict_types=1);

use Fend\Funcs\FendHttp;
use \PHPUnit\Framework\TestCase;

class FendHttpTest extends TestCase
{
    public function testHttpRequest()
    {
        $url = "http://www.baidu.com/";

        $result = FendHttp::httpRequest($url, "wd=cc", "GET", 8000000,["test: 1"], ["option"=>[CURLOPT_HEADER => true]]);
        var_dump($result);
        self::assertNotEmpty($result);

        //$url = "http://www.baidu.com/s?q=1";
        //$result = FendHttp::httpRequest($url, ["wd" => "dd"], "post", 10000,["test" => 1]);
        //self::assertNotEmpty($result);

    }
}