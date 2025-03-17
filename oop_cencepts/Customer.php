<?php

/** Example of public access modifier */
// class Customer {
//     public $name;

//     public function getName()
//     {
//         return $this->name;
//     }
// }

// $customer = new Customer();
// $customer->name = "Omar";

// echo "My name is: ". $customer->getName();


/** Example of Private access modifier */ 
class Customer {
    private $name;

    public function setName(string $customerName): bool {
        if (!empty(trim($customerName))) {
            $this->name = $customerName;

            return true;
        }

        return false;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$customer = new Customer();
$customer->setName("Omar");

echo "My name is: ". $customer->getName();
?>