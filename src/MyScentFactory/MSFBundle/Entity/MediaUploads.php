<?php

namespace MyScentFactory\MSFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;




/**
 * MediaUploads
 *
 * @ORM\Table(name="media_uploads")
 * @ORM\Entity(repositoryClass="MyScentFactory\MSFBundle\Repository\MediaUploadsRepository")
 *  @Vich\Uploadable
 */
class MediaUploads
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
     * @ORM\Column(name="Image", type="string", length=100)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="Path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;



    /**
     * @ORM\Column(type="datetime",  nullable=true)
     * @var \DateTime
     *
     */
    private $updatedAt;

    /**
     *
     * @ORM\Column(type="integer", name="uploadSize", nullable=true)
     * @var integer
     *
     */

    private $uploadSize;

    /**
     * @var File
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName", size="imageSize")
     */
    private $File;

    /**
     * @return File
     */
    public function getFile(): File
    {
        return $this->File;
    }

    /**
     * @param File $File
     */
    public function setFile(File $File)
    {
        $this->File = $File;
    }

    /**
     * @return int
     */
    public function getUploadSize(): int
    {
        return $this->uploadSize;
    }

    /**
     * @param int $uploadSize
     */
    public function setUploadSize(int $uploadSize)
    {
        $this->uploadSize = $uploadSize;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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
     * Set image.
     *
     * @param string $image
     *
     * @return MediaUploads
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set path.
     *
     * @param string $path
     *
     * @return MediaUploads
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set alt.
     *
     * @param string $alt
     *
     * @return MediaUploads
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt.
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
