<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiaimpartida
 */
class Materiaimpartida
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Grupo
     */
    private $grupo;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Materia
     */
    private $materia;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $profesor;


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
     * Set grupo
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Grupo $grupo
     * @return Materiaimpartida
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

    /**
     * Set materia
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Materia $materia
     * @return Materiaimpartida
     */
    public function setMateria(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Materia $materia = null)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Materia 
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set profesor
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $profesor
     * @return Materiaimpartida
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
}
