<h3>Pengurutan Data ("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat")</h3>
<?php
$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($data);

for($i=0; $i < count($data); $i++){
    echo "<pre>";
    echo $data[$i]. "<br>";
    echo "</pre>";
}
?>