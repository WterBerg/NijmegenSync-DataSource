<?php

use NijmegenSync\DataSource\Harvesting\HarvestingFrequency;
use PHPUnit\Framework\TestCase;

class HarvestingFrequencyTest extends TestCase
{
    public function testValidHarvestingFrequenciesValidate(): void
    {
        $this->assertTrue(HarvestingFrequency::isValid(HarvestingFrequency::MONTHLY));
        $this->assertTrue(HarvestingFrequency::isValid(HarvestingFrequency::WEEKLY));
        $this->assertTrue(HarvestingFrequency::isValid(HarvestingFrequency::DAILY));
    }

    public function testInvalidHarvestingFrequenciesDoNotValidate(): void
    {
        $this->assertFalse(HarvestingFrequency::isValid('yearly'));
        $this->assertFalse(HarvestingFrequency::isValid('always'));
        $this->assertFalse(HarvestingFrequency::isValid('and'));
        $this->assertFalse(HarvestingFrequency::isValid('forever'));
    }
}
