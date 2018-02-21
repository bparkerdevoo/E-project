<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forfait
 *
 * @ORM\Table(name="forfait")
 * @ORM\Entity(repositoryClass="MyScentFactory\MSFBundle\Repository\ForfaitRepository")
 */
class Forfait
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
