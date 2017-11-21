<?php

namespace AppBundle\Entity;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $idclient;

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
     * Get idclient
     *
     * @return integer
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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

