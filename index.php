<?php
$npp = 0;
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
$html_table_end = '</table>
<a href="generator.php">You can also use this</a></body></html>';

function getNumPP()
{
    global $npp;
    return '#' . ++$npp;
}

$table = '<tr>
<th>ID</th>
<th>Name</th>
<th>Collection</th>
<th>Materials</th>
<th>Lore</th>
</tr>';

$input = [
    [
        $id => getNumPP(),
        $name => 'The the',
        $coll => rand(0, 10),
        $mat => '0000',
        $lore => '0000'
    ],
    [
        $id => getNumPP(),
        $name => 'The the',
        $coll => rand(0, 10),
        $mat => '0000',
        $lore => '0000'
    ],
    [
        $id => getNumPP(),
        $name => 'The the',
        $coll => rand(0, 10),
        $mat => '0000',
        $lore => '0000'
    ],
    [
        $id => getNumPP(),
        $name => 'The the',
        $coll => rand(0, 10),
        $mat => '0000',
        $lore => '0000'
    ],
    [
        $id => getNumPP(),
        $name => 'The the',
        $coll => rand(0, 10),
        $mat => '0000',
        $lore => '0000'
    ],
    [
        $id => getNumPP(),
        $name => 'The the',
        $coll => rand(0, 10),
        $mat => '0000',
        $lore => '0000'
    ]];

foreach ($input as $key) {
    $table .= "<tr>
<td>{$key[$id]}</td>
<td>{$key[$name]}</td>
<td>{$key[$coll]}</td>
<td>{$key[$mat]}</td>
<td>{$key[$lore]}</td>
</tr>";
}
echo $html_table_start . $table . $html_table_end;