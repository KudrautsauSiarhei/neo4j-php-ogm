<?php

namespace GraphAware\Neo4j\OGM\Tests\Proxy\Model;

use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * @OGM\Node(label="Profile")
 */
class Profile
{
    /**
     * @var int
     *
     * @OGM\GraphId()
     */
    protected $id;

    /**
     * @OGM\Property(type="string")
     */
    protected $email;

    /**
     * @var User
     *
     * @OGM\Relationship(type="HAS_PROFILE", targetEntity="User", direction="INCOMING", mappedBy="profile")
     */
    protected $user;

    /**
     * Profile constructor.
     * @param string $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}