<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h2>BLP108 - Web Programlama (Sınav Sonuçları)</h2>

        <?php
        if ($_GET) {
            $status = $_GET["status"];
            if ($status == 0) {
                echo '<div class="alert alert-danger" role="alert">
                        Öğrenci kaldı, kayıt edildi.
                      </div>';
            } else if ($status == 1) {
                echo '<div class="alert alert-success" role="alert">
                        Öğrenci geçti, kayıt edildi.
                      </div>';
            } else {
                echo '<div class="alert alert-dark" role="alert">
                        Kayıtlar yapılamadı. Verileri kontrol ediniz.
                      </div>';
            }
        }
        ?>
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="fullname">Öğrencinin Adı Soyadı:</label>
                <input type="text" class="form-control" placeholder="İsim giriniz." name="fullname" required>
            </div>
            <div class="form-group">
                <label for="vize">Vize Notu:</label>
                <input type="number" class="form-control" name="vize" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="final">Final Notu:</label>
                <input type="number" class="form-control" name="final" min="0" max="100">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
    <hr>
    <?php
    if (filesize("sonuclar.txt") > 0) {
    ?>
        <div class="container">
            <h2>Öğrenci Bilgileri</h2>
            <p>Contextual classes can be used to color the table, table rows or table cells. The classes that can be used are: .table-primary, .table-success, .table-info, .table-warning, .table-danger, .table-active, .table-secondary, .table-light and .table-dark:</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Adı Soyadı</th>
                        <th>Vize Notu</th>
                        <th>Final Notu</th>
                        <th>Ortalama Notu</th>
                        <th>Sonuç</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $dosyam = fopen("sonuclar.txt", "r");
                    while (!feof($dosyam)) {
                        $satir = fgets($dosyam);
                        $array = explode('|', $satir);
                       
                        if(count($array) == 5){
                            $d = $array[3] > 55  ? 'table-success':'table-danger';
                            echo '
                            <tr class="'.$d.'">
                                <td>'.$array[0].'</td>
                                <td>'.$array[1].'</td>
                                <td>'.$array[2].'</td>
                                <td>'.$array[3].'</td>
                                <td>'.$array[4].'</td>
                            </tr>
                        ';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>