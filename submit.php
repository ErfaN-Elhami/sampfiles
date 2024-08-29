<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $icon = $_POST['icon'];
    $downlink = $_POST['downlink'];
    $topic = $_POST['topic'];
    $des = $_POST['des'];

    $data = array(
        "icon" => $icon,
        "downlink" => $downlink,
        "topic" => $topic,
        "des" => $des
    );

    $json_data = file_get_contents('data.json');
    $json_array = json_decode($json_data, true);

    $json_array[] = $data;

    $new_json_data = json_encode($json_array, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $new_json_data);

    echo "Data successfully saved!";
} else {
    echo "Invalid request method.";
}
?>
