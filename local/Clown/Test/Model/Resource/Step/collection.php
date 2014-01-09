<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 14-1-9
 * Time: 上午12:41
 * To change this template use File | Settings | File Templates.
 */

class Clown_Test_Model_Resource_Step_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct(){

        $this->_init('Test/step');
        echo 'collection ...';
    }

}