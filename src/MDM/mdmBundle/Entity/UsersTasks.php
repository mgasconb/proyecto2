<?php

namespace MDM\mdmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersTasks
 *
 * @ORM\Table(name="users_tasks", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="user_id_idx", columns={"user_id"}), @ORM\Index(name="task_id_idx", columns={"task_id"})})
 * @ORM\Entity
 */
class UsersTasks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MDM\mdmBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="MDM\mdmBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \MDM\mdmBundle\Entity\Tasks
     *
     * @ORM\ManyToOne(targetEntity="MDM\mdmBundle\Entity\Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     * })
     */
    private $task;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \MDM\mdmBundle\Entity\Users $user
     * @return UsersTasks
     */
    public function setUser(\MDM\mdmBundle\Entity\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \MDM\mdmBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set task
     *
     * @param \MDM\mdmBundle\Entity\Tasks $task
     * @return UsersTasks
     */
    public function setTask(\MDM\mdmBundle\Entity\Tasks $task = null)
    {
        $this->task = $task;
    
        return $this;
    }

    /**
     * Get task
     *
     * @return \MDM\mdmBundle\Entity\Tasks 
     */
    public function getTask()
    {
        return $this->task;
    }
}
