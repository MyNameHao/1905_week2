<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ascii(){
        $data='user info';
        //xvhu#lqir
        $length=strlen($data);
//        echo $length;
        $pass='';
        for($i=0;$i<$length;$i++){
//            echo $data[$i].'=>>>>>>>'.ord($data[$i]);echo '<br/>';
            $ord=ord($data[$i])+3;
            $car=chr($ord);
//            echo $ord;echo '<br/>';echo $car;echo '<br>';
            echo $car;

        }
    }
    public function unascii(){
        $data='xvhu#lqir';
        $length=strlen($data);
//        echo $length;
        for($i=0;$i<$length;$i++){
//            echo $data[$i];
            $ord=ord($data[$i])-3;
            $chr=chr($ord);
            echo $chr;
//            echo $ord;echo '<br>';
        }


    }



    public function testget(){
       $encrypt=  $_GET['encrypt'];
        $lengeh=strlen($encrypt);
//        echo $lengeh;
        for($i=0;$i<$lengeh;$i++){
            $ord=ord($encrypt[$i])+3;
            $chr=chr($ord);
            echo $chr;
        }
    }
    public function testunget(){
        $decode=$_GET['decode'];
        $length=strlen($decode);
//        echo $length;
        for($i=0;$i<$length;$i++){
           $ord=ord($decode[$i])-3;
            $chr=chr($ord);
            echo $chr;
        }

    }
}
