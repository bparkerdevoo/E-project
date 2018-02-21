<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodePromo
 *
 * @ORM\Table(name="code_promo")
 * @ORM\Entity(repositoryClass="MyScentFactory\MSFBundle\Repository\CodePromoRepository")
 */
class CodePromo
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
