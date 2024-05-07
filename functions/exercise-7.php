<?php
class person{
    public $name;
    public $cash;
    public $licenses = [];

    public function __construct($name,$licenses,$cash){
        $this ->name = $name;
        $this ->licenses = $licenses;
        $this ->cash = $cash;
    }
    public function validLicense($requiredLicense)
    {
        return in_array($requiredLicense, $this->licenses);
    }
    public function purchaseGun($gun){
        if($this->validLicense($gun->license) && $this->cash >= $gun->price){
            $this->cash -= $gun->price;
            return true;
        }else{
            return false;
        }
    }
}

class guns{
    public $license;
    public $price;
    public $name;
    public function __construct($name,$license,$price)
    {
        $this ->name = $name;
        $this ->license = $license;
        $this ->price = $price;
    }
}

$guns = [
    new guns("Pistol", "A", 500),
    new guns("Rifle", "B", 1000),
    new guns("Shotgun", "C", 1500)
];
$person = new Person("John", ["A", "B"], 2000);
$gunToPurchase = $guns[0];
if($person->purchaseGun($gunToPurchase)){
    echo $person->name . " purchased a " . $gunToPurchase->name . " for $" . $gunToPurchase->price . ". Remaining cash: $" . $person->cash . "\n";
} else {
    echo $person->name . " cannot purchase a " . $gunToPurchase->name . ". Insufficient funds or missing required license.\n";
}
