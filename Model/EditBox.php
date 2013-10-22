<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

class EditBox extends AppModel {
    
    //public $useTable = 'edit_boxes'; 
     
    public $validate = array(
        'title' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A title is required'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'required' => 'create',
                'message' => 'Title already exists'
            )
        )
    );
    
    public function beforeSave($options = array()){
        if (isset($this->data[$this->alias]['title'])) {
            $this->data[$this->alias]['title'] = Inflector::slug(strtolower ( $this->data[$this->alias]['title']) );
        }
        return true;
    }




}