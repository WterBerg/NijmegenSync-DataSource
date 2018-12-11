<?php

namespace NijmegenSync\DataSource\Harvesting;

/**
 * Class HarvestingFrequency.
 *
 * Represents how often a given DataSource should be harvested.
 */
class HarvestingFrequency
{
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
     *
     * @return bool True or false depending on if the frequency is defined
     */
    public static function isValid(string $frequency): bool
    {
        return in_array($frequency, [self::DAILY, self::WEEKLY, self::MONTHLY]);
    }

    /**
     * Returns all the eligible harvesting frequencies data source modules can have that are
     * eligible for harvesting based on the requested harvesting frequency.
     *
     * Basically, any harvesting frequency which has a higher frequency than the given frequency and
     * the given frequency will be eligible. This means that a when a weekly frequency is given, a
     * daily frequency is also allowed. When monthly is provided, weekly and daily are also
     * eligible.
     *
     * @param string $frequency The input frequency to check with
     *
     * @return string[] The eligible harvesting frequencies
     */
    public static function determineEligibleHarvestingFrequencies(string $frequency): array
    {
        if (self::MONTHLY === $frequency) {
            return [
                self::MONTHLY,
                self::WEEKLY,
                self::DAILY,
            ];
        }

        if (self::WEEKLY === $frequency) {
            return [
                self::WEEKLY,
                self::DAILY,
            ];
        }

        return [self::DAILY];
    }
}
