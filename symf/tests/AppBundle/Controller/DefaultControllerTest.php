<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    /**
     * @dataProvider urlProvider
     */
    public function testMultiply($url, $parameters = array())
    {
        $client = self::createClient();
        $client->request('POST', $url, $parameters);
        $this->assertEquals('{"result":24}', $client->getResponse()->getContent());
    }
    
    /**
     * @dataProvider urlErrorProvider
     */
    public function testMultiplyError($url, $parameters = array())
    {
        $client = self::createClient();
        $client->request('POST', $url, $parameters);
        $this->assertContains('error', $client->getResponse()->getContent());
    }
    
    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('POST', $url);
        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function urlProvider()
    {
        return array(
            array('/api/multiplication', array('numbera' => 6, 'numberb' => 4)),
        );
    }
    
    public function urlErrorProvider()
    {
        return array(
            array('/api/multiplication', array('numbera' => 'derp', 'numberb' => 4)),
            array('/api/multiplication', array('numbera' => 11, 'numberb' => 'derp')),
            array('/api/multiplication'),
        );
    }
}
