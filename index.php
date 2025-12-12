<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Te nav neka</h1>

</body>
</html>

<?php
class Video {
    public $id;
    public $url;
    public $autora_id;
    public $nosaukums;

    public function __construct($id, $url, $autora_id, $nosaukums) {
        $this->id = $id;
        $this->url = $url;
        $this->autora_id = $autora_id;
        $this->nosaukums = $nosaukums;
    }
}
?>