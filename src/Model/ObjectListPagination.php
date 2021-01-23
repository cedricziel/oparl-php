<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace OParl\Model;

class ObjectListPagination
{
    /**
     * @var float
     */
    protected $totalElements;
    /**
     * @var float
     */
    protected $elementsPerPage;
    /**
     * @var float
     */
    protected $currentPage;
    /**
     * @var float
     */
    protected $totalPages;

    public function getTotalElements(): float
    {
        return $this->totalElements;
    }

    public function setTotalElements(float $totalElements): self
    {
        $this->totalElements = $totalElements;

        return $this;
    }

    public function getElementsPerPage(): float
    {
        return $this->elementsPerPage;
    }

    public function setElementsPerPage(float $elementsPerPage): self
    {
        $this->elementsPerPage = $elementsPerPage;

        return $this;
    }

    public function getCurrentPage(): float
    {
        return $this->currentPage;
    }

    public function setCurrentPage(float $currentPage): self
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    public function getTotalPages(): float
    {
        return $this->totalPages;
    }

    public function setTotalPages(float $totalPages): self
    {
        $this->totalPages = $totalPages;

        return $this;
    }
}
