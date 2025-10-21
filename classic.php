<?php
class User 
{
    public $name;
    public $surname;
    public $birth;
    public $passport;

    function __construct($name, $surname, $birth, $passport)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birth = $birth;
        $this->passport = $passport;
    }

    public function editName($txt){
        $this->name = $txt;
    }
    public function editSurname($txt){
        $this->surname = $txt;
    }
    public function editBitrth($txt){
        $this->birth = $txt;
    }
    public function editPassport($txt){
        $this->passport = $txt;
    }
    public function userInfo(){
        $nameText = '<div class="prop">Имя: '.$this->name.'</div>';
        $surnameText = '<div class="prop">Фамилия: '.$this->surname.'</div>';
        $birthText = '<div class="prop">День рождения: '.$this->birth.'</div>';
        $passportText = '<div class="prop">Паспорт: '.$this->passport.'</div>';
        return '<div class="props">'.$nameText.$surnameText.$birthText.$passportText.'</div>';
    }

}
class SimpleClass
{
    public array $users = [];

    public function addUser($user){
        array_push($this->users, $user);
    }


    public function displayAllUsers(){
        foreach($this->users as $key=>$value){
            echo $value->userInfo();
        }
    }

}


$sc = new SimpleClass();

$u = new User('Sem','Semov', '01.10.2006', '1111 222222');

// $u->editName('Sem');
// $u->editSurname('Semov');
// $u->editBitrth('01.10.2006');
// $u->editPassport('1111 222222');

$u1 = new User('Nar','Assa', '20.10.2006', '2222 111111');

// $u1->editName('Nar');
// $u1->editSurname('Assa');
// $u1->editBitrth('20.10.2006');
// $u1->editPassport('2222 111111');

$sc->addUser($u);
$sc->addUser($u1);

$sc->displayAllUsers();

// вызывете фукцию addUser($user) для добавления. 
// в классе SimpleClass создаете функции для поиска ученика по имени, фамилии. 
// вывод всех учащихся
?>

