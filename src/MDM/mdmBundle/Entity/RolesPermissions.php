<?php

namespace MDM\mdmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesPermissions
 *
 * @ORM\Table(name="roles_permissions", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="permission_id_idx", columns={"permission_id"}), @ORM\Index(name="rol_id", columns={"rol_id"})})
 * @ORM\Entity
 */
class RolesPermissions
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
     * @var \MDM\mdmBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="MDM\mdmBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \MDM\mdmBundle\Entity\Permissions
     *
     * @ORM\ManyToOne(targetEntity="MDM\mdmBundle\Entity\Permissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;



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
     * @param \MDM\mdmBundle\Entity\Roles $rol
     * @return RolesPermissions
     */
    public function setRol(\MDM\mdmBundle\Entity\Roles $rol = null)
    {
        $this->rol = $rol;
    
        return $this;
    }

    /**
     * Get rol
     *
     * @return \MDM\mdmBundle\Entity\Roles 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set permission
     *
     * @param \MDM\mdmBundle\Entity\Permissions $permission
     * @return RolesPermissions
     */
    public function setPermission(\MDM\mdmBundle\Entity\Permissions $permission = null)
    {
        $this->permission = $permission;
    
        return $this;
    }

    /**
     * Get permission
     *
     * @return \MDM\mdmBundle\Entity\Permissions 
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
