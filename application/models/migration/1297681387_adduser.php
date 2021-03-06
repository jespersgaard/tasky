<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Adduser extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('user', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'login' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             'pass' => 
             array(
              'type' => 'string',
              'length' => 32,
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             'role' => 
             array(
              'type' => 'int',
              'notnull' => true,
              'length' => NULL,
             ),
             'openid' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             ), array(
             'type' => 'INNODB',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('user');
    }
}