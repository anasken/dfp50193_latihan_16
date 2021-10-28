<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian' => [
            'SPM', 'STPM'
        ],
        'Sarjana Muda Teknologi Kejuruteraan Pembuatan (Pengurusan Rangkaian Bekalan) Dengan Kepujian' => [
            'SPM', 'STPM'
        ],
        'Diploma Kejuruteraan Awam' => [
            'STPM', 'Sijil Kemahiran'
        ],
        'Diploma Seni Bina' => [
            'STPM', 'Sijil Kolej Komuniti'
        ],
        'Politeknik Sultan Haji Ahmad Shah' => [
            'Diploma Kejuruteraan Awam' => [
                'STPM', 'Sijil Kemahiran'
            ],
            'Diploma Seni Bina' => [
                'STPM', 'Sijil Kemahiran'
            ],
            'Diploma Geomatik' => [
                'STPM', 'Sijil Kemahiran'
            ]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangkaji Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Senarai Program Di Politeknik</h1>

    <!--<pre><?php print_r($program); ?></pre>-->
    <ul>
        <?php
        foreach ($program as $poli => $value) {

            echo "<li>$poli";
            echo "<ul>";
            foreach ($value as $course => $test) {

                echo "<li>$course";
                foreach ($test as $kelayakan) {
                    echo "<li>$kelayakan</li>";
                    echo '</ul>';
                    echo '</li>';
                }
                echo "</ul>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        }
        ?>
    </ul>
    <!-- <ul>
        <li>Politeknik Ungku Omar
        <ul>
            <li>Sarjana Muda Teknologi Kejuruteraan Awam Dengan Kepujian</li>
            <li></li>
        </ul>
        </li>
    </ul> -->
</body>

</html>