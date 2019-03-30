<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * visitas
 *
 * @ORM\Table(name="visitas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\visitasRepository")
 */
class visitas
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
     * @ORM\Column(name="Visita_Nom1", type="string", length=15)
     */
    private $visitaNom1;

    /**
     * @var string
     *
     * @ORM\Column(name="Visita_Nom2", type="string", length=15)
     */
    private $visitaNom2;

    /**
     * @var string
     *
     * @ORM\Column(name="Visita_ap", type="string", length=15)
     */
    private $visitaAp;

    /**
     * @var string
     *
     * @ORM\Column(name="Visita_am", type="string", length=15)
     */
    private $visitaAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Visita_facceso", type="date")
     */
    private $visitaFacceso;

    /**
     * @var string
     *
     * @ORM\Column(name="Visita_dracceso", type="string", length=12)
     */
    private $visitaDracceso;

    /**
     * @var string
     *
     * @ORM\Column(name="Visita_hrsalida", type="string", length=12)
     */
    private $visitaHrsalida;

    /**
     * @var string
     *
     * @ORM\Column(name="Visita_Area", type="string", length=15)
     */
    private $visitaArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="Visita_autoriza", type="integer")
     */
    private $visitaAutoriza;


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
     * Set visitaNom1
     *
     * @param string $visitaNom1
     *
     * @return visitas
     */
    public function setVisitaNom1($visitaNom1)
    {
        $this->visitaNom1 = $visitaNom1;

        return $this;
    }

    /**
     * Get visitaNom1
     *
     * @return string
     */
    public function getVisitaNom1()
    {
        return $this->visitaNom1;
    }

    /**
     * Set visitaNom2
     *
     * @param string $visitaNom2
     *
     * @return visitas
     */
    public function setVisitaNom2($visitaNom2)
    {
        $this->visitaNom2 = $visitaNom2;

        return $this;
    }

    /**
     * Get visitaNom2
     *
     * @return string
     */
    public function getVisitaNom2()
    {
        return $this->visitaNom2;
    }

    /**
     * Set visitaAp
     *
     * @param string $visitaAp
     *
     * @return visitas
     */
    public function setVisitaAp($visitaAp)
    {
        $this->visitaAp = $visitaAp;

        return $this;
    }

    /**
     * Get visitaAp
     *
     * @return string
     */
    public function getVisitaAp()
    {
        return $this->visitaAp;
    }

    /**
     * Set visitaAm
     *
     * @param string $visitaAm
     *
     * @return visitas
     */
    public function setVisitaAm($visitaAm)
    {
        $this->visitaAm = $visitaAm;

        return $this;
    }

    /**
     * Get visitaAm
     *
     * @return string
     */
    public function getVisitaAm()
    {
        return $this->visitaAm;
    }

    /**
     * Set visitaFacceso
     *
     * @param \DateTime $visitaFacceso
     *
     * @return visitas
     */
    public function setVisitaFacceso($visitaFacceso)
    {
        $this->visitaFacceso = $visitaFacceso;

        return $this;
    }

    /**
     * Get visitaFacceso
     *
     * @return \DateTime
     */
    public function getVisitaFacceso()
    {
        return $this->visitaFacceso;
    }

    /**
     * Set visitaDracceso
     *
     * @param string $visitaDracceso
     *
     * @return visitas
     */
    public function setVisitaDracceso($visitaDracceso)
    {
        $this->visitaDracceso = $visitaDracceso;

        return $this;
    }

    /**
     * Get visitaDracceso
     *
     * @return string
     */
    public function getVisitaDracceso()
    {
        return $this->visitaDracceso;
    }

    /**
     * Set visitaHrsalida
     *
     * @param string $visitaHrsalida
     *
     * @return visitas
     */
    public function setVisitaHrsalida($visitaHrsalida)
    {
        $this->visitaHrsalida = $visitaHrsalida;

        return $this;
    }

    /**
     * Get visitaHrsalida
     *
     * @return string
     */
    public function getVisitaHrsalida()
    {
        return $this->visitaHrsalida;
    }

    /**
     * Set visitaArea
     *
     * @param string $visitaArea
     *
     * @return visitas
     */
    public function setVisitaArea($visitaArea)
    {
        $this->visitaArea = $visitaArea;

        return $this;
    }

    /**
     * Get visitaArea
     *
     * @return string
     */
    public function getVisitaArea()
    {
        return $this->visitaArea;
    }

    /**
     * Set visitaAutoriza
     *
     * @param boolean $visitaAutoriza
     *
     * @return visitas
     */
    public function setVisitaAutoriza($visitaAutoriza)
    {
        $this->visitaAutoriza = $visitaAutoriza;

        return $this;
    }

    /**
     * Get visitaAutoriza
     *
     * @return bool
     */
    public function getVisitaAutoriza()
    {
        return $this->visitaAutoriza;
    }
}

