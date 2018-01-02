<?php

namespace philwc;

/**
 * Class TokenProvider
 * @package philwc
 */
class Token
{
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $salt;
    /**
     * @var string
     */
    private $username;

    /**
     * TokenProvider constructor.
     * @param string $username
     * @param string $password
     * @param string $salt
     */
    public function __construct(string $username, string $password, string $salt)
    {
        $this->password = $password;
        $this->salt = $salt;
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getSalt(): string
    {
        return $this->salt;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return md5($this->password . $this->salt);
    }
}
