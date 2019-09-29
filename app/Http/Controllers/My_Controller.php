<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class My_Controller extends Controller
{
  public function Get_Number(){
    $color="orange";
    $arr=[];
    for($i=0;$i<10;$i++){
      $arr[]=$i;

    }
    return view('Box-Number',compact('arr','color'));
  }
  public function Get_Letter(){
    $color='red';
    $arr=[];
    for ($i=65;$i<91;$i++) {
      $arr[]=chr($i);
}
  return view('Box-Letter',compact('arr','color'));
  }
}
