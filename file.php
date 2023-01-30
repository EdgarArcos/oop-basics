<?php
//clase base
class animal
{
    const USER_FILES_PATH = './files/animals/';
    const animal = 'unknow';
    private string $tipeAnimal = 'Cat';
    private int $age = 2;
    private string $owner = 'Paco';

    public function __construct(string $animalName, int $age, string $owner)
    {
        $this->tipeAnimal = $animalName;
        $this->age = $age;
        $this->owner = $owner;
    }
    
    public function gettipe()
    {
        return $this->tipeAnimal;
        
    }
    public function setName($nameAnimal)
    {
        $this->tipeAnimal = $nameAnimal;

        return $this;
    }
    public static function dog()
    {
        return [
        'wauf'
    ];
    }  
    public static function cat()
    {
        return [
        'miau'
    ];
    }  
}

$animal = new animal('bota','3','Paco');
echo $animal->gettipe();
//herencia de clase base
class myAnimal extends animal
{
    const animal = 'know';
    private static string $animalDNI = '5432198B';
    private string $tipeAnimal = 'Dog';

    private int $age = 2;

    public function __construct(string $animalName,string $animalDNI)
    {
        $this->tipeAnimal = $animalName;
        $this->animalDNI = $animalDNI;
    }

    public function setDNI($DNI)
    {
        $this->animalDNI = $DNI;

        return $this;
    }
    public static function dog()
    {
        return [
        'GUAAAUF'
    ];
    }
    public static function cat()
    {
        return [
            'miaAAAAAAAUUUUUUu'
        ];
    }
}

//clase abstracta
abstract class pulpo
{
    private string $tipeAnimal = 'Pulpo';
    private string $DNI = '8888888P';
    abstract public function gettipe();
    abstract public function swimming();

}
//interface
interface animals {
    public function eat():string;
    public function jump():string;
}

?>