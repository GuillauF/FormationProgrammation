<?php

namespace App\Entity;

use App\Repository\CalculatorRepository;
use AppBundle\Entity\Operation\Add;
use AppBundle\Entity\Operation\Divide;
use AppBundle\Entity\Operation\Multiply;
use AppBundle\Entity\Operation\Subtract;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalculatorRepository::class)]
class Calculator
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $firstNumber;

    #[ORM\Column(type: 'integer')]
    private $secondNumber;

    #[ORM\Column(type: 'integer')]
    private $operand;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstNumber(): ?int
    {
        return $this->firstNumber;
    }

    public function setFirstNumber(int $firstNumber): self
    {
        $this->firstNumber = $firstNumber;

        return $this;
    }

    public function getSecondNumber(): ?int
    {
        return $this->secondNumber;
    }

    public function setSecondNumber(int $secondNumber): self
    {
        $this->secondNumber = $secondNumber;

        return $this;
    }

    public function getOperand(): ?int
    {
        return $this->operand;
    }

    public function setOperand(int $operand): self
    {
        $this->operand = $operand;

        return $this;
    }

    public function performCalculation()
    {
        switch ($this->getOperand())
        {
            case "add":
                $operation = new Add();
                break;
            case "subtract":
                $operation = new Subtract();
                break;
            case "multiply":
                $operation = new Multiply();
                break;
            case "divide":
                $operation = new Divide();
                break;
        }

        return $operation->runCalculation($this->getFirstNumber(), $this->getSecondNumber());
    }
}
