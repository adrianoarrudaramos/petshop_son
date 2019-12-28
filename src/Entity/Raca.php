<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=50)
     */
    private $nome;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id")
     */
    private $especie;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of especie
     *
     * @return  object
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of especie
     *
     * @param  object  $especie
     *
     * @return  self
     */
    public function setEspecie(object $especie)
    {
        $this->especie = $especie;

        return $this;
    }

    public function getNomeEspecie()
    {
        return $this->getEspecie() ? $this->getEspecie()->getNome() : null;
    }
}
