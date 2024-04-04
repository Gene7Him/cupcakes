<!--
Eugene Faison, Vlad O
4/4/24
http://www.gene7.greenriverdev.com/328/cupcakes/index.php
-->



<html>


<form action='process.php' method='POST'>
    <label>Your Name:</label>
    <input type='text' id='user-name' name='user-name'>
    <label>Cupcake Flavors:</label>
    <input type='checkbox' name='flavor[]' value='Tiramisu'>Tiramisu</input>
    <input type='checkbox' name='flavor[]' value='The Grasshopper'>The Grasshopper</input>
    <input type='checkbox' name='flavor[]' value='Whiskey Maple Bacon'>Whiskey Maple Bacon</input>
    <input type='checkbox' name='flavor[]' value='Carrot Walnut'>Carrot Walnut</input>
    <input type='checkbox' name='flavor[]' value='Salted Caramel Cupcake'>Salted Caramel Cupcake</input>
    <input type='checkbox' name='flavor[]' value='Red Velvet'>Red Velvet</input>
    <input type='checkbox' name='flavor[]' value='Lemon Drop'>Lemon Drop</input>
    <button type='submit'>Order</button>


</form>
</html>
