<?php
echo "Enter unite: ";
$unite = (int) readline();

if ($unite<=100){
    $bill = $unite * 5;
}
elseif ($unite<= 200){
    $bill = $unite * 5 + ($unite - 100) * 10;
}
else {
    $bill = 100 * 5 + 100 * 10 + ($unite - 200) * 15;
}

echo "Total bill = $$bill";