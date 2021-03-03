<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="formation")
 */
class Formation 
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
     * @ORM\Column(type="string")
     */
     private $date;
      /**
     * @ORM\Column(type="integer")
     */
     private $duree;

     /**
     * Many formation have one lieu. This is the owning side.
     * @ORM\ManyToOne(targetEntity="lieu", inversedBy="formations")
     * @ORM\JoinColumn(name="lieu_id", referencedColumnName="id")
     */
     private $lieu;
    
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
   public function getDate()
   {
       return $this->date;
   }
    /**
     * @param mixed $date
     */
   public function setDate($date)
   {
     $this->date = $date;
   }
    /**
     * @return mixed
     */
   public function getDuree()
   {
       return $this->duree;
   }
    /**
     * @param mixed $duree
     */
   public function setDuree($duree)
   {
     $this->duree = $duree;
   }
    /**
     * @return mixed
     */
   public function getLieu()
   {
       return $this->lieu;
   }
    /**
     * @param mixed $lieu
     */
   public function setLieu($lieu)
   {
     $this->lieu = $lieu;
   }
}

?>