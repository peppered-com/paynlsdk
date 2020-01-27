<?php

declare(strict_types=1);

namespace PayNL\Sdk\Common;

use Psr\Container\ContainerInterface;
use PayNL\Sdk\{
    Exception\ServiceNotCreatedException,
    Exception\ServiceNotFoundException
};

/**
 * Interface FactoryInterface
 *
 * @package PayNL\Sdk\Factory
 */
interface FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     *
     * @throws ServiceNotFoundException when unable to resolve the service
     * @throws ServiceNotCreatedException when an exception occurs during the service creation
     *
     * @return object
     */
    public function __invoke(ContainerInterface $container, string $requestedName, array $options = null);
}
