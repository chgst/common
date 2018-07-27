<?php

namespace Changeset\Event;

trait EventTrait
{
    /** @var string */
    protected $aggregateId;

    /** @var string */
    protected $aggregateType;

    /** @var string */
    protected $type;

    /** @var |DateTimeInterface */
    protected $createdAt;

    /** @var string */
    protected $createdBy;

    protected $payload;

    public function getAggregateId(): string
    {
        return $this->aggregateId;
    }

    public function setAggregateId(string $aggregateId)
    {
        $this->aggregateId = $aggregateId;

        return $this;
    }

    public function getAggregateType(): string
    {
        return $this->aggregateType;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;

        return $this;
    }

    protected function init(string $aggregateId, $payload)
    {
        $this->aggregateId = $aggregateId;
        $this->payload = $payload;

        if ( ! $this->type)
        {
            $this->type = get_called_class();
        }

        if ( ! $this->createdAt)
        {
            $this->createdAt = new \DateTimeImmutable();
        }
    }
}