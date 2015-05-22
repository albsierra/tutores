<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preguntaincorporada
 */
class Preguntaincorporada
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Pregunta
     */
    private $pregunta;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Cuestionario
     */
    private $cuestionario;


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
     * Set pregunta
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Pregunta $pregunta
     * @return Preguntaincorporada
     */
    public function setPregunta(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Pregunta $pregunta = null)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Pregunta 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set cuestionario
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Cuestionario $cuestionario
     * @return Preguntaincorporada
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
