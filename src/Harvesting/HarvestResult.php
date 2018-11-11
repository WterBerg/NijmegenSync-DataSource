<?php

namespace NijmegenSync\DataSource\Harvesting;

/**
 * Class HarvestResult.
 *
 * Represents a single entity harvested from the DataSource.
 */
class HarvestResult
{
    /** @var string[] */
    protected $notices;

    /** @var array */
    protected $result;

    /**
     * HarvestResult constructor.
     */
    public function __construct()
    {
        $this->notices = [];
        $this->result  = [];
    }

    /**
     * Getter for the notices property.
     *
     * @return string[] The notices property
     */
    public function getNotices(): array
    {
        return $this->notices;
    }

    /**
     * Getter for the result property.
     *
     * @return array The result property
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * Adds a new notice to the notices property.
     *
     * @param string $notice The value to add
     */
    public function addNotice(string $notice): void
    {
        $this->notices[] = $notice;
    }

    /**
     * Setter for the notices property.
     *
     * @param string[] $notices The value to set
     */
    public function setNotices(array $notices): void
    {
        $this->notices = $notices;
    }

    /**
     * Setter for the result property.
     *
     * @param array $result The value to set
     */
    public function setResult(array $result): void
    {
        $this->result = $result;
    }
}
