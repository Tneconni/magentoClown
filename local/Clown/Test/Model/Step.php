<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 14-1-9
 * Time: 上午12:34
 * To change this template use File | Settings | File Templates.
 */
class Clown_Test_Model_Step extends Mage_Core_Model_Abstract
{
    public function _construct(){
        echo 'hello, this is the step model class';
        $this->_init('Test/step');
    }

    public function editData(){
        echo '<br/>edit method';
        $adapter = $this->getResource();
        $adapter->updateData();
        $adapter->selectData();

    }


}