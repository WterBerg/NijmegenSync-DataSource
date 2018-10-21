<?php

namespace NijmegenSync\Synchronization\DataSource\Harvesting;


/**
 * Class HarvestingFrequency
 *
 * Represents how often a given DataSource should be harvested.
 *
 * @package NijmegenSync\Synchronization\DataSource\Harvesting
 */
class HarvestingFrequency {

    /**
     * @var string Indicates that a given DataSource should be harvested on a daily basis
     */
    const DAILY = 'daily';

    /**
     * @var string Indicates that a given DataSource should be harvested on a weekly basis
     */
    const WEEKLY = 'weekly';

    /**
     * @var string Indicates that a given DataSource should be harvested on a monthly basis
     */
    const MONTHLY = 'monthly';

    /**
     * Checks if a given frequency matches any of the defined HarvestingFrequencies.
     *
     * @param string $frequency The frequency to check
     * @return bool True or false depending on if the frequency is defined
     */
    public static function isValid(string $frequency): bool
    {
        return in_array($frequency, [self::DAILY, self::WEEKLY, self::MONTHLY]);
    }

    /**
     * HarvestingFrequency constructor.
     */
    private function __construct() {}

}
