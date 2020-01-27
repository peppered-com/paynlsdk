<?php

declare(strict_types=1);

namespace PayNL\Sdk\AuthAdapter;

/**
 * Interface AdapterInterface
 *
 * @package PayNL\Sdk\Auth
 */
interface AdapterInterface
{
    /**
     * @return string
     */
    public function getUsername(): string;

    /**
     * @param string $username
     *
     * @return static
     */
    public function setUsername(string $username);

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @param string $password
     *
     * @return static
     */
    public function setPassword(string $password);

    /**
     * Returns the string which can be used for an authorization header
     *
     * @return string
     */
    public function getHeaderString(): string;
}
