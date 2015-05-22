<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matricula
 */
class Matricula
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno
     */
    private $expediente;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Grupo
     */
    private $grupo;


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
     * Set expediente
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno $expediente
     * @return Matricula
     */
    public function setExpediente(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno $expediente = null)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno 
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set grupo
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Grupo $grupo
     * @return Matricula
     */
    public function setGrupo(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Grupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
}
