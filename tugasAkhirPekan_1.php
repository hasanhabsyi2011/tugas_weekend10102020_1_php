<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 1</title>
  </head>
  <body>

    <?php

    $rusuk_a = 4;
    $rusuk_b = 7;
    $rusuk_c = 10;
    $rusuk_d = 12;

    function luas_permukaan($nilai, $pangkat){
      return 6* pow($nilai, $pangkat);
    };

     ?>



    <h3>Soal Nomor 1</h3>
    <p>Hitunglah luas permukaan kubus dengan panjang setiap rusuknya sebagai berikut.</p>
    <ol type="a">
      <li>4 cm</li>
      <li>7 cm</li>
      <li>10 cm</li>
      <li>12 cm</li>
    </ol>
    <br><br>
    <h3>Jawaban</h3>

    <p><b>Luas permukaan kubus dengan panjang rusuk 4 cm  : <?php echo luas_permukaan($rusuk_a, 2); ?> cm<sup>2</sup> </b></p>
    <p><b>Luas permukaan kubus dengan panjang rusuk 7 cm  : <?php echo luas_permukaan($rusuk_b, 2); ?> cm<sup>2</sup>  </b></p>
    <p><b>Luas permukaan kubus dengan panjang rusuk 10 cm  : <?php echo luas_permukaan($rusuk_c, 2); ?> cm<sup>2</sup>  </b></p>
    <p><b>Luas permukaan kubus dengan panjang rusuk 12 cm  : <?php echo luas_permukaan($rusuk_d, 2); ?> cm<sup>2</sup>  </b></p>



  </body>
</html>
