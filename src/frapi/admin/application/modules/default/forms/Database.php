<?php
/**
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://getfrapi.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@getfrapi.com so we can send you a copy immediately.
 *
 * @license   New BSD
 * @copyright echolibre ltd.
 * @package   frapi-admin
 */
class Default_Form_Database extends Lupin_Form
{
    public function init()
    {
        $hostname = new Zend_Form_Element_Text('db_hostname');
        $hostname->setLabel('Hostname');
        $this->addElement($hostname);

        $username = new Zend_Form_Element_Text('db_username');
        $username->setLabel('Username');
        $this->addElement($username);

        $password = new Zend_Form_Element_Text('db_password');
        $password->setLabel('password');
        $this->addElement($password);
        
        $database = new Zend_Form_Element_Text('db_database');
        $database->setLabel('database');
        $this->addElement($database);
        
        $this->addElement(new Zend_Form_Element_Submit('submit'));
        
        parent::init();
    }
}