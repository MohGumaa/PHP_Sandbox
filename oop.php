<?php
	/**
	 * 
	 */
	class Person{
		private $name; // public, protected[we can access form class or any extended]
		private $email;
		public static $ageLimit = 50;
		#private static $ageLimit = 50;

		public function __construct($name, $email){ // It's Running when we create an object
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__.' Created <br>'; # To get name of the class
		}

		public function __destruct(){ 
			echo __CLASS__.' Destroyed<br>'; 
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getName() {
			return $this->name.'<br>';
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail() {
			return $this->email.'<br>';
		}

		public function getAgeLimit() {
			return self::$ageLimit;
		}
	}


	# Static Property
	echo Person::$ageLimit.'<br>';
	#echo Person::$getAgeLimit();

	#$person1 = new Person('John Doe', 'Gom@gmail.com');

	#$person1->setName('John Doe');
	#echo $person1->getName();

	#$person1->name = 'John Doe';
	#echo $person1->name;

	class Customer extends Person {
		private $balance;

		public function __construct($name, $email, $balance){
			parent::__construct($name, $email, $balance);
			$this->balance = $balance;
			echo 'A new '.__CLASS__.' has been created<br>';
		}

		public function setBalance($balance){
			$this->balance = $balance;
		}

		public function getBalance() {
			return $this->balance.'<br>';
		}
	}

	$customer1 = new Customer('John Doe', 'Gom@gmail.com', 400);

	echo $customer1->getBalance();