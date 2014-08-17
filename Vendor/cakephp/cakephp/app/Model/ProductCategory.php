<?php
App::uses('AppModel', 'Model');


class ProductCategory extends AppModel 
{
	public $validate = array(
	'name' => array(
		'rule'=>array(
			'notEmpty'
			),
		'message'=>'Title is not null'
		)
	);	
    public $hasAndBelongsToMany = array(
        'Product' =>
            array(
                'className' => 'ProductCategory',
                'joinTable' => 'products_product_categories',
                'foreignKey' => 'product_category_id',
                'associationForeignKey' => 'product_id',
            )
    );
}