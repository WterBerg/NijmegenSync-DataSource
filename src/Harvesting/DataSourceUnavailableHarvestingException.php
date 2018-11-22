<?php

namespace NijmegenSync\DataSource\Harvesting;

/**
 * Class DataSourceUnavailableHarvestingException.
 *
 * Indicates the given data source could not be reached via the methods defined in the
 * IDataSourceHarvester.
 *
 * Will contain the original exception thrown which resulted in the endpoint being unavailable.
 */
class DataSourceUnavailableHarvestingException extends HarvestingException
{
}
