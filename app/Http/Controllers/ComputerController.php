<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\computer;

class ComputerController extends Controller
{
    private static function getDate(){
      return[
        ['id'=>1 , 'name'=>'lg','origin'=>'koria'],
        ['id'=>2 , 'name'=>'hp','origin'=>'usa'],
        ['id'=>3, 'name'=>'dell','origin'=>'syria'],
      ];

    }


public function index(){

    return view ('computers.index',['computers'=> computer::all()]);
}
public function create(){
    return view ('computers.create');
}
public function store( Request $request){
      $computer=new computer();
      $computer -> name =$request-> input('computer-name');
      $computer -> origin=$request-> input('computer-origin');
      $computer -> year=$request-> input('computer-year');
      $computer->save();
      return redirect()-> route('computers.index');


}