<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 */
class Pregunta
{
    /**
     * @var string
     */
    private $enunciado;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var integer
     */
    private $obligatoria;

    /**
     * @var integer
     */
    private $incluidapordefecto;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $creador;


    /**
     * Set enunciado
     *
     * @param string $enunciado
     * @return Pregunta
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;

        return $this;
    }

    /**
     * Get enunciado
     *
     * @return string 
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Pregunta
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set obligatoria
     *
     * @param integer $obligatoria
     * @return Pregunta
     */
    public function setObligatoria($obligatoria)
    {
        $this->obligatoria = $obligatoria;

        return $this;
    }

    /**
     * Get obligatoria
     *
     * @return integer 
     */
    public function getObligatoria()
    {
        return $this->obligatoria;
    }

    /**
     * Set incluidapordefecto
     *
     * @param integer $incluidapordefecto
     * @return Pregunta
     */
    public function setIncluidapordefecto($incluidapordefecto)
    {
        $this->incluidapordefecto = $incluidapordefecto;

        return $this;
    }

    /**
     * Get incluidapordefecto
     *
     * @return integer 
     */
    public function getIncluidapordefecto()
    {
        return $this->incluidapordefecto;
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
     * @return Pregunta
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
}
