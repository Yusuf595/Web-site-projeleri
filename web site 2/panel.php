<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Randevu Tablosu</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Fal Türü</th>
    <th>Mesaj</th>
  </tr>



  <?php
  session_start();

  if (!isset($_SESSION["user"]) || $_SESSION["user"] == "") {
    header("location: cikis.php");
    exit(); // çok önemli: yönlendirmeden sonra kodun çalışmaması için
}


  else
  {
      echo"Kullanıcı Adınız : ".$_SESSION['user']."<br><br>";
      echo"<a href='cikis.php'>ÇIKIŞ YAP</a><br><br>";

       include("baglanti.php");

      $sec="Select * From randevu";
      $sonuc=$baglan->query($sec);

    if($sonuc->num_rows>0)
{
  while($cek=$sonuc->fetch_assoc())
  {
      echo"
      <tr>
            <td>".htmlspecialchars($cek['adsoyad'])."</td>
            <td>".htmlspecialchars($cek['telefon'])."</td>
            <td>".htmlspecialchars($cek['email'])."</td>
            <td>".htmlspecialchars($cek['falturu'])."</td>
            <td>".htmlspecialchars($cek['mesaj'])."</td>
        </tr>  ";
  }
}

else
{
    echo"Veritabanında Kayıtlı Hiçbir Veri Bulunmuyor.";
}

  }



?>




  
</table>

</body>
</html>


