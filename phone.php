<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1>Проверка номера</h1>
    <form method="post">
        <input type="text" name="phone">
        <button type="submit">Отправить</button>
    </form>
    <?php
    if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
    function formatPhoneNumber(string $phone): string {
        $phone = preg_replace('/[^0-9.]+/', '', $phone);
        if(strlen($phone) !== 11) {
            return "invalied";
        }
        $number = [];
        $x = 0;
        foreach(str_split($phone) as $value) {
            $x++;
            if($x == 1) {
                if($value == 8) {
                    $number[] = "+7";
                }
                else {
                    $number[] = "+7";
                }
            }
            elseif($x == 2) {
                $number[] = "($value";
            }
            elseif($x == 5) {
                $number[] = ")$value";
            }
            elseif($x == 8) {
                $number[] = "-$value";
            }
            elseif($x == 10) {
                $number[] = "-$value";
            }
            else {
                $number[] = $value;
            }
        }
        $phonenumber = implode("", $number);

        return $phonenumber;
    }
    echo formatPhoneNumber($phone);
}
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>