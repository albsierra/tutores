<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 */
class Materia
{
    /**
     * @var string
     */
    private $materia;

    /**
     * @var string
     */
    private $ensenanza;

    /**
     * @var string
     */
    private $curso;

    /**
     * @var string
     */
    private $codigo;


    /**
     * Set materia
     *
     * @param string $materia
     * @return Materia
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return string 
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set ensenanza
     *
     * @param string $ensenanza
     * @return Materia
     */
    public function setEnsenanza($ensenanza)
    {
        $this->ensenanza = $ensenanza;

        return $this;
    }

    /**
     * Get ensenanza
     *
     * @return string 
     */
    public function getEnsenanza()
    {
        return $this->ensenanza;
    }

    /**
     * Set curso
     *
     * @param string $curso
     * @return Materia
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return string 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
