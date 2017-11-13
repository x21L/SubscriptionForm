<?php
/**
 * Created by IntelliJ IDEA.
 * User: lukas
 * Date: 11.11.17
 * Time: 11:51
 *
 * MIT License
 *
 * Copyright (c) 2017 Lukas Wais
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
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


