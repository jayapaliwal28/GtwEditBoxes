<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

class EditBox extends AppModel {
    
    var $validationDomain = 'gtw_edit_boxes';
    
	public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A name is required'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message' => 'Name is already used'
            )
        )
    );
    
    public function beforeSave($options = array()){
        if (isset($this->data[$this->alias]['name'])) {
            $this->data[$this->alias]['name'] = Inflector::slug(strtolower ( $this->data[$this->alias]['name']) );
        }
        return true;
    }

}