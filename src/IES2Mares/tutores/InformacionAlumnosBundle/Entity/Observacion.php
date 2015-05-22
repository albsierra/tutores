<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observacion
 */
class Observacion
{
    /**
     * @var string
     */
    private $observacion;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $profesor;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Cuestionario
     */
    private $cuestionario;


    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Observacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
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
     * Set profesor
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $profesor
     * @return Observacion
     */
    public function setProfesor(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set cuestionario
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Cuestionario $cuestionario
     * @return Observacion
     */
    public function setCuestionario(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Cuestionario $cuestionario = null)
    {
        $this->cuestionario = $cuestionario;

        return $this;
    }

    /**
     * Get cuestionario
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Cuestionario 
     */
    public function getCuestionario()
    {
        return $this->cuestionario;
    }
}
