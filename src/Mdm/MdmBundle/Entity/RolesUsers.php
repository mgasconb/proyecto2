<?php

namespace Mdm\MdmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesUsers
 *
 * @ORM\Table(name="roles_users", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="user_id_idx", columns={"user_id"}), @ORM\Index(name="rol_id_idx", columns={"rol_id"})})
 * @ORM\Entity
 */
class RolesUsers
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
     * @var \Mdm\MdmBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="Mdm\MdmBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;

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
     * Set rol
     *
     * @param \Mdm\MdmBundle\Entity\Roles $rol
     * @return RolesUsers
     */
    public function setRol(\Mdm\MdmBundle\Entity\Roles $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \Mdm\MdmBundle\Entity\Roles 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set user
     *
     * @param \Mdm\MdmBundle\Entity\Users $user
     * @return RolesUsers
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
