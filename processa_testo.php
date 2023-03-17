<?php
$p = $_GET['p'];
$bad_word = $_GET['bad-word'];
?>

<p><?php echo $p ?></p>
<p><?php echo strlen($p); ?></p>

<?php
$p = str_replace($bad_word ,'***', $p);
?>

<p><?php echo $p ?></p>
<p><?php echo strlen($p); ?></p>
