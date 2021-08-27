<?php
    $result = 'Нет результата';
    if (isset($_POST['submit']))
    {
        $fst = $_POST['first'];
        $sec = $_POST['second'];
        switch ($_POST['action'])
        {
            case 1:
                $result = $fst + $sec;
                break;
            case 2:
                $result = $fst - $sec;
                break;
            case 3:
                $result = $fst * $sec;
                break;
            case 4:
                if ($sec != 0) $result = $fst / $sec;
                else $result = 'Деление на ноль запрещено';
                break;
        }
    }
