<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiamatriculada
 */
class Materiamatriculada
{
    /**
     * @var string
     */
    private $anyo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno
     */
    private $expediente;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Materia
     */
    private $materia;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $profesor;


    /**
     * Set anyo
     *
     * @param string $anyo
     * @return Materiamatriculada
     */
    public function setAnyo($anyo)
    {
        $this->anyo = $anyo;

        return $this;
    }

    /**
     * Get anyo
     *
     * @return string 
     */
    public function getAnyo()
    {
        return $this->anyo;
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
     * Set expediente
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Alumno $expediente
     * @return Materiamatriculada
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
     * Set materia
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Materia $materia
     * @return Materiamatriculada
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
     * @return Materiamatriculada
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
