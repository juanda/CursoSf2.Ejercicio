<?php

namespace Jazzyweb\CursoSf2\BackendBundle\Entity;


class Tag {

    private $nombre;

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     *
     * @Assert\Type(type="string", message="El valor {{ value }} debe ser una cadena."
     * @Assert\Length(
     *      min = 2,
     *      max = 150,
     *      minMessage = "El nombre de la etiqueta debe tener {{ limit }} caracteres al menos",
     *      maxMessage = "El nombre de la etiqueta no puede ser mayor que {{ limit }} caracteres"
     * )
     */
    public function getNombre()
    {
        return $this->nombre;
    }



}