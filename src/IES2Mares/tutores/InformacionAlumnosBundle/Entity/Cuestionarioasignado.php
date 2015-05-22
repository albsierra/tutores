<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuestionarioasignado
 */
class Cuestionarioasignado
{
    /**
     * @var integer
     */
    private $completado;

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
     * Set completado
     *
     * @param integer $completado
     * @return Cuestionarioasignado
     */
    public function setCompletado($completado)
    {
        $this->completado = $completado;

        return $this;
    }

    /**
     * Get completado
     *
     * @return integer 
     */
    public function getCompletado()
    {
        return $this->completado;
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
     * @return Cuestionarioasignado
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
     * @return Cuestionarioasignado
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
