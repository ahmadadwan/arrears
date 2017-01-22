<?php

namespace App\Http\Controllers;

use App\Arrears;
use App\Http\Controllers\Controller;
use Input  ;

class ArrearsController  extends Controller
{




public function add()

{



    $arrears = new Arrears;
    $arrears->name = $_POST['name'];
    $arrears->value = $_POST['value'];
    $arrears->save();
    return redirect()->back();

}

   public function arrears()

   {

      $arrears =  Arrears::all();

      return view("arrears", ["arrears"=>$arrears]);

   }

public function destroy($id)

{
  Arrears::find($id)->delete();
  return redirect()->back();

}


public function upload()

{

}



}
