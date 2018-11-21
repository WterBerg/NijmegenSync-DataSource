<?php

namespace NijmegenSync\Test\DataSource\Harvesting;

use NijmegenSync\DataSource\Harvesting\HarvestResult;
use PHPUnit\Framework\TestCase;

class HarvestResultTest extends TestCase
{
    public function testDefaultStateAreEmptyArrays(): void
    {
        $harvestResult = new HarvestResult();

        $this->assertEquals([], $harvestResult->getNotices());
        $this->assertEquals([], $harvestResult->getResult());
    }

    public function testAddingAndSettingNotices(): void
    {
        $harvestResult = new HarvestResult();
        $harvestResult->addNotice('test');

        $this->assertEquals(['test'], $harvestResult->getNotices());

        $harvestResult->setNotices(['another', 'test']);

        $this->assertEquals(['another', 'test'], $harvestResult->getNotices());
    }

    public function testSettingResults(): void
    {
        $harvestResult = new HarvestResult();
        $harvestResult->setResult(['title' => 'MyHarvestResult']);

        $this->assertEquals(['title' => 'MyHarvestResult'], $harvestResult->getResult());
    }
}
