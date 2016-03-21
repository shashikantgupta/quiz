<?php
/**
 * Implements hook_views_data().
 */
function employee_views_data() {
    $data = array();

    $data['employee']['table']['group'] = t('Employee Detail');

    $data['employee']['table']['base'] = array(
        'title' => t('Employee Detail'),
        'help' => t('Contains records we want exposed Employee Detail to Views.'),
    );
    $data['employee']['id'] = array(
		'title' => t('ID'),
		'help' => t('The record ID.'),
		'field' => array(
			'handler' => 'views_handler_field_numeric',
		),
		'sort' => array(
			'handler' => 'views_handler_sort',
		),
		'filter' => array(
			'handler' => 'views_handler_filter_numeric',
		),
	);
	
	
	// The Name field
	$data['employee']['emp_name'] = array(
		'title' => t('Name'),
		'help' => t('The Employee name.'),
		'field' => array(
			'handler' => 'views_handler_field',
		),
		'sort' => array(
			'handler' => 'views_handler_sort',
		),
		'filter' => array(
			'handler' => 'views_handler_filter_string',
		),
	);

	// The Deadline field
	$data['employee']['emp_mail'] = array(
		'title' => t('Deadline'),
		'help' => t('The Employee mail.'),
		'field' => array(
			'handler' => 'views_handler_field',
		),
		'sort' => array(
			'handler' => 'views_handler_sort',
		),
		'filter' => array(
			'handler' => 'views_handler_filter_string',
		),
	);	
	
	$data['employee']['table']['join'] = array(
		'users' => array(
			'left_field' => 'uid',
			'field' => 'emp_id',
		),
	);
	
	$data['employee']['emp_id'] = array(
		'title' => t('Employee ID'),
		'help' => t('The record Employee ID.'),
		'field' => array(
			'handler' => 'views_handler_field_user',
		),
		'sort' => array(
			'handler' => 'views_handler_sort',
		),
		'filter' => array(
			'handler' => 'views_handler_field_user',
		),
		'relationship' => array(
			'base' => 'users',
			'field' => 'emp_id',
			'handler' => 'views_handler_relationship',
			'label' => t('User'),
		),
		'argument' => array(
			'handler' => 'views_handler_argument_user_uid',
			'numeric' => TRUE,
			'validate type' => 'uid',
		),
	);
	
    return $data;
}


