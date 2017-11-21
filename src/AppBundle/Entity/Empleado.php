<?php

namespace AppBundle\Entity;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var integer
     */
    private $idempleado;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $sexo;


    /**
     * Get idempleado
     *
     * @return integer
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function __tostring()
    {
        return $this->nombre;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Empleado
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Empleado
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }
}

