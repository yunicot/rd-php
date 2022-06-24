<?php

class Training
{
    private ?Location $location = null;
    private ?Gym $gym = null;

    /**
     * @var Trainer[]
     */
    private array $trainers = [];

    /**
     * @var Equipment[]
     */
    private array $equipments = [];

    /**
     * @var User[]
     */
    private array $participants = [];

    public function __construct(
        private string $title,
        private DateTime $startAt
    ) {
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getGym(): ?Gym
    {
        return $this->gym;
    }

    public function setGym(?Gym $gym): self
    {
        $this->gym = $gym;

        return $this;
    }

    /**
     * @return Trainer[]
     */
    public function getTrainers(): array
    {
        return $this->trainers;
    }

    /**
     * @param Trainer[] $trainers
     * @return $this
     */
    public function setTrainers(array $trainers): self
    {
        $this->trainers = $trainers;

        return $this;
    }

    /**
     * @return Equipment[]
     */
    public function getEquipments(): array
    {
        return $this->equipments;
    }

    /**
     * @param Equipment[] $equipments
     * @return $this
     */
    public function setEquipments(array $equipments): self
    {
        $this->equipments = $equipments;

        return $this;
    }

    /**
     * @return User[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param User[] $participants
     * @return $this
     */
    public function setParticipants(array $participants): self
    {
        $this->participants = $participants;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStartAt(): DateTime
    {
        return $this->startAt;
    }

    public function setStartAt(DateTime $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }
}
