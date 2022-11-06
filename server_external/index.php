    <h1>SERVER WITH EXPOSED PORT</h1>
<?php
$data = file_get_contents('http://server:3000');
echo $data;
echo "php sanity check";
?>