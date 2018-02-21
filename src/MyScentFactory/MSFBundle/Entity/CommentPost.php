<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentPost
 *
 * @ORM\Table(name="comment_post")
 * @ORM\Entity(repositoryClass="MyScentFactory\MSFBundle\Repository\CommentPostRepository")
 */
class CommentPost
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
