<?php
include 'algoritmafunc.php';

if (isset($_POST['delusi'])) {
  if ($_POST['delusi']!= 99 && $_POST['halusinasi']!= 99 && $_POST['to']!= 99 && $_POST['gp']!= 99) {
    $delusicfx=$_POST['delusi'];
    $halusinasicfx=$_POST['halusinasi'];
    $tocfx=$_POST['to'];
    $gpcfx=$_POST['gp'];

//inisisalisasi
$combine1=0;
$combine2=0;
$combine3=0;


//mengalikan faktor dari pakar dengan pilihan user
    $CFdelusi    =$delusicfx     * 0.35;
    $CFHalusinasi=$halusinasicfx * 0.3;
    $CFto        =$tocfx         * 0.25;
    $CFgp        =$gpcfx         * 0.1;
$combine1 = cekrule($CFdelusi,$CFHalusinasi);
$combine2 = cekrule($combine1,$CFto);
$combine3 = cekrule ($combine2, $CFgp);

    $kesimpulan = round($combine3,2);

    if ($kesimpulan >=0.42 ) {
      echo "<h1 style='text-align:center;'><span class='label label-danger'>Anda Positif terkena Skizofrenia </span></h1>";
    }
    else if (($kesimpulan > (-0.50 )) &&  ($kesimpulan < (0.42))){
      echo "<h1 style='text-align:center;'><span class='label label-warning'> Kemungkinan besar anda terkena Skizofrenia </span></h1>";
    }
    else if ( ($kesimpulan > (-1.86)) && ($kesimpulan <= (-0.50))) {
      echo "<h1 style='text-align:center;'><span class='label label-info'>Kemungkinan anda tidak terkena Skizofrenia</span></h1>";
    }
    else {
      echo "<h1 style='text-align:center;'><span class='label label-success'>Anda Tidak Terkena Skizofrenia</span></h1>";
    }
echo $kesimpulan;
  }
  else if ($_POST['delusi']== 99 && $_POST['halusinasi']== 99 && $_POST['to']== 99 && $_POST['gp']== 99){
    echo "";
  }
  else {
    echo "";
  }

} ?>
