<?php

namespace Jazzyweb\CursoSf2\BackendBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

class Iframe {

    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="El valor {{ value }} debe ser una cadena.")
     * @Assert\Length(
     *      min = 2,
     *      max = 150,
     *      minMessage = "El nombre del iframe debe tener {{ limit }} caracteres al menos",
     *      maxMessage = "El nombre del iframe no puede ser mayor que {{ limit }} caracteres"
     * )
     */
    private $nombre;

    /**
     * @Assert\Type(type="string", message="El valor {{ value }} debe ser una cadena.")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "El nombre del archivo debe tener {{ limit }} caracteres al menos",
     *      maxMessage = "El nombre del archivo no puede ser mayor que {{ limit }} caracteres"
     * )
     * @Assert\Regex(
     *      pattern="^[\w,\s-]+\.html",
     *      message="Nombre de fichero no válido"
     * )
     */
    private $nombreArchivo;

    private $tags;

    /**
     * @Assert\Type(type="string", message="El valor {{ value }} debe ser una cadena.")
     * @Assert\Length(
     *      min = 2,
     *      max = 150,
     *      minMessage = "El nombre del autor debe tener {{ limit }} caracteres al menos",
     *      maxMessage = "El nombre del autor no puede ser mayor que {{ limit }} caracteres"
     * )
     */
    private $autor;

    /**
     * @Assert\Type(type="string", message="El valor {{ value }} debe ser una cadena.")
     * @Assert\Email(
     *     message = "La dirección '{{ value }}' no es un email válido.",
     *     checkMX = true
     * )
     */
    private $emailAutor;

    /**
     * @Assert\Date()
     */
    private $fechaCreacion;

    /**
     * @Assert\Date()
     */
    private $fechaActualizacion;

    /**
     * @Assert\Type(type="integer", message="El valor {{ value }} debe ser un número entero.")
     * @Assert\Range(
     *      min = 100,
     *      max = 1800,
     *      minMessage = "Al menos debe tener una anchura de {{ limit }}",
     *      maxMessage = "No puede tener una anchura mayor que {{ limit }}"
     * )
     */
    private $anchura;

    /**
     * @Assert\Type(type="integer", message="El valor {{ value }} debe ser un número entero.")
     * @Assert\Range(
     *      min = 100,
     *      max = 1800,
     *      minMessage = "Al menos debe tener una altura de {{ limit }}",
     *      maxMessage = "No puede tener una altura mayor que {{ limit }}"
     * )
     */
    private $altura;

    /**
     * @Assert\NotBlank()
     * @Assert\File(
     *      maxSize="6000000",
     *      mimeTypes = {"text/html"},
     *      mimeTypesMessage = "Por favor sube un HTML válido"
     * )
     */
    private $file;

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $anchura
     */
    public function setAnchura($anchura)
    {
        $this->anchura = $anchura;
    }

    /**
     * @return mixed
     */
    public function getAnchura()
    {
        return $this->anchura;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $emailAutor
     */
    public function setEmailAutor($emailAutor)
    {
        $this->emailAutor = $emailAutor;
    }

    /**
     * @return mixed
     */
    public function getEmailAutor()
    {
        return $this->emailAutor;
    }

    /**
     * @param mixed $fechaActualizacion
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;
    }

    /**
     * @return mixed
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * @param mixed $fechaCreacion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param mixed $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombreArchivo
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;
    }

    /**
     * @return mixed
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }
}