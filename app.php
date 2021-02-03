<?php
 
$sex="male";//cinsiyet
$weight="55";//kilo(kg)
$height=170;//boy(cm)
$age=25;//yaş(sene)

$fcalorie=(10*$weight)+(6.25*$height)-(5*$age+5);//erkekler icin kalori hesaplamasi

$mcalorie=(10*$weight)+(6.25*$height)-(5*$age-161);//kadinlar icin kalori hesaplamasi
  


  if($sex=="male")
  {
  	echo $mcalorie;
  }
  else 
  {
  	echo $fcalorie;
  }


?>

