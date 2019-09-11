<?php

declare(strict_types=1);

namespace Tests\Unit\PayNL\Sdk\Hydrator;

use Codeception\Test\Unit as UnitTest;
use PayNL\Sdk\Exception\InvalidArgumentException;
use PayNL\Sdk\Hydrator\BankAccount as BankAccountHydrator;
use PayNL\Sdk\Model\BankAccount;
use Zend\Hydrator\HydratorInterface;

class BankAccountTest extends UnitTest
{
    public function testItIsAHydrator(): void
    {
        $hydrator = new BankAccountHydrator();
        verify($hydrator)->isInstanceOf(HydratorInterface::class);
    }

    public function testItShouldOnlyAcceptSipUriObjects(): void
    {
        $hydrator = new BankAccountHydrator();

        $this->expectException(InvalidArgumentException::class);
        $hydrator->hydrate([], new \stdClass());

        expect($hydrator->hydrate([], new BankAccount()))->isInstanceOf(BankAccount::class);
    }

    public function testItShouldCorrectlyFillAddressModel(): void
    {
        $hydrator = new BankAccountHydrator();
        $bankAccount = $hydrator->hydrate([
            'iban'  => 'NL00RABO0123456789',
            'bic'   => 'NL00RABO',
            'owner' => 'H. Solo',
        ], new BankAccount());

        expect($bankAccount->getIban())->equals('NL00RABO0123456789');
        expect($bankAccount->getBic())->equals('NL00RABO');
        expect($bankAccount->getOwner())->equals('H. Solo');
    }

    public function testItCanExtract(): void
    {
        $hydrator = new BankAccountHydrator();
        $bankAccount = $hydrator->hydrate([
            'iban'  => 'NL00RABO0123456789',
            'bic'   => 'NL00RABO',
            'owner' => 'H. Solo',
        ], new BankAccount());

        $data = $hydrator->extract($bankAccount);
        $this->assertIsArray($data);
        verify($data)->hasKey('iban');
        verify($data)->hasKey('bic');
        verify($data)->hasKey('owner');

        expect($bankAccount->getIban())->equals('NL00RABO0123456789');
        expect($bankAccount->getBic())->equals('NL00RABO');
        expect($bankAccount->getOwner())->equals('H. Solo');
    }
}
