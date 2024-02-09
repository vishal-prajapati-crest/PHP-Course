<?php
function add($num1,$num2){
    $sum=$num1+$num2;
    echo "The sum of $num1 and $num2 is $sum <br>";
}
function sub($num1,$num2){
    $diff=$num1-$num2;
    echo "The difference of $num1 and $num2 is $diff <br>";
}
if (isset($_POST['add'])) {
    add($_POST['first'],$_POST['second']);
}
if (isset($_POST['sub'])) {
    sub($_POST['first'],$_POST['second']);
}
?>
<form method="POST">
Enter First Number <input type="number" name="first"><br>
Enter second Number <input type="number" name="second"><br>
<input type="submit" name="add" value="Addition"> &nbsp;
<input type="submit" name="sub" value="Subtraction"> &nbsp;
</form>
