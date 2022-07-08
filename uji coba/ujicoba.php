<!DOCTYPE html>
<html>
<head>
	<title>Valorant Agent & Map Pick</title>
    <style>
		img{height: 200px; width: 400px}
	</style>
</head>
<body>
<?php


//Duelist Agents

trait duelist {

    public function agentRaze(){
        echo "This player using = Raze";
    }

    public function agentPhoenix(){
        echo "This player using = Phoenix";
    }

    public function agentReyna(){
        echo "This player using = Reyna";
    }

    public function agentYoru(){
        echo "This player using = Yoru";
    }

    public function agentNeon(){
        echo "This player using = Neon";
    }

    public function agentJett(){
        echo "This player using = Jett";
    }

}


//Initiator Agents

trait initiator {

    public function agentKAYO(){
        echo "This player using = KAYO";
    }

    public function agentSkye(){
        echo "This player using = Skye";
    }

    public function agentSova(){
        echo "This player using = Sova";
    }

    public function agentBreach(){
        echo "This player using = Breach";
    }

}


//Controller Agents

trait controller {
    public function agentOmen(){
        echo "This player using = Omen";
    }

    public function agentBrimstone(){
        echo "This player using = Brimstone";
    }

    public function agentAstra(){
        echo "This player using = Astra";
    }

    public function agentViper(){
        echo "This player using = Viper";
    }
}



//Sentinels Agents

trait sentinels {

    public function agentChamber(){
        echo "This player using = Chamber";
    }

    public function agentSage(){
        echo "This player using = Sage";
    }

    public function agentKilljoy(){
        echo "This player using = Killjoy";
    }

    public function agentCypher(){
        echo "This player using = Cypher";
    }
}




//Duelist
class Duelists {
    use duelist;
}

class Initiators {
    use initiator;
}

class Controllers {
    use controller;
}

class Sentinelss {
    use sentinels;
}

//Map Selection
// $maps = array(
//     'PEARL',
//     'FRACTURE',
//     'BREEZE',
//     'ICEBOX',
//     'BIND',
//     'HAVEN',
//     'SPLIT',
//     'ASCENT',
// );


// //Execute

// //Map selection
// echo "Map: ";
// $pick = array_rand($maps);
// echo $maps[$pick];
// echo "<br><br>";

function gambar() {
    $maps = array(
        'PEARL',
        'FRACTURE',
        'BREEZE',
        'ICEBOX',
        'BIND',
        'HAVEN',
        'SPLIT',
        'ASCENT',
    );
    
    
    //Execute
    
    //Map selection
    echo "Map: ";
    $pick = array_rand($maps);
    echo $maps[$pick];
    echo "<br><br>";

    if ($pick == 0){
        echo "<img src=pearl.jpg><br><br>";
    }else if ($pick == 1) {
        echo "<img src=fracture.png><br><br>";
    }else if ($pick == 2) {
        echo "<img src=breeze.png><br><br>";
    }else if ($pick == 3) {
        echo "<img src=icebox.png><br><br>";
    }else if ($pick == 4) {
        echo "<img src=bind.jpg><br><br>";
    }else if ($pick == 5) {
        echo "<img src=haven.jpg><br><br>";
    }else if ($pick == 6) {
        echo "<img src=split.png><br><br>";
    }else if ($pick == 7) {
        echo "<img src=ascent.png><br><br>";
    }else {
        return "<br><br>";
    }
}

gambar();


//Team 1 agents selections !!!
echo "Team 1 Agents selection<br>";

echo "1. ";
$duelist = new Duelists();
$duelist->agentJett();
echo "<br>";

echo "2. ";
$duelist = new Duelists();
$duelist->agentReyna();
echo "<br>";

echo "3. ";
$sentinels = new Sentinelss();
$sentinels->agentChamber();
echo "<br>";

echo "4. ";
$controller = new Controllers();
$controller->agentAstra();
echo "<br>";

echo "5. ";
$initiator = new Initiators();
$initiator->agentBreach();
echo "<br><br>";



//Team 2 agents selections !!!
echo "Team 2 Agents selection<br>";

echo "1. ";
$duelist = new Duelists();
$duelist->agentRaze();
echo "<br>";

echo "2. ";
$duelist = new Sentinelss();
$duelist->agentKilljoy();
echo "<br>";

echo "3. ";
$sentinels = new Sentinelss();
$sentinels->agentChamber();
echo "<br>";

echo "4. ";
$controller = new Controllers();
$controller->agentBrimstone();
echo "<br>";

echo "5. ";
$initiator = new Initiators();
$initiator->agentSova();
echo "<br><br>";


?>

</body>
</html>


