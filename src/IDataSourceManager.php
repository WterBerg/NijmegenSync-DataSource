<?php

namespace NijmegenSync\DataSource;

use NijmegenSync\Contracts\INijmegenSyncModule;
use NijmegenSync\DataSource\Harvesting\IDataSourceHarvester;


/**
 * Interface IDataSourceManager
 *
 * Entryway of a DataSource, it exposes all the functionality and references required so that the
 * NijmegenSync application can harvest the resource which this DataSource represents.
 *
 * @package NijmegenSync\DataSource
 */
interface IDataSourceManager extends INijmegenSyncModule {

    /**
     * Getter method for the name of the DataSource.
     *
     * @return string The name of the DataSource
     */
    public function getName(): string;

    /**
     * Getter method for the harvesting frequency of this DataSource.
     *
     * @return string The harvesting frequency of this DataSource
     */
    public function getHarvestingFrequency(): string;

    /**
     * Getter method for the actual DataSourceHarvester implementation which will harvest the
     * DataSource.
     *
     * @return IDataSourceHarvester The implementation which will harvest the DataSource
     */
    public function getHarvester(): IDataSourceHarvester;

    /**
     * Getter method for the absolute path to the ValueMapping file.
     *
     * @return string The absolute path to the ValueMapping file
     */
    public function getValueMappingFilePath(): string;

    /**
     * Getter method for the absolute path to the BlacklistMapping file.
     *
     * @return string The absolute path to the BlacklistMapping file
     */
    public function getBlacklistMappingFilePath(): string;

    /**
     * Getter method for the absolute path to the WhitelistMapping file.
     *
     * @return string The absolute path to the WhitelistMapping file
     */
    public function getWhitelistMappingFilePath(): string;

}
