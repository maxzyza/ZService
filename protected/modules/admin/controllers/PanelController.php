<?php
class PanelController extends CController
{
    public $layout = '//layouts/column1';
    public function filters() {
        return array(
                'accessControl',
                );
    }

    public function accessRules() {
        return array(
            array('allow',
                'roles'=>array('admin'),
                ),
            array('deny',
                'users'=>array('*'),
                ),
                );
    }
    public function actionAdmin()
    {
        $this->render('admin');
    }
}