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
     * @var \DateTime
     */
    protected $created;
    /**
     * @var bool
     */
    protected $deleted = false;
    /**
     * Every object *must* carry a URL as ID.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string[]
     */
    protected $keyword;
    /**
     * @var string|null
     */
    protected $license;
    /**
     * @var \DateTime
     */
    protected $modified;
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
    protected $web;

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Every object *must* carry a URL as ID.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string[]
     */
    public function getKeyword(): array
    {
        return $this->keyword;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function getModified(): \DateTime
    {
        return $this->modified;
    }

    /**
     * Every object *must* carry a name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setCreated(\DateTime $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
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
     * @param string[] $keyword
     */
    public function setKeyword(array $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function setModified(\DateTime $modified): self
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Every object *must* carry a name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setShortName(?string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }
}
