<?php

class User
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $username;
    /**
     * @var string
     */
    public $ppurl;

    /**
     * User constructor.
     *
     * @param string $id
     * @param string $username
     * @param string $ppurl
     */
    public function __construct(string $id, string $username, string $ppurl)
    {
        $this->id = $id;
        $this->username = $username;
	$this->ppurl = $ppurl;
    }

    /**
    * @return string
    */
    public function getId(): string
    {
	    return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        if (strlen($username) < 50) {
            $this->username = $username;
        }
    }

    /**
     * @return string
     */
    public function getPpurl(): string
    {
        return $this->ppurl;
    }

    /**
     * @param string $username
     */
    public function setPpurl(string $ppurl): void
    {
            $this->username = htmlentities($ppurl);
    }
}
