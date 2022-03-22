// 1D6+3D4
let dices = '1D6+3D4';
let diceList = dices.split('+');

let total = 0;

for (let dice in diceList) {
    let diceValues = diceList[dice].split('D');

    if (diceValues.length > 1) {
        for (let i = 0; i < diceValues[0]; i++) {
            let rand = Math.random();
            total += Math.floor(rand * diceValues[1]) + 1;
        }
    } else {
        total += diceValues[0];
    }
}

console.log(total);
/*
// $diceList = explode("+", mb_strtoupper($this->request->getPost('dice')));

// $_SESSION['dice'] = $this->request->getPost('dice');
//on se prépare à compter
$total = 0;
//pour chaque dè dans notre tableau de valeurs de dès

foreach ($diceList as $die) {
    //on sépare le nombre de lancers du nombre de faces
    $dieValues = explode("D", $die);
    //si on a plusieurs valeurs, c'est qu'il s'agit bien d'un dè et non d'une valeur unique
    if (count($dieValues) > 1) {
        //dans ce cas on lance autant de dès que nécessaire
        for ($i = 0; $i < $dieValues[0]; $i++) {
            $total += rand(1, $dieValues[1]);
        }
    } else {
        $total += $dieValues[0];
    }
}

$_SESSION['dice_total'] = $total;
*/