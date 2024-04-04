<!--
Eugene Faison, Vlad O
4/4/24
http://www.gene7.greenriverdev.com/328/cupcakes/index.php
-->

<?php

$user_name = $_POST['user_name'];
$flavors = $_POST['flavor'];
$count = count($flavors);
$total = 3.50 * $count;

echo "
<div
 <label>Thank you, $user_name , for your order</label>
 <label>Order Summary</label>
 

</div>
";

foreach($flavors as $flavor){
    echo("
    <li>$flavor</li>");
}

echo "Order total $total";
