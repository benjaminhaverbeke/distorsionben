<?php



class Category
{
    private ? int $id = null;

    public function __construct(private string $name)
    {

    }

   
    public function getId(): ?int
    {
        return $this->id;
    }

   
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

   
    public function getName(): string
    {
        return $this->title;
    }

    
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    
}


?>