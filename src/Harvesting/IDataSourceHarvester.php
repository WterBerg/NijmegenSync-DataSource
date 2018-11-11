<?php

namespace NijmegenSync\DataSource\Harvesting;

use NijmegenSync\Contracts\IConfigurableAuthentication;

/**
 * Interface IDataSourceHarvester.
 *
 * Defines the contract which all DataSourceHarvesters must conform to.
 */
interface IDataSourceHarvester extends IConfigurableAuthentication
{
    /**
     * Harvests the DataSource and returns the harvest as a HarvestResults.
     *
     * @throws HarvestingException Thrown when any error occurs while harvesting the DataSource
     *
     * @return HarvestResult[] The data and/or notices of the harvesting process
     */
    public function harvest(): array;
}
