<?php

    function helloWorld(): string {
        return "Hello world <br>";
    }


    function getStudentList() : array {
        return [
            ["name" => "Jhon", "age" => 32, "dob" => "1989-12-11"],
            ["name" => "Roy", "age" => 30, "dob" => "1999-12-11"],
            ["name" => "Ishan", "age" => 23, "dob" => "1996-12-11"],
        ];
    }

    function printMyName(string $name): void {
        echo "My name is $name <br>";
        return;
    }

    printMyName("Jhon");
    $result = helloWorld(); // this fucntion return the value "hello world"
    echo $result;

    $studentList = getStudentList(); // This fucntion will return the array
    
    // Use for loop to print the array
    /*for($i = 0; $i < count($studentList); $i++) {
        echo "Name: " . $studentList[$i]['name'] . "\n";
        echo "Age: " . $studentList[$i]['age'] . "\n";
        echo "Dob: " . $studentList[$i]['dob'] . "<br>";
    }*/

    echo "<table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Date of Birth</th>
            </tr>
        </thead>
        <tbody>";
        foreach ($studentList as $student) {
            
            echo "<tr>
                <td>".$student['name']."</td>
                <td>".$student['age']."</td>
                <td>".$student['dob']."</td>
            </tr>";
        }
        
        echo " </tbody>
    </table>";


    function studentRegistrationNumners(?array $registrationNumners) : ?array {
        return $registrationNumners;
    }

    $regisNumbers = ['4342342', '234234', '3423423'];

    var_dump(studentRegistrationNumners($regisNumbers));

    var_dump(studentRegistrationNumners(null));

?>