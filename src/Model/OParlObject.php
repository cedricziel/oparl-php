<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace OParl\Model;

class OParlObject
{
    /**
     * Every object *must* carry a URL as ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Every object *must* carry a name.
     *
     * @var string
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $shortName;
    /**
     * @var string|null
     */
    protected $license;
    /**
     * @var string[]
     */
    protected $keyword;
    /**
     * @var string|null
     */
    protected $web;
    /**
     * @var bool
     */
    protected $deleted = false;
    /**
     * @var \DateTime
     */
    protected $created;
    /**
     * @var \DateTime
     */
    protected $modified;

    /**
     * Every object *must* carry a URL as ID.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Every object *must* carry a URL as ID.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Every object *must* carry a name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Every object *must* carry a name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(?string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getKeyword(): array
    {
        return $this->keyword;
    }

    /**
     * @param string[] $keyword
     */
    public function setKeyword(array $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setCreated(\DateTime $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getModified(): \DateTime
    {
        return $this->modified;
    }

    public function setModified(\DateTime $modified): self
    {
        $this->modified = $modified;

        return $this;
    }
}
