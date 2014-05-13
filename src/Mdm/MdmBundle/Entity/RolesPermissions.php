<?php

namespace Mdm\MdmBundle\Entity;

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
     * @var \Mdm\MdmBundle\Entity\Roles
     *
     * @ORM\ManyToOne(targetEntity="Mdm\MdmBundle\Entity\Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \Mdm\MdmBundle\Entity\Permissions
     *
     * @ORM\ManyToOne(targetEntity="Mdm\MdmBundle\Entity\Permissions")
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
     * @param \Mdm\MdmBundle\Entity\Roles $rol
     * @return RolesPermissions
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
     * Set permission
     *
     * @param \Mdm\MdmBundle\Entity\Permissions $permission
     * @return RolesPermissions
     */
    public function setPermission(\Mdm\MdmBundle\Entity\Permissions $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \Mdm\MdmBundle\Entity\Permissions 
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
