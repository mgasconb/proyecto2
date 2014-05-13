<?php

namespace Mdm\MdmBundle\Entity;

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
     * @var \Mdm\MdmBundle\Entity\Tasks
     *
     * @ORM\ManyToOne(targetEntity="Mdm\MdmBundle\Entity\Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     * })
     */
    private $task;

    /**
     * @var \Mdm\MdmBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Mdm\MdmBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set task
     *
     * @param \Mdm\MdmBundle\Entity\Tasks $task
     * @return UsersTasks
     */
    public function setTask(\Mdm\MdmBundle\Entity\Tasks $task = null)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return \Mdm\MdmBundle\Entity\Tasks 
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set user
     *
     * @param \Mdm\MdmBundle\Entity\Users $user
     * @return UsersTasks
     */
    public function setUser(\Mdm\MdmBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Mdm\MdmBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}
