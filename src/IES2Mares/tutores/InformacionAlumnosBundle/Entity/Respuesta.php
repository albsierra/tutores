<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 */
class Respuesta
{
    /**
     * @var integer
     */
    private $valor;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $profesor;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Preguntaincorporada
     */
    private $preguntaincorporada;


    /**
     * Set valor
     *
     * @param integer $valor
     * @return Respuesta
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer 
     */
    public function getValor()
    {
        return $this->valor;
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
     * @return Respuesta
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
     * Set preguntaincorporada
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Preguntaincorporada $preguntaincorporada
     * @return Respuesta
     */
    public function setPreguntaincorporada(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Preguntaincorporada $preguntaincorporada = null)
    {
        $this->preguntaincorporada = $preguntaincorporada;

        return $this;
    }

    /**
     * Get preguntaincorporada
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Preguntaincorporada 
     */
    public function getPreguntaincorporada()
    {
        return $this->preguntaincorporada;
    }
}
