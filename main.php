<?php
$password = $_POST["password"];
$login = $_POST["login"];
class User
{
    public  $Login;
    public  $password;
    public  $name;
    public  $surname;
    public  $role;
}

/*Админ*/

class Admin extends User
{
    function __construct()
    {
        $this-> password = "cx123ht33";
        $this-> Login = "Administrator";
        $this-> role = "Админ";
        $this->name = "Ада";
        $this->surname = "Байрон";
    }
    public function printInfo()
    {
        echo "Здравствуйте" . " " .  $this-> role. " " . $this->name. " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }
}

/*Клиент*/

class client extends User
{
    function __construct()
    {
        $this-> password = "jk32512";
        $this-> Login = "Client";
        $this-> role = "Клиент";
        $this->name = "Афанасий";
        $this->surname = "Авдотьев";
    }
    public function printInfo()
    {
        echo "Здравствуйте" . " " . $this-> role. " " . $this->name. " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }
}

/*Менеджер*/

class manager extends User
{
    function __construct()
    {
        $this-> password = "tr23ss123";
        $this-> Login = "Managger";
        $this-> role = "менеджер";
        $this->name = "Иван";
        $this->surname = "Иванов";
    }
    public function printInfo()
    {
        echo "Здравствуйте" . " " . $this-> role. " " . $this->name. " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
    }
}

if ($login == "Administrator" and $password == "cx123ht33")
{
    $admin = new Admin();
    $admin -> printInfo();

}

elseif ($login == "Client" and $password == "jk32512")
{
    $client = new Client();
    $client -> printInfo();
}

elseif ($login == "Managger" and $password == "tr23ss123") {
    $manager = new Manager();
    $manager-> printInfo();
}

else {
    echo "Неверный логин или пароль";
}

?>