<?php
$id = 'i';
$name = 'n';
$coll = 'c';
$mat = 'm';
$lore = 'l';
$html_table_start = '<!DOCTYPE html><html lang="">
<head>
    <meta charset="UTF-8">
    <title>ST-SH-RA list</title>
    <link rel="stylesheet" type="text/css" href="css/style_main.css">

</head>
<body>
<table id="title">
    <tr>
        <td width="38%"></td>
        <td class="title">
            <h1 id="in_title"> THE TITLE</h1>
            <h4 id="in_subtitle">the subtitle</h4>
        </td>
        <td width="23%"></td>
        <td class="area" >
            <a href="login.html">LOG IN</a> or
            <a href="register.html">REGISTER</a>
        </td>
        <td width="7%"></td>
    </tr>
</table>
<table id="shop">
    <caption class="header"><h3>* * *</h3></caption>
    ';
$table = '<tr>
<th>ID</th>
<th>Name</th>
<th>Collection</th>
<th>Materials</th>
<th>Lore</th>
</tr>';
$html_table_end = '</table><a href="generator.php">You can also use this</a></body></html>';
/**
 * $input = [
 * [
 * $id => 00,
 * $name => 'The the',
 * $coll => rand(0, 10),
 * $mat => '0000',
 * $lore => '0000'
 * ]
 * ];*/
$item_count = $_GET['items'];
for ($i = 0; $i < $item_count; $i++) {
    $item = preg_split('/;/', $_GET['item_' . $i], 5);
    $table .= '<tr class="tc">';
    foreach ($item as $v) $table .= '<td>' . $v . '</td>';

}
/**
 * foreach ($input as $item) {
 * $table .= "<tr class='tc' >
 * <td >#{$item[$id]}</td>
 * <td >{
 * $item[$name]}</td >
 * <td >{
 * $item[$coll]}</td >
 * <td >{
 * $item[$mat]}</td >
 * <td >{
 * $item[$lore]}</td >
 * </tr > ";
 * }*/
echo $html_table_start . $table . $html_table_end;