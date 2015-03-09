<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
 App::uses('CakeTime', 'Utility');
 
 class EditBoxesController extends AppController {
    
    public $helpers = array('Html' => array('className' => 'GtwUi.GtwHtml'));
    
    public function beforeFilter() {
        parent::beforeFilter();
        
        if ($this->request->is('ajax')) {
             $this->layout = 'ajax';
             $this->autoLayout = false;
             $this->autoRender = false;
        }

        $this->Auth->allow('get');
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->EditBox->create();
            if ($this->EditBox->save($this->request->data)) {
                $this->Session->setFlash( __d('gtw_edit_boxes','Your content has been saved.'), 'alert', array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-success'
                ));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__d('gtw_edit_boxes','Unable to add your content.'), 'alert', array(
                'plugin' => 'BoostCake',
                'class' => 'alert-danger'
            ));
        }
    }
    
    public function get($name){
        $editBox = $this->EditBox->findByName($name);
        return $editBox['EditBox']['body'];
    }
    
    public function save() {
        $response = array('success' => false);
        if ($this->request->is('post')) {
            $editBox = $this->EditBox->findByName($this->request->data['EditBox']['name']);
            $this->EditBox->id = $editBox['EditBox']['id'];
            if ($this->EditBox->save($this->request->data)) {
                $response = array('success' => true);
            }
        }        
        $this->header('Content-Type: application/json');
        return json_encode($response);
    }
    
    public function index() {
        $this->set('editBoxes', $this->EditBox->find('all'));
    }
    
    public function delete($id) {
        if ($this->EditBox->delete($id)) {
            $this->Session->setFlash(__d('gtw_edit_boxes','The EditBox has been deleted.'), 'alert', array(
                'plugin' => 'BoostCake',
                'class' => 'alert-success'
            ));
            return $this->redirect(array('action' => 'index'));
        }
    }
    
}