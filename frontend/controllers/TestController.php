<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest1() {
        $a=3;
        $b=5;
        $sum=$a+$b;
       $datatran=['sum'=>$sum,'a'=>$a,'b'=>$b];
        //echo 'ทดสอบระบบ';
          return $this->render('test1',$datatran);
        
    }//end test1
    
    public function actionTest2($name=null,$lname=null) {
        //echo "Your name is $name";
        $namedata=['info'=>$name,'info2'=>$lname];
        
        return $this->render('test2',$namedata);
    }
    
}
