<?php
/* Rule */
/** JIKA DELUSI                       >21 Maka Skizofrenia**/
/** JIKA halusinasi                   >21 Maka Skizofrenia**/
/** JIKA Perilaku tidak terorganisasi >21 Maka Skizofrenia**/
/** JIKA Gangguan pemikiran           >21 Maka Skizofrenia**/

/* Get Value for every user answers*/
if (isset($_POST['delusi'])){
  $inferensi1=0;
  $inferensi2=0;
  $inferensi3=0;

  $result=0;
  $defuzi=0;

$mappingDelusi=$_POST['delusi'];
$mappingHalusinasi=$_POST['halusinasi'];
$mappingTO=$_POST['to'];
$mappingGP=$_POST['gp'];

//Fuzzyfikasi
/* Grafik Fungsi Keanggotan Delusi*/
/* Tidak, Mungkin, Iya */
$delusi=miuOfX($mappingDelusi,5,21,11,31,21,50);
$resDelusiT= $delusi [0];
$resDelusiM= $delusi [1];
$resDelusiI= $delusi [2];


/* Grafik fungsi keanggotaan Halusinasi */
/* Tidak, Mungkin, Iya */
$halusinasi=miuOfX($mappingHalusinasi,5,21,11,31,21,50);
$resHalusiT= $halusinasi [0];
$resHalusiM= $halusinasi [1];
$resHalusiI= $halusinasi [2];

/* Grafik Fungsi Keanggotan Tidak Terorganisir */
/* Tidak, Mungkin, Iya */
$to=miuOfX($mappingTO,5,21,11,31,21,50);
$resToT= $to [0];
$resToM= $to [1];
$resToI= $to [2];

/* Grafik Fungsi Keanggotan Gangguan Pemikiran */
/* Tidak, Mungkin, Iya */
$gp=miuOfX($mappingGP,5,21,11,31,21,50);
$resGpT= $gp [0];
$resGpM= $gp [1];
$resGpI= $gp [2];
//Fuzzyfikasi end

/* Rule */
/** JIKA DELUSI Mungkin               >21 Maka Skizofrenia**/
/** JIKA halusinasi                   >21 Maka Skizofrenia**/
/** JIKA Perilaku tidak terorganisasi >21 Maka Skizofrenia**/
/** JIKA Gangguan pemikiran           >21 Maka Skizofrenia**/

/*  DELUSI    halusinasi    TO      GP            rekomendasi*/
//   iya      iya             iya     iya           positif
//  mungkin   mungkin       mungkin   mungkin       Mungkin
//  tidak     tidak         tidak     tidak         negatif
//  Mungkin   Iya           tidak   Mungkin         kemungkinan besar
//  iya        mungkin      tidak    tidak          kemungkinan besar
//
$inferensi1= Min($resDelusiI, $resHalusiI, $resToI, $resGpI);
$inferensi2= Min($resDelusiM, $resHalusiM, $resToM, $resGpM);
$inferensi3= Min($resDelusiT, $resHalusiT, $resToT, $resGpT);
$inferensi4= Min($resDelusiM, $resHalusiI, $resToT, $resGpM);
$inferensi5= Min($resDelusI, $resHalusiM, $resToT, $resGpMT);


//$result1= MAX($inferensi1, $inferensi2);
//$result2= MAX($inferensi2, $inferensi3);
//$defuzi=        ( ($result1*(21+11+5+7)) + ($result2*(21+31+36+50)) ) / ( ($result1*4) + ($result2*4) );
echo $inferensi2;

}




/* Mapping Function for every rule, assumtion same graph */
function miuOfX ($x,$inGrafmin1,$inGrafmax1,$inGrafmin2,$inGrafmax2,$inGrafmin3,$inGrafmax3){
  $miuA= check($x,$inGrafmin1,$inGrafmax1);
  $miuB= checkSegitiga($x,$inGrafmin2,$inGrafmax2,$inGrafmin3);
  $miuC= check($x,$inGrafmin3,$inGrafmax3);
  return array ($miuA,$miuB, $miuC);

}

function check($x,$inGrafMin,$inGrafMax){

  if($x <= $inGrafMin){
    return $miu1=1;
  }
  else if ((($x >= $inGrafMin ) && ( $x <= $inGrafMax))) {
    return ($miu1= ($inGrafMax - $x)/($inGrafMax-$inGrafMin));
  }
  else {
    return $miu1=0;
  }
return $miu1;
}

function checkSegitiga($x,$inGrafMin,$inGrafMax,$middleGraf){
  $miux=0;

  if ($x<= $inGrafMin || $x >= $inGrafMax) {
    return $miux=0;
  }
  else if ($x >= $inGrafMin && $x <= $middleGraf) {
    return (($x-$inGrafMin)/($middleGraf-$inGrafMin));
  }
  else if ($x >= $middleGraf && $x<=$inGrafMax) {
  return (($inGrafMax-$x)/($inGrafMax-$middleGraf));
  }
}



 ?>
