<?php

namespace App\Entity;

use App\Repository\NotaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotaRepository::class)
 */
class Nota
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Estudiante::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $estudiante_id;

    /**
     * @ORM\ManyToOne(targetEntity=Curso::class, inversedBy="notas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curso_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $nota;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstudianteId(): ?Estudiante
    {
        return $this->estudiante_id;
    }

    public function setEstudianteId(?Estudiante $estudiante_id): self
    {
        $this->estudiante_id = $estudiante_id;

        return $this;
    }

    public function getCursoId(): ?Curso
    {
        return $this->curso_id;
    }

    public function setCursoId(?Curso $curso_id): self
    {
        $this->curso_id = $curso_id;

        return $this;
    }

    public function getNota(): ?string
    {
        return $this->nota;
    }

    public function setNota(string $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}
