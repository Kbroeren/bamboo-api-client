<?php

namespace SteffenBrand\BambooApiClient\Client;

use SteffenBrand\BambooApiClient\Model\Result;

/**
 * Interface BambooClientInterface
 * @package SteffenBrand\BambooApiClient\Client
 */
interface BambooClientInterface
{
    /**
     * BambooClient constructor.
     *
     * @param string $baseUrl
     * @param string $username
     * @param string $password
     * @param float $timeout
     */
    public function __construct(string $baseUrl, string $username, string $password, float $timeout);

    /**
     * Get latest result by key.
     *
     * @param string $key
     * @return Result
     */
    public function getLatestResultByKey(string $key): Result;
}