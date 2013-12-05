<form>
<input type="text" name="url">
</form>
<?php
//import processing class
require_once("Opinion.php");

$op = new Opinion();
//train class on negative and positive corpus (tweets)
$op->addToIndex('neg.txt', 'neg');
$op->addToIndex('pos.txt', 'pos');

//get positive or negative result from input parameter
echo $op->classify($_GET['sentence']);

?>