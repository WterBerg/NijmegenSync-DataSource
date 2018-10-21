<?php

namespace NijmegenSync\Synchronization\DataSource\Harvesting;


/**
 * Interface IDataSourceHarvester
 *
 * Defines the contract which all DataSourceHarvesters must conform to.
 *
 * @package NijmegenSync\Synchronization\DataSource\Harvesting
 */
interface IDataSourceHarvester {

    /**
     * Harvests the DataSource and returns the harvest as a HarvestResults.
     *
     * @return HarvestResult[] The data and/or notices of the harvesting process
     * @throws HarvestingException Thrown when any error occurs while harvesting the DataSource
     */
    public function harvest(): array;

}
