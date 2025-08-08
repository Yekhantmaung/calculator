<?php

// Calculator class
class Calculator
{
    private $result = 0;

    public function add($a, $b)
    {
        $this->result = $a + $b;
        return $this->result;
    }

    public function subtract($a, $b)
    {
        $this->result = $a - $b;
        return $this->result;
    }

    public function multiply($a, $b)
    {
        $this->result = $a * $b;
        return $this->result;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new Exception("Cannot divide by zero.");
        }

        $this->result = $a / $b;
        return $this->result;
    }

    public function getResult()
    {
        return $this->result;
    }
}

// Function that uses the Calculator class
function performCalculations()
{
    $calc = new Calculator();

    echo "Add: " . $calc->add(10, 5) . "\n"."<br>";
    echo "Subtract: " . $calc->subtract(10, 5) . "\n"."<br>";
    echo "Multiply: " . $calc->multiply(10, 5) . "\n"."<br>";
    echo "Divide: " . $calc->divide(10, 5) . "\n";
}

// Run the function
performCalculations();
