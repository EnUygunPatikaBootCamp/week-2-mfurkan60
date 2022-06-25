<?php
class vehicles{
 public $plakaNo;
 public $marka;
 public $model;
 public $tekerlekSayisi;
 public $kanatAcikligi;
 
 function __constract($plakaNo,$marka,$model,$tekerlekSayisi,$kanatAcikligi){
   $this->plakaNo = $plakaNo;
   $this->marka = $marka;
   $this->model = $model;
   $this->tekerlekSayisi = $tekerlekSayisi;
   $this->kanatAcikligi = $kanatAcikligi;
       
 }
 
 
}

class araba extends vehicles{
  
   
  function arabaYaz($plakaNo,$marka,$model,$tekerlekSayisi){
    echo "Plaka No:". $plakaNo;
    echo "Marka :". $marka;
    echo "Model :". $model;
    echo "Tekerlek Sayısı :".$tekerlekSayisi;
    
  }
}

class motorsiklet extends vehicles{
  
   
  function motorsikletYaz($plakaNo,$marka,$model,$tekerlekSayisi){
    echo "Plaka No:". $plakaNo;
    echo "Marka :". $marka;
    echo "Model :". $model;
    echo "Tekerlek Sayısı :".$tekerlekSayisi;
    
  }
}