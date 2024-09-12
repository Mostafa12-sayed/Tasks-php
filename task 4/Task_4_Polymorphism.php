<?php 

abstract class Animal {
  abstract public function makeSound();
}

class Dog extends Animal {
  public function makeSound() {
    return "Woof";
  }
}

class Cat extends Animal {
  public function makeSound() {
    return "Meow";
  }
}

class Bird extends Animal {
  public function makeSound() {
    return "Tweet";
  }
}

$dog = new Dog();
echo get_class($dog) . " says ". $dog->makeSound(); // Output: Dog says Woof 

$cat = new Cat();
echo get_class($cat) . " says ". $cat->makeSound(); // Output: Cat says Meow

$bird = new Bird();
echo get_class($bird) . " says ". $bird->makeSound(); // Output: Bird says Tweet



?>
