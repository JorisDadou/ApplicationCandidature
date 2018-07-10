<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table(name="candidature")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CandidatureRepository")
 */
class Candidature
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
     * @ORM\Column(type="datetime")
     */
    private $DateCandidature;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $ParcoursScolarite;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $NumeroTelephone;

    /**
     * @ORM\Column(type="string")
     */
    private $Email;

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
     * Set dateCandidature
     *
     * @param \DateTime $dateCandidature
     *
     * @return Candidature
     */
    public function setDateCandidature($dateCandidature)
    {
        $this->DateCandidature = $dateCandidature;

        return $this;
    }

    /**
     * Get dateCandidature
     *
     * @return \DateTime
     */
    public function getDateCandidature()
    {
        return $this->DateCandidature;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Candidature
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Candidature
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set parcoursScolarite
     *
     * @param string $parcoursScolarite
     *
     * @return Candidature
     */
    public function setParcoursScolarite($parcoursScolarite)
    {
        $this->ParcoursScolarite = $parcoursScolarite;

        return $this;
    }

    /**
     * Get parcoursScolarite
     *
     * @return string
     */
    public function getParcoursScolarite()
    {
        return $this->ParcoursScolarite;
    }

    /**
     * Set numeroTelephone
     *
     * @param string $numeroTelephone
     *
     * @return Candidature
     */
    public function setNumeroTelephone($numeroTelephone)
    {
        $this->NumeroTelephone = $numeroTelephone;

        return $this;
    }

    /**
     * Get numeroTelephone
     *
     * @return string
     */
    public function getNumeroTelephone()
    {
        return $this->NumeroTelephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Candidature
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }
}
