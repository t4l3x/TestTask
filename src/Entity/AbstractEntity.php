<?php declare(strict_types=1);

namespace Task\Entity;

abstract class AbstractEntity
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}