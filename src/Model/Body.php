<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace OParl\Model;

class Body
{
    /**
     * @var string[]|string
     */
    protected $agendaItem;
    /**
     * @var string
     */
    protected $ags;
    /**
     * @var string
     */
    protected $classification;
    /**
     * @var string[]|string
     */
    protected $consultation;
    /**
     * @var string
     */
    protected $contactEmail;
    /**
     * @var string
     */
    protected $contactName;
    /**
     * @var \DateTime
     */
    protected $created;
    /**
     * @var bool
     */
    protected $deleted = false;
    /**
     * @var string[]
     */
    protected $equivalent;
    /**
     * @var string[]|string
     */
    protected $file;
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
     * @var LegislativeTerm[]
     */
    protected $legislativeTerm;
    /**
     * @var string[]|string
     */
    protected $legislativeTermList;
    /**
     * @var string|null
     */
    protected $license;
    /**
     * @var \DateTime
     */
    protected $licenseValidSince;
    /**
     * @var Location
     */
    protected $location;
    /**
     * @var string[]|string
     */
    protected $locationList;
    /**
     * @var string[]|string
     */
    protected $meeting;
    /**
     * @var string[]|string
     */
    protected $membership;
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
     * @var \DateTime
     */
    protected $oparlSince;
    /**
     * @var string[]|string
     */
    protected $organization;
    /**
     * @var string[]|string
     */
    protected $paper;
    /**
     * @var string[]|string
     */
    protected $person;
    /**
     * @var string
     */
    protected $rgs;
    /**
     * @var string|null
     */
    protected $shortName;
    /**
     * @var string
     */
    protected $type = 'https://schema.oparl.org/1.1/Body';
    /**
     * @var string|null
     */
    protected $web;

    /**
     * @return string[]|string
     */
    public function getAgendaItem()
    {
        return $this->agendaItem;
    }

    public function getAgs(): string
    {
        return $this->ags;
    }

    public function getClassification(): string
    {
        return $this->classification;
    }

    /**
     * @return string[]|string
     */
    public function getConsultation()
    {
        return $this->consultation;
    }

    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    public function getContactName(): string
    {
        return $this->contactName;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @return string[]
     */
    public function getEquivalent(): array
    {
        return $this->equivalent;
    }

    /**
     * @return string[]|string
     */
    public function getFile()
    {
        return $this->file;
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

    /**
     * @return LegislativeTerm[]
     */
    public function getLegislativeTerm(): array
    {
        return $this->legislativeTerm;
    }

    /**
     * @return string[]|string
     */
    public function getLegislativeTermList()
    {
        return $this->legislativeTermList;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function getLicenseValidSince(): \DateTime
    {
        return $this->licenseValidSince;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @return string[]|string
     */
    public function getLocationList()
    {
        return $this->locationList;
    }

    /**
     * @return string[]|string
     */
    public function getMeeting()
    {
        return $this->meeting;
    }

    /**
     * @return string[]|string
     */
    public function getMembership()
    {
        return $this->membership;
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

    public function getOparlSince(): \DateTime
    {
        return $this->oparlSince;
    }

    /**
     * @return string[]|string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return string[]|string
     */
    public function getPaper()
    {
        return $this->paper;
    }

    /**
     * @return string[]|string
     */
    public function getPerson()
    {
        return $this->person;
    }

    public function getRgs(): string
    {
        return $this->rgs;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    /**
     * @param string[]|string $agendaItem
     */
    public function setAgendaItem($agendaItem): self
    {
        $this->agendaItem = $agendaItem;

        return $this;
    }

    public function setAgs(string $ags): self
    {
        $this->ags = $ags;

        return $this;
    }

    public function setClassification(string $classification): self
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * @param string[]|string $consultation
     */
    public function setConsultation($consultation): self
    {
        $this->consultation = $consultation;

        return $this;
    }

    public function setContactEmail(string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function setContactName(string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
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
     * @param string[] $equivalent
     */
    public function setEquivalent(array $equivalent): self
    {
        $this->equivalent = $equivalent;

        return $this;
    }

    /**
     * @param string[]|string $file
     */
    public function setFile($file): self
    {
        $this->file = $file;

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

    /**
     * @param LegislativeTerm[] $legislativeTerm
     */
    public function setLegislativeTerm(array $legislativeTerm): self
    {
        $this->legislativeTerm = $legislativeTerm;

        return $this;
    }

    /**
     * @param string[]|string $legislativeTermList
     */
    public function setLegislativeTermList($legislativeTermList): self
    {
        $this->legislativeTermList = $legislativeTermList;

        return $this;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function setLicenseValidSince(\DateTime $licenseValidSince): self
    {
        $this->licenseValidSince = $licenseValidSince;

        return $this;
    }

    public function setLocation(Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @param string[]|string $locationList
     */
    public function setLocationList($locationList): self
    {
        $this->locationList = $locationList;

        return $this;
    }

    /**
     * @param string[]|string $meeting
     */
    public function setMeeting($meeting): self
    {
        $this->meeting = $meeting;

        return $this;
    }

    /**
     * @param string[]|string $membership
     */
    public function setMembership($membership): self
    {
        $this->membership = $membership;

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

    public function setOparlSince(\DateTime $oparlSince): self
    {
        $this->oparlSince = $oparlSince;

        return $this;
    }

    /**
     * @param string[]|string $organization
     */
    public function setOrganization($organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @param string[]|string $paper
     */
    public function setPaper($paper): self
    {
        $this->paper = $paper;

        return $this;
    }

    /**
     * @param string[]|string $person
     */
    public function setPerson($person): self
    {
        $this->person = $person;

        return $this;
    }

    public function setRgs(string $rgs): self
    {
        $this->rgs = $rgs;

        return $this;
    }

    public function setShortName(?string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }
}
