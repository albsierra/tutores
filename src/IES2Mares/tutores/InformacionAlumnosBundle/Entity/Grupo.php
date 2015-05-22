<?php

namespace IES2Mares\tutores\InformacionAlumnosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 */
class Grupo
{
    /**
     * @var string
     */
    private $anyo;

    /**
     * @var string
     */
    private $grupo;

    /**
     * @var string
     */
    private $subgrupo;

    /**
     * @var string
     */
    private $ensenanza;

    /**
     * @var integer
     */
    private $curso;

    /**
     * @var string
     */
    private $horariovisita;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor
     */
    private $tutor;


    /**
     * Set anyo
     *
     * @param string $anyo
     * @return Grupo
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
     * Set grupo
     *
     * @param string $grupo
     * @return Grupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set subgrupo
     *
     * @param string $subgrupo
     * @return Grupo
     */
    public function setSubgrupo($subgrupo)
    {
        $this->subgrupo = $subgrupo;

        return $this;
    }

    /**
     * Get subgrupo
     *
     * @return string 
     */
    public function getSubgrupo()
    {
        return $this->subgrupo;
    }

    /**
     * Set ensenanza
     *
     * @param string $ensenanza
     * @return Grupo
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
     * @param integer $curso
     * @return Grupo
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return integer 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set horariovisita
     *
     * @param string $horariovisita
     * @return Grupo
     */
    public function setHorariovisita($horariovisita)
    {
        $this->horariovisita = $horariovisita;

        return $this;
    }

    /**
     * Get horariovisita
     *
     * @return string 
     */
    public function getHorariovisita()
    {
        return $this->horariovisita;
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
     * Set tutor
     *
     * @param \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $tutor
     * @return Grupo
     */
    public function setTutor(\IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor $tutor = null)
    {
        $this->tutor = $tutor;

        return $this;
    }

    /**
     * Get tutor
     *
     * @return \IES2Mares\tutores\InformacionAlumnosBundle\Entity\Profesor 
     */
    public function getTutor()
    {
        return $this->tutor;
    }
}
