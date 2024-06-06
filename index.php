<?php
$name = 'Крис Авеллон';
$city = 'Александрия';
$age = '52 года';
$waitingForGame = 'Fallout 3 Van Buren';
$gameDigit = 3;
$good = 2;
$bad = 76;
$greet = 'Приветствую смотрящих!';


function printGameNumber($game) {
  global $gameDigit;
  for ($i = 1; $i < $gameDigit; $i++) {
      echo "{$game} {$i};<br>\n";
	}
}

?>

<?php
    include 'main.php';
?>
