<?php

class Message
{
    private ? int $id = null;
    

    public function __construct(private string $content, private User $author, private Salon $salon, private DateTime $createdAt = new DateTime())
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

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    
    public function getAuthor(): User
    {
        return $this->author;
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getSalon(): Salon
    {
        return $this->salon;
    }

    public function setSalon(Salon $salon): void
    {
        $this->salon = $salon;
    }
    
}

?>