<link rel="stylesheet" type="text/css" href="css/style_main.css">
<?php
const SAVE_JSON = 'files/data.json';
const SAVE_INPUT = 'files/input.csv';
function doDefault()
{
    echo '<form enctype="multipart/form-data" action="/" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="50000">
    <input type="hidden" name="do" value="send">
    Отправить этот файл: <input name="ddos_attack" type="file">
    <br>
    <input type="submit" value="Отправить файл">
</form>';
}

function doThenSend()
{
    move_uploaded_file($_FILES['ddos_attack']['tmp_name'], SAVE_INPUT);
    $input = str_replace("\r\n", '', file(SAVE_INPUT));
    $keys = explode(',', $input[0]);
    $data = ['keys' => $keys];
    for ($i = 1; $i < sizeof($input); $i++) {
        $line = explode(',', $input[$i]);
        $user = [];
        for ($o = 0; $o < sizeof($keys); $o++) {
            $user [$keys[$o]] = $line[$o];
        }
        $data['values'][] = $user;
    }
    file_put_contents(SAVE_JSON, json_encode($data));
}

function drawTable()
{
    $file = (array)json_decode(file_get_contents(SAVE_JSON));
    $th = $file['keys'];    //разделы
    $td = $file['values'];  //данные
    $container = [];
    echo '<table><tr>';
    $id = 0;
    foreach ($th as $o) {
        $container[$id++] = $o;
        echo '<th>' . $o . '</th>';
    }
    $cs = sizeof($container);
    echo '</tr>';
    foreach ($td as $o) {
        $o = (array)$o;
        echo '<tr>';
        for ($i = 0; $i < $cs; $i++) echo '<td>' . $o[$container[$i]] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

if ($_POST['do'] == 'send' && $_FILES['ddos_attack']['error'] == UPLOAD_ERR_OK) {
    doThenSend();
} else doDefault();
drawTable();
