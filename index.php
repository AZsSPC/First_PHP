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
<table width="100%" id="title">
    <tr>
<td width="38%"></td>
<td width="24" align="center">
    <h1 id="in_title"> THE TITLE</h1>
    <h4 id="in_subtitle">the subtitle</h4>
</td>
<td width="23%"></td>
<td class="area" width="8%" align="center">
    <a href="login.html">LOG IN</a> or
    <a href="register.html">REGISTER</a>
</td>
<td width="7%"></td>
    </tr>
</table>
<table width="96%" id="shop" style="margin: 2%;">
    <caption class="header"><h3>* * *</h3></caption>
    ';
$html_table_end = '</table></body></html>';

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
    [$id => getNumPP()],
    [$name => 'The the'],
    [$coll => rand(0, 10)],
    [$mat => '0000'],
    [$lore => '0000']
    ,
    [$id => getNumPP()],
    [$name => 'The the'],
    [$coll => rand(0, 10)],
    [$mat => '0000'],
    [$lore => '0000']
    ,
    [$id => getNumPP()],
    [$name => 'The the'],
    [$coll => rand(0, 10)],
    [$mat => '0000'],
    [$lore => '0000']
];

foreach ($input as $line) {
    $table .= '<tr>
<td>' . $line[$id] . '</td>
<td>' . $line[$name] . '</td>
<td>' . $line[$coll] . '</td>
<td>' . $line[$mat] . '</td>
<td>' . $line[$lore] . '</td>
</tr>';
}
echo $html_table_start . $table . $html_table_end;

