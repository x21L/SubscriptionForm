<?php
/**
 * Created by IntelliJ IDEA.
 * User: lukas
 * Date: 11.11.17
 * Time: 11:51
 */

$forename = $_POST['forename'];
$surname = $_POST['surname'];
$domicile = $_POST['domicile'];
$street = $_POST['street'];
$postcode = $_POST['postcode'];
$houseNumber = $_POST['houseNumber'];
$birthday = $_POST['birthday'];
$name = $surname . $forename . $houseNumber;

$list = [$forename, $surname, $domicile, $street, $postcode, $houseNumber, $birthday];

$file = fopen('/subscriptions.csv', 'a+');

foreach ($list as $fields) {
    fputcsv($file, $fields);
}

fclose($file);

?>

<script type="text/javascript">history.go(-1);</script>


