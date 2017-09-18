<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jures
 *
 * @ORM\Table(name="jures")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JuresRepository")
 */
class Jures
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="notice", type="text")
     */
    private $notice;

    /**
     * @var int
     *
     * @ORM\Column(name="publie", type="integer")
     */
    private $publie;

    /**
     * @var string
     *
     * @ORM\Column(name="vignette", type="string", length=50)
     */
    private $vignette;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Jures
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Jures
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set notice
     *
     * @param string $notice
     *
     * @return Jures
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return string
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set publie
     *
     * @param integer $publie
     *
     * @return Jures
     */
    public function setPublie($publie)
    {
        $this->publie = $publie;

        return $this;
    }

    /**
     * Get publie
     *
     * @return int
     */
    public function getPublie()
    {
        return $this->publie;
    }

    /**
     * Set vignette
     *
     * @param string $vignette
     *
     * @return Jures
     */
    public function setVignette($vignette)
    {
        $this->vignette = $vignette;

        return $this;
    }

    /**
     * Get vignette
     *
     * @return string
     */
    public function getVignette()
    {
        return $this->vignette;
    }
}

