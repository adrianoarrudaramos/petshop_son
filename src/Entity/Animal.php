<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
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
     * @var date
     * 
     * @ORM\Column(type="date")
     */
    private $data_nascimento;

    /**
     * @var object
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Cliente", mappedBy="animal")
     */
    private $cliente;

    /**
     * @var object
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Raca", inversedBy="id")
     */
    private $raca;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nome
     *
     * @return  string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of data_nascimento
     *
     * @return  date
     */
    public function getdata_nascimento()
    {
        return $this->data_nascimento;
    }

    public function dataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * Set the value of data_nascimento
     *
     * @param  date  $data_nascimento
     *
     * @return  self
     */
    public function setDataNascimento(DateTime $data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }

    /**
     * Get the value of cliente
     *
     * @return  object
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @param  object  $cliente
     *
     * @return  self
     */
    public function setCliente(object $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get the value of raca
     *
     * @return  object
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     *
     * @param  object  $raca
     *
     * @return  self
     */
    public function setRaca(object $raca)
    {
        $this->raca = $raca;

        return $this;
    }
}
