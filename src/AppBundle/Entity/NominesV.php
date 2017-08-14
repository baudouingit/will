<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NominesV
 *
 * @ORM\Table(name="nomines_v")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NominesVRepository")
 */
class NominesV
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
     * @var int
     *
     * @ORM\Column(name="id_cat", type="integer")
     */
    private $idCat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomine1", type="string", length=161)
     */
    private $nomine1;

    /**
     * @var string
     *
     * @ORM\Column(name="nomine2", type="string", length=161, nullable=true)
     */
    private $nomine2;

    /**
     * @var string
     *
     * @ORM\Column(name="nomine3", type="string", length=161, nullable=true)
     */
    private $nomine3;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=80)
     */
    private $domaine;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="elu", type="integer", nullable=true)
     */
    private $elu;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="longcomm", type="text", nullable=true)
     */
    private $longcomm;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=50, nullable=true)
     */
    private $photo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCat
     *
     * @param integer $idCat
     * @return NominesV
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * Get idCat
     *
     * @return integer 
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * Set nomine1
     *
     * @param string $nomine1
     * @return NominesV
     */
    public function setNomine1($nomine1)
    {
        $this->nomine1 = $nomine1;

        return $this;
    }

    /**
     * Get nomine1
     *
     * @return string 
     */
    public function getNomine1()
    {
        return $this->nomine1;
    }

    /**
     * Set nomine2
     *
     * @param string $nomine2
     * @return NominesV
     */
    public function setNomine2($nomine2)
    {
        $this->nomine2 = $nomine2;

        return $this;
    }

    /**
     * Get nomine2
     *
     * @return string 
     */
    public function getNomine2()
    {
        return $this->nomine2;
    }

    /**
     * Set nomine3
     *
     * @param string $nomine3
     * @return NominesV
     */
    public function setNomine3($nomine3)
    {
        $this->nomine3 = $nomine3;

        return $this;
    }

    /**
     * Get nomine3
     *
     * @return string 
     */
    public function getNomine3()
    {
        return $this->nomine3;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     * @return NominesV
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return NominesV
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set elu
     *
     * @param integer $elu
     * @return NominesV
     */
    public function setElu($elu)
    {
        $this->elu = $elu;

        return $this;
    }

    /**
     * Get elu
     *
     * @return integer 
     */
    public function getElu()
    {
        return $this->elu;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return NominesV
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set longcomm
     *
     * @param string $longcomm
     * @return NominesV
     */
    public function setLongcomm($longcomm)
    {
        $this->longcomm = $longcomm;

        return $this;
    }

    /**
     * Get longcomm
     *
     * @return string 
     */
    public function getLongcomm()
    {
        return $this->longcomm;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return NominesV
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
