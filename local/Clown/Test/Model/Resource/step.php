<?php


class Clown_Test_Model_Resource_Step extends Mage_Core_Model_Resource_Db_Abstract{

    /**
     * Define main table
     *
     */
    protected function _construct()
    {
        $this->_init('Test/step', 'id');

    }

    public function updateData(){
        $adapter = $this->_getWriteAdapter();

        $params = array(
            'content'=>'lalala',
            'description'=>'I like this car'
        );
        $adapter->insert('test_user',$params);
        echo 'haha, meng dui l ';
    }

    public function selectData(){
        $adapter = $this->_getReadAdapter();
        $sql ="SELECT * FROM test_user";
        $data = $adapter->fetchAll( $sql );
        print_r( $data );
    }

}