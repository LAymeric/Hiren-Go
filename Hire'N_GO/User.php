<?php

    class USER{
        public $email;
        public $pwd;
        public $name;
        public $firstname;
        public $birthday;
        public $postalCode;
        public $city;
        public $country;
        public $address;
        public $phone;

        public function __construct($e, $p,$n,$f,$b,$postal,$c,$country,$a,$phone){
            $this->email=$e;
            $this->pwd=$p;
            $this->name=$a;
            $this->firstname=$f;
            $this->birthday=$b;
            $this->postalCode=$postal;
            $this->city=$c;
            $this->country=$country;
            $this->address=$a;
            $this->phone=$phone;

        }


        public function addUser($newEmail, $newPassword, $name,$firstname,$birthday,$postalCode,$city,$country,$address,$phone/*,$registration_date*/){
            include_once "functions.php";         
            $connection = connectDB();

            $insertUser = $connection->prepare("INSERT INTO member (email, pwd,name,firstname,birthday,postalCode,city,country,address,phone,registration_date) VALUES(:email,:pwd,:name,:firstname,:birthday,:postalCode,:city,:country,:address,:phone/*,:registration_date*/)");
            $insertUser ->execute(array
                                    ("email"=> $newEmail,
                                     "pwd"=>$newPassword,
                                     "name"=>$name,
                                     "firstname"=>$firstname,
                                     "birthday"=>$birthday,
                                     "postalCode"=>$postalCode,
                                     "city"=>$city,
                                     "address"=>$address,
                                     "phone"=>$phone
                                     /*"registration_date"=>$registration_date,*/
                                    ));

            header('Location: ../login.php');
        }
    }
