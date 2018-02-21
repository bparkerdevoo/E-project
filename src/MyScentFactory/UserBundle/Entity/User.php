<?php

namespace MyScentFactory\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->dateInscription = new \DateTime('NOW');
    }

    /**
     * @ORM\Column(name="locale", type="string", length=5, nullable=true)
     *
     */
    protected $locale;
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=100, nullable=true)
     *
     *
     */
    private $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=100, nullable=true)
     */
    private $prenom;
    /**
     * @var bool
     *
     * @ORM\Column(name="Titre", type="string", nullable=true)
     */
    private $titre;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="text", nullable=true)
     */
    private $adresse1;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="text", nullable=true)
     */
    private $adresse2;
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=60, nullable=true)
     */
    private $ville;
    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=8, nullable=true)
     */
    private $codePostal;
    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=60, nullable=true)
     */
    private $region;
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=true)
     */
    private $telephone;
    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=10, nullable=true)
     */
    private $mobile;
    /**
     * @var bool
     *
     * @ORM\Column(name="CategorieAdresse", type="boolean", nullable=true)
     */
    private $categorieAdresse;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date", nullable=true)
     */
    private $dateDeNaissance;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date", nullable=true)
     */
    private $dateInscription;



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
     * Set nom.
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Set titre.
     *
     * @param bool $titre
     *
     * @return User
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }
    /**
     * Get titre.
     *
     * @return bool
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Set adresse1.
     *
     * @param string $adresse1
     *
     * @return User
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;
        return $this;
    }
    /**
     * Get adresse1.
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }
    /**
     * Set adresse2.
     *
     * @param string $adresse2
     *
     * @return User
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;
        return $this;
    }
    /**
     * Get adresse2.
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }
    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }
    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
    /**
     * Set codePostal.
     *
     * @param string $codePostal
     *
     * @return User
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        return $this;
    }
    /**
     * Get codePostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    /**
     * Set region.
     *
     * @param string $region
     *
     * @return User
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }
    /**
     * Get region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Set categorieAdresse.
     *
     * @param bool $categorieAdresse
     *
     * @return User
     */
    public function setCategorieAdresse($categorieAdresse)
    {
        $this->categorieAdresse = $categorieAdresse;
        return $this;
    }
    /**
     * Get categorieAdresse.
     *
     * @return bool
     */
    public function getCategorieAdresse()
    {
        return $this->categorieAdresse;
    }
    /**
     * Set dateDeNaissance.
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return User
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
        return $this;
    }
    /**
     * Get dateDeNaissance.
     *
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    /**
     * Set dateInscription.
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
        return $this;
    }
    /**
     * Get dateInscription.
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }
    /**
     * Set telephone.
     *
     * @param string $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }
    /**
     * Get telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * Set mobile.
     *
     * @param string $mobile
     *
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Get mobile.
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }


}
