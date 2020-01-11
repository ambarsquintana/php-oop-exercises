<?php

class Person
{
    protected $fistName;
    protected $lastName;
    protected $dateBirth;
    protected $nickName;

    public function __construct($firstName, $lastName, $dateBirth, $nickName)
    {
        $this->fistName = $firstName;
        $this->lastName = $lastName;
        $this->dateBirth = $dateBirth;
        $this->nickName = $nickName;
    }

    public function fullName()
    {
        return $this->fistName . ' ' . $this->lastName;
    }

    //Getters Methods
    public function getAge()
    {
        $today = new DateTime('now');
        $this->dateBirth = new DateTime($this->dateBirth);

        return $this->dateBirth->diff($today)->format('%y años');
    }

    public function getNickName()
    {
        return $this->nickName;
    }

    //Setters Methods
    public function setNickName($nick)
    {
        if (strlen($nick) > 2 && $this->fistName != $nick && $this->lastName != $nick) {
            $this->nickName = $nick;
        }
    }
}

/////////////////////////

$person = new Person('Amy', 'Lee', '1981-12-13', 'amylee');

echo "<p> <b> Data </b> </p>";
echo "<p> Name: {$person->fullName()} </p>";
echo "<p> Age: {$person->getAge()} </p>";
echo "<p> Nick: {$person->getNickName()} </p>";

echo "<hr>";

echo "<p> <b> Nickname change </b> </p>";
$person->setNickName('leeamy');
echo "Nick: {$person->getNickName()}";
