<?php 
class Employee {

  private $name;
  private $age;
  private $salary;

  public function __construct($name, $age, $salary) {
    $this->name = $name;
    $this->setAge($age);
     $this->setSalary($salary);

  }
  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }


  
  public function getSalary() {
    return $this->salary;
  }
  public function setSalary($salary) {
    if($salary < 0)
    {
      throw new InvalidArgumentException("Salary should be Postive not negative");
    }
    $this->salary = $salary;
  }




  public function getAge() {
    return $this->age;
  }

  public function setAge($age) {
    if($age <18)
    {
      throw new InvalidArgumentException("Age should be greater than 18");
    }
    $this->age = $age;
  }
}

  try{

      $bj = new Employee("John", 25, 5000);
      
      echo "Name of Employee is: ". $bj->getName();
      echo "Salary of Employee is: ". $bj->getSalary();
      echo "Age of Employee is: ". $bj->getAge();

      $bj->setSalary(-5000);
      echo "Salary of Employee is: ". $bj->getSalary();

      $bj->setAge(15);
      echo "Age of Employee is: ". $bj->getAge();

  }catch(Exception $e){
    echo "Error: ". $e->getMessage();
  };


