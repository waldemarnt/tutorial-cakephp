<?php
App::uses('AppModel', 'Model');


class Product extends AppModel 
{
	public $validate = array(
	'title' => array(
		'rule'=>array(
			'notEmpty'
			),
		'message'=>'Title is not null'
		),
	'ref' => array(
		'rule'=>array(
			'numeric'
			),
		'message'=>'Only numbers here'
		),
	);	

    public $hasAndBelongsToMany = array(
        'ProductCategory' =>
                array(
                'className' => 'ProductCategory',
                'joinTable' => 'products_product_categories',
                'foreignKey' => 'product_id',
                'associationForeignKey' => 'product_category_id',
            )
    );

    
}