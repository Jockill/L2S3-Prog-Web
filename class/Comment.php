<?php

class Comment
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var User
     */
    private $author;

    /**
     * Comment constructor.
     *
     * @param string $text
     * @param User   $author
     */
    public function __construct(string $text, User $author)
    {
        $this->text = $text;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }
}
