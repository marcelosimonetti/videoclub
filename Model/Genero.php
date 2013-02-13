<?php
App::uses('AppModel', 'Model');
/**
 * Genero Model
 *
 * @property Pelicula $Pelicula
 */
class Genero extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'genero';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'genero' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Pelicula' => array(
			'className' => 'Pelicula',
			'joinTable' => 'generos_peliculas',
			'foreignKey' => 'genero_id',
			'associationForeignKey' => 'pelicula_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
