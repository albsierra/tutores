<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuestionario
 */
class Cuestionario
{
    /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \DateTime
     */
    private $fechafin;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $creador;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno
     */
    private $alumno;


    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     * @return Cuestionario
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Cuestionario
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Cuestionario
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

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
     * Set creador
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $creador
     * @return Cuestionario
     */
    public function setCreador(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $creador = null)
    {
        $this->creador = $creador;

        return $this;
    }

    /**
     * Get creador
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor 
     */
    public function getCreador()
    {
        return $this->creador;
    }

    /**
     * Set alumno
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno $alumno
     * @return Cuestionario
     */
    public function setAlumno(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno $alumno = null)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno 
     */
    public function getAlumno()
    {
        return $this->alumno;
    }
}
