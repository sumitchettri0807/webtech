<?php
$arr = array( 44,2,58,7,22);
sort($arr);
echo "Ascending: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
rsort($arr);
echo "
Descending: ";
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}
?>