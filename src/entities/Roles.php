<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Roles
{
     /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
   private $id;
     /**
     * @ORM\Column(type="string")
     */
   private $nom;
    /**
     * Many Roles have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
   private $users;


   public function __construct()
   {
    $this->users = new ArrayCollection();
   }
    /**
     * @return mixed
     */
   public function getId()
   {
       return $this->id;
   }
    /**
     * @param mixed $id
     */
   public function setId($id)
   {
     $this->id = $id;
   }
    /**
     * @return mixed
     */
   public function getNom()
   {
       return $this->nom;
   }
    /**
     * @param mixed $nom
     */
   public function setNom($nom)
   {
     $this->nom = $nom;
   }
    /**
     * @return mixed
     */
   public function getUsers()
   {
       return $this->users;
   }
    /**
     * @param mixed $users
     */
   public function setUsers($users)
   {
     $this->users = $users;
   }
}

?>