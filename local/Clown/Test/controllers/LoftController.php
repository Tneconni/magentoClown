<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 14-1-8
 * Time: 下午11:10
 * To change this template use File | Settings | File Templates.
 */
class Clown_Test_LoftController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){

        echo 'this is the loft controller';
        $step = Mage::getModel('Test/Step');
//        $stepCollection = $step->getCollection();
        $step->editData();

//        var_dump( $step );
//        print_r( $step );
    }



}