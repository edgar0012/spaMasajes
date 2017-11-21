<?php

namespace AppBundle\Entity;

/**
 * Masajes
 */
class Masajes
{
    /**
     * @var integer
     */
    private $idmasaje;

    /**
     * @var \DateTime
     */
    private $fechaservicio;

    /**
     * @var string
     */
    private $tipomasaje;

    /**
     * @var string
     */
    private $lugar;

    /**
     * @var \AppBundle\Entity\Cliente
     */
    private $idclient;

    /**
     * @var \AppBundle\Entity\Empleado
     */
    private $idempleado;


    /**
     * Get idmasaje
     *
     * @return integer
     */
    public function getIdmasaje()
    {
        return $this->idmasaje;
    }

    /**
     * Set fechaservicio
     *
     * @param \DateTime $fechaservicio
     *
     * @return Masajes
     */
    public function setFechaservicio($fechaservicio)
    {
        $this->fechaservicio = $fechaservicio;

        return $this;
    }

    /**
     * Get fechaservicio
     *
     * @return \DateTime
     */
    public function getFechaservicio()
    {
        return $this->fechaservicio;
    }

    /**
     * Set tipomasaje
     *
     * @param string $tipomasaje
     *
     * @return Masajes
     */
    public function setTipomasaje($tipomasaje)
    {
        $this->tipomasaje = $tipomasaje;

        return $this;
    }

    /**
     * Get tipomasaje
     *
     * @return string
     */
    public function getTipomasaje()
    {
        return $this->tipomasaje;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Masajes
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set idclient
     *
     * @param \AppBundle\Entity\Cliente $idclient
     *
     * @return Masajes
     */
    public function setIdclient(\AppBundle\Entity\Cliente $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set idempleado
     *
     * @param \AppBundle\Entity\Empleado $idempleado
     *
     * @return Masajes
     */
    public function setIdempleado(\AppBundle\Entity\Empleado $idempleado = null)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return \AppBundle\Entity\Empleado
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }
}

