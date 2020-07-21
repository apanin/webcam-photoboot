<?php
$out = array();
foreach (glob('upload/*') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['basename'];
}
echo json_encode($out);
?>
