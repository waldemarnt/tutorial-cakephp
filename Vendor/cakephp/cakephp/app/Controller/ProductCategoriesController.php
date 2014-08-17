<?php

App::uses('AppController', 'Controller');


class ProductCategoriesController extends AppController 
{
	public $components = array('Paginator');

	public function index ()
	{
		$this->ProductCategory->recursive = 0;
		$this->set('product_categories',$this->Paginator->paginate());
	}
	
	public function add() 
	{

		if($this->request->is('post')) {
			$this->ProductCategory->create();

			if($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash('Category has been saved!');
				return $this->redirect(array('action'=>'index'));
			}
				$this->Session->setFlash('Error category not saved!');

		}

	}

	public function edit($id = null)
	{
		if($this->request->is(array('post','put'))) {
			if($this->ProductCategory->save($this->request->data)) {
				$this->Session->setFlash('Category has been modified!');
				return $this->redirect(array('action'=>'index'));
			}
				$this->Session->setFlash('Error categyr not modified!');
		}

	$this->request->data = $this->ProductCategory->findById($id);

	}




}