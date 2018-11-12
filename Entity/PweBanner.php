<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="pwe_banners")
 */
class pwebanner
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=250)
     */
    private $title;

    private $fileName;

    /**
     * @ORM\Column(type="string")
     * @Assert\File(
     *      mimeTypes = {
     *          "image/png",
     *          "image/jpeg",
     *          "image/jpg",
     *          "image/gif",
     *          "image/svg",
     *          "image/svg+xml",
     *      }
     * )
     */
    private $icon;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $nameLinkToPage;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $linkToPage;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="integer")
     */
    private $position;

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }


    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getNameLinkToPage()
    {
        return $this->nameLinkToPage;
    }

    /**
     * @param mixed $nameLinkToPage
     */
    public function setNameLinkToPage($nameLinkToPage)
    {
        $this->nameLinkToPage = $nameLinkToPage;
    }

    /**
     * @return mixed
     */
    public function getLinkToPage()
    {
        return $this->linkToPage;
    }

    /**
     * @param mixed $linkToPage
     */
    public function setLinkToPage($linkToPage)
    {
        $this->linkToPage = $linkToPage;
    }

    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
}