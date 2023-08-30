<?php
    class User {
        protected $name;
        protected $address;
        protected $birthDate;

        function __construct($name, $address, $birthDate) {
            $this->name = $name;
            $this->address = $address;
            $this->birthDate = $birthDate;
        }
        
        function set_name($name){
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_address($address){
            $this->address = $address;
        }

        function get_address() {
            return $this->address;
        }
        function set_birthDate($birthDate){
            $this->birthDate = $birthDate;
        }

        function get_birthDate() {
            return $this->birthDate;
        }
    }

    $user = new User('Jane Doe', 'Home 12', 'Yesterday');
    $user->set_name('Beatrice Annadotter');
    echo $user->get_name() . ' ' . $user->get_address() . ' ' . $user->get_birthDate();

    class Employee extends User {
        protected $company;
        protected $salary;

        function __construct($name, $address, $birthDate, $comapny, $salary)
        {
            parent::__construct($name, $address, $birthDate);
            $this->company = $comapny;
            $this->salary = $salary;
        }
        function get_company() {
            return $this->company;
        }
        function get_salary() {
            return $this->salary;
        }
    }

    $employee = new Employee('Indiana Jones', 'Street 3', 'Tomorrov', 'Big Company', 999999);

    echo '<br><br>' . $employee->get_name() . ' ' . $employee->get_company() . ' ' . $employee->get_salary();
?>