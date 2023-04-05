<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>No.</th>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>WEB</th>
  </tr>
  <?php

    for($i=1; $i<=100; $i++){
        //burada tr yazılır
        if($i % 2 == 0){
            echo '<tr style="background-color: #dddddd">';
        }else{
            echo '<tr>';
        }
        //tdler yazılır.
        echo '
            <td>'.$i.'</td>
            <td>'.$i.'. ŞİRKET</td>
            <td>'.$i.'. İLETİŞİM</td>
            <td>'.$i.'. ÜLKE</td>
            <td><a href="web'.$i.'.html">WEB SITESI</a></td>
        </tr>
        ';

        
        /*echo '
        <tr style="'.($i%2 == 0 ? 'background-color: #dddddd;': '').'">
            <td>'.$i.'</td>
            <td>'.$i.'. ŞİRKET</td>
            <td>'.$i.'. İLETİŞİM</td>
            <td>'.$i.'. ÜLKE</td>
            <td><a href="web'.$i.'.html">WEB SITESI</a></td>
        </tr>
        ';*/
    }
  
  ?>
</table>

</body>
</html>

