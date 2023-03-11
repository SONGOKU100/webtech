
<?php 
class Person {
    private $name, $age,$gender, $address;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}

// Create an object of the class
$person = new Person();

// Set the properties
$person->setName("John Doe");
$person->setAge(23);
$person->setGender("Male");
$person->setAddress("Kathmandu");

// Get the properties
echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";
echo "Gender: " . $person->getGender() . "<br>";
echo "Address: " . $person->getAddress() . "<br>";
?>

