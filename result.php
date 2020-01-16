<?php

echo "<h1>The zoo that you chose</h1>";

abstract class Animal {

    protected $name;
    public $picture;

    public function getName() {
        return $this->name;
    }

    abstract function makeSound() ;
}


class Monckey extends Animal {

    function __construct($iName, $iurl) {
        $this->name = $iName;
        $this->picture = $iurl;
    }

    public function makeSound() {
        return "OAOOAOOAOA!";
    }
}

class Giraffe extends Animal {

    function __construct($iName, $iurl) {
        $this->name = $iName;
        $this->picture = $iurl;
    }

    public function makeSound() {
        return "blopiiibloopiii!";
    }
}


class Tiger extends Animal {

    function __construct($iName, $iurl) {
        $this->name = $iName;
        $this->picture = $iurl;
    }

    public function makeSound() {
        return "roggaaaaaa!";
    }
}

class Coconut {
    
    public $name; 
    
    function __construct($iurl) {
        $this->name = "COCOCOCO";
        $this->picture = $iurl;
    }

    public function makeSound() {
        return "beeeeeem, tshhh!";
    }
}


$Names = array(
    "Rebii",
    "zelo",
    "naro",
    "sabbe",
    "lido"
);

$animalsArray = array();

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numberOfMonckeys = $_POST["monckeysNR"];
        $numberOfGiraffes = $_POST["giraffesNR"];
        $numberOfTigers = $_POST["tigersNR"];
        $numberOfCoconuts = $_POST["coconutsNR"];

        for ($i=1; $i <= $numberOfMonckeys; $i++) {
            $Monckey = new Monckey($Names[$i-1],"monkeyPic.png");
            array_push($animalsArray, $Monckey);
        }


        for ($i=1; $i <= $numberOfGiraffes; $i++) {
            $Giraffe = new Giraffe($Names[$i-1],"giraffePNG.png");
            array_push($animalsArray, $Giraffe);
        }


        for ($i=1; $i <= $numberOfTigers; $i++) {
            $Tiger = new Tiger($Names[$i-1],"tigerPic.jpeg");
            array_push($animalsArray, $Tiger);
        }


        for ($i=1; $i <= $numberOfCoconuts; $i++) {
            $Coconut = new Coconut("coconutPic.png");
            array_push($animalsArray, $Coconut);
        }

        for($i=0; $i < count($animalsArray); $i++) {

            if (method_exists($animalsArray[$i], "getName")) {
                $theName = $animalsArray[$i]->getName();
            }else{
                $theName = $animalsArray[$i]->name;
            }
            $alert = 'alert("';
            $alert .= $animalsArray[$i]->makeSound();
            $alert .=' '.'My name is'.' ';
            $alert .= $theName;
            $alert .= '")';
            
            $ipic = "<img onclick='".$alert."' style='width:10em; height:auto;' src='" . $animalsArray[$i]->picture . "'/>";
            echo $ipic;
        };

    } else {
            
        echo json_encode("not a POST method");
        exit;
    }

} else {

    echo json_encode("No valid request");
    exit;
}
?>