<?php

namespace NijmegenSync\DataSource;

use NijmegenSync\Contracts\INijmegenSyncModule;
use NijmegenSync\Dataset\Builder\IDatasetBuildRule;
use NijmegenSync\Dataset\Builder\IDistributionBuildRule;
use NijmegenSync\DataSource\Harvesting\IDataSourceHarvester;

/**
 * Interface IDataSourceManager.
 *
 * Entryway of a DataSource, it exposes all the functionality and references required so that the
 * NijmegenSync application can harvest the resource which this DataSource represents.
 */
interface IDataSourceManager extends INijmegenSyncModule
{
    /**
     * Getter method for the name of the DataSource.
     *
     * @return string The name of the DataSource
     */
    public function getName(): string;

    /**
     * Getter method for the web address of this DataSource.
     *
     * @return string The web address of this DataSource
     */
    public function getWebAddress(): string;

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
     * Getter method for the absolute path for the defaults file.
     *
     * @return string The absolute path to the defaults file
     */
    public function getDefaultsFilePath(): string;

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

    /**
     * Retrieves the defined build rules which are to be used instead of the standard build steps
     * for a given property. The returned array of IDatasetBuildRules should have keys indicating
     * for which property the given IDatasetBuildRule should be used.
     *
     * The keys should match the keys used in the harvested data array returned by the
     * `IDataSourceHarvester`.
     *
     * There exist several "special" keys for:
     * - "_before", A build rule with this key is executed *BEFORE* all other build steps
     * - "_after" A build rule with this key is executed *AFTER* all other build steps have
     * finished
     *
     * @return IDatasetBuildRule[] The build rules to use for the creation of a dataset from this
     *                             data source
     */
    public function getCustomDatasetBuildRules(): array;

    /**
     * Retrieves the defined build rules which are to be used instead of the standard build steps
     * for a given property of a distribution. The returned array of IDistributionBuildRules should
     * have keys indicating for which property the given IDistributionBuildRule should be used.
     *
     * The keys should match the keys used in the harvested data array returned by the
     * `IDataSourceHarvester` under the key 'resources'.
     *
     * There exist several "special" keys for:
     * - "_before", A build rule with this key is executed *BEFORE* all other build steps
     * - "_after" A build rule with this key is executed *AFTER* all other build steps have
     * finished
     *
     * @return IDistributionBuildRule[] The build rules to use for the creation of distributions
     *                                  from this data source
     */
    public function getCustomDistributionBuildRules(): array;
}
