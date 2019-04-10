<?php


namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $hi = 'Hello world!';
        $names = [
            'Ivanov',
            'Prtrov',
            'Sidorov'
        ];

//        $this->debug($names);

        return $this->render('index',compact('hi', 'names','id'));
    }
}