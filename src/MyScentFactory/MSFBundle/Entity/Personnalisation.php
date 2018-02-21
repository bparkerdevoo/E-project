<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnalisation
 *
 * @ORM\Table(name="personnalisation")
 * @ORM\Entity(repositoryClass="MyScentFactory\MSFBundle\Repository\PersonnalisationRepository")
 */
class Personnalisation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    public function __construct()
    {
        $this->setDateCreation(new \DateTime('NOW'));
    }

    /**
     * @ORM\Column(name="id_auteur", type="string", nullable=true)
     * @ORM\ManyToOne(targetEntity="MyScentFactory\UserBundle\Entity\Client", inversedBy="Client")
     */
    private $id_Auteur;

    /**
     * @param mixed $id_Auteur
     */
    public function setIdAuteur($id_Auteur)
    {
        $this->id_Auteur = $id_Auteur;
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre.
     *
     * @param string $titre
     *
     * @return Personnalisation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre.
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateCreation.
     *
     * @param \DateTime $dateCreation
     *
     * @return Personnalisation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Get idAuteur.
     *
     * @return string|null
     */
    public function getIdAuteur()
    {
        return $this->id_Auteur;
    }
}
