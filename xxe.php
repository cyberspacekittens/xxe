<html>

<form action="xxe.php" method="post">
<input type="hidden" name="data" value='<?xml version="1.0" ?><!DOCTYPE thp [ <!ELEMENT thp ANY><!ENTITY book "Universe">]><thp>Hack The &book;</thp>'>
<br><input value="Hack The XML" type="submit">
</form>

<?php

libxml_disable_entity_loader(false);
$reportData = !empty($_POST['data'])?$_POST['data']:null;
if(empty($reportData)) {
    echo 'Hit the Button';
    die();
}

$xml = simplexml_load_string($reportData, 'SimpleXMLElement', LIBXML_NOENT);

?> 
<h1>XML POST Processing</h1>
<h3>Input</h3>
<p><?php echo htmlspecialchars($reportData); ?></p>
<h3>Output</h3>
<?php print_r($xml); ?>

</html>
