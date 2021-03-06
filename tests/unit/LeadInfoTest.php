<?php

class LeadInfoTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testGet()
    {
        $result = $this->tester->getApi()->leadInfo()->get(1);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('items', $result);
        $this->assertArrayHasKey('count', $result);
        $this->assertArrayHasKey('offset', $result);
    }

    protected function _before()
    {
    }

    // tests

    protected function _after()
    {
    }
}