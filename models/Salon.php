<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Salon
{
    private ? int $id = null;

    public function __construct(private string $name)
    {

    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $title
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
}