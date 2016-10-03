<?php

    class human{
        protected $name;
        private $family;
        private $age;

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getFamily(){
            return $this->family;
        }

        public function setFamily($family){
            $this->family = $family;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function echoHuman(){
            echo $this->name." ".$this->family." is ".$this->age." years old.";
        }

    }

    class teacher extends human{
        private $address;
        private $subjects;

        public function getAddress(){
            return $this->address;
        }

        public function setAddress($address){
            $this->address = $address;
        }

        public function getSubjects(){
            return $this->subjects;
        }

        public function setSubjects($subjects){
            $this->subjects = $subjects;
        }

        public function echoHuman(){
            echo "<br/>";
            echo "He teaches ".$this->subjects." and his address is: ".$this->address;
            echo "<br/>";
            echo "His name is ".$this->name;
        }
    }

$show1 = new human();
$show2 = new teacher();
$show1->setName("Ali");
$show1->setFamily("Karimi");
$show1->setAge("24");
$show1->echoHuman();

$show2->setName("Mamad");
$show2->setSubjects("PHP Advance");
$show2->setAddress("MFT Vanak.");
$show2->echoHuman();