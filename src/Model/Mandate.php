<?php

declare(strict_types=1);

namespace PayNL\Sdk\Model;

use JsonSerializable, DateTime;
use PayNL\Sdk\Common\JsonSerializeTrait;

/**
 * Class Mandate
 *
 * @package PayNL\Sdk\Model
 */
class Mandate implements ModelInterface, JsonSerializable
{
    use JsonSerializeTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var DateTime|null
     */
    protected $processDate;

    /**
     * @var string
     */
    protected $exchangeUrl;

    /**
     * @var Amount
     */
    protected $amount;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var Statistics
     */
    protected $statistics;

    /**
     * @var Interval
     */
    protected $interval;

    /**
     * @var Customer|null
     */
    protected $customer;

    /**
     * @var boolean
     */
    protected $isLastOrder = false;

    /**
     * @var string
     */
    protected $state;

    /**
     * @return string
     */
    public function getId(): string
    {
        return (string)$this->id;
    }

    /**
     * @param string $id
     *
     * @return Mandate
     */
    public function setId(string $id): Mandate
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return (string)$this->type;
    }

    /**
     * @param string $type
     *
     * @return Mandate
     */
    public function setType(string $type): Mandate
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId(): string
    {
        return (string)$this->serviceId;
    }

    /**
     * @param string $serviceId
     *
     * @return Mandate
     */
    public function setServiceId(string $serviceId): self
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getProcessDate(): ?DateTime
    {
        return $this->processDate;
    }

    /**
     * @param DateTime $processDate
     *
     * @return Mandate
     */
    public function setProcessDate(DateTime $processDate): self
    {
        $this->processDate = $processDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExchangeUrl(): string
    {
        return (string)$this->exchangeUrl;
    }

    /**
     * @param string $exchangeUrl
     *
     * @return Mandate
     */
    public function setExchangeUrl(string $exchangeUrl): Mandate
    {
        $this->exchangeUrl = $exchangeUrl;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount(): Amount
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     *
     * @return Mandate
     */
    public function setAmount(Amount $amount): Mandate
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string)$this->description;
    }

    /**
     * @param string $description
     *
     * @return Mandate
     */
    public function setDescription(string $description): Mandate
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Statistics
     */
    public function getStatistics(): Statistics
    {
        return $this->statistics;
    }

    /**
     * @param Statistics $statistics
     *
     * @return Mandate
     */
    public function setStatistics(Statistics $statistics): Mandate
    {
        $this->statistics = $statistics;
        return $this;
    }

    /**
     * @return Interval
     */
    public function getInterval(): Interval
    {
        return $this->interval;
    }

    /**
     * @param Interval $interval
     *
     * @return Mandate
     */
    public function setInterval(Interval $interval): Mandate
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     *
     * @return Mandate
     */
    public function setCustomer(Customer $customer): Mandate
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLastOrder(): bool
    {
        return $this->isLastOrder;
    }

    /**
     * @param bool $isLastOrder
     *
     * @return Mandate
     */
    public function setIsLastOrder(bool $isLastOrder): Mandate
    {
        $this->isLastOrder = $isLastOrder;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return (string)$this->state;
    }

    /**
     * @param string $state
     *
     * @return Mandate
     */
    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }
}
