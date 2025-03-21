<?php
class User {
    public string $name;
    public string $email;
    public int $age;

    public function __construct(string $name, string $email, int $age)
    {
        $this->age = $age;
        $this->email = $email;
        $this->name = $name;
    }

    public function displayInfo()
    {
        echo "Name: $this->name, Email: $this->email, Age: $this->age";
    }
}

?>