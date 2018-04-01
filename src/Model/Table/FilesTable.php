<?php
/**
 * Created by PhpStorm.
 * User: KT-DTPhi
 * Date: 29/03/2018
 * Time: 10:04 CH
 */
namespace Phi\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class FilesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->addBehavior('Burzum/Imagine.Imagine');
    }
    
    public function resize(array $config)
    {
        $imagine = $this->imagineObject();
        
        return $imagine;
    }

}
