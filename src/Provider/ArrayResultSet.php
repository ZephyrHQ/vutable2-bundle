<?php

declare(strict_types=1);

namespace VueDatatableBundle\Domain;

/**
 * Interface ResultSetInterface.
 *
 * @author Thomas Talbot <thomas.talbot@zephyr-web.fr>
 */
final class ArrayResultSet implements ResultSetInterface
{
    private $data;
    private $total;
    private $filteredTotal;

    public function __construct(array $data, int $total = 0, int $filteredTotal = 0)
    {
        $this->data = $data;
        $this->total = $total;
        $this->filteredTotal = $filteredTotal;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getDisplayedTotal(): int
    {
        return $this->filteredTotal;
    }

    public function getData(): \Iterator
    {
        return new \ArrayIterator($this->data);
    }
}
