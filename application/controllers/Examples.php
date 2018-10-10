<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}





	public function country_management()
	{
//		$crud->set_theme('datatables');	
		$crud = new grocery_CRUD();
		
		$crud->set_table('country');
		$crud->columns('id','name','active');
		$crud->set_subject('country');
//		$crud->display_as('field_name','field_label');
//		$crud->set_relation('id','employees','firstName');
//		$crud->set_relation('name','employees','lastName');		
//		$crud->set_relation('active','employees','officeCode');
		$crud->field_type('active','true_false');
		$crud->required_fields('name','active');
		$output = $crud->render();
//		var_dump($output);
//		exit();
		$this->_example_output($output);
	}


	public function action_item_management()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('action_item');
		$crud->columns('id','name','active','description','status','owner','due_date','comments','week','month','reviesed_date','qty','target_timeline','type','short_code');
		$crud->set_subject('action_item');
		$crud->display_as('target_timeline','Target Time Line');
		$crud->field_type('active','true_false');
		$crud->required_fields('name','active');

//		$crud->change_field_type('description', 'text'); 	or		//		$crud->unset_texteditor('name','full_text');
		$output = $crud->render();
 
		$this->_example_output($output);
	}


	public function objective_management()
	{	
		$crud = new grocery_CRUD();
		
		$crud->set_table('objectives');
		$crud->columns('id','name','active','description','country','owner','due_date','comments','week','month','reviesed_date','qty','target_timeline','type','short_code');
		$crud->set_subject('objectives');
		$crud->display_as('target_timeline','Target Time Line');		
		$crud->field_type('active','true_false');
		$crud->required_fields('name','active');
//		$crud->change_field_type('description', 'text');		
		$output = $crud->render();
		 
		$this->_example_output($output);
	}


	public function status_management()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('status');
		$crud->columns('id','name','active');
		$crud->set_subject('status');
		$crud->field_type('active','true_false');
		$crud->required_fields('name','active');
		$output = $crud->render();

		$this->_example_output($output);
	}

	public function type_management()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('type');
		$crud->columns('id','name','active','short_code');
		$crud->set_subject('Type');
		$crud->field_type('active','true_false');
		$crud->required_fields('name','active');

//		$crud->set_relation('name','owner','name');

		$output = $crud->render();

		$this->_example_output($output);
	}


	public function owner_management()
	{
		$crud = new grocery_CRUD();
		
		$crud->set_table('owner');
		$crud->columns('id','name','active','short_count');
		$crud->set_subject('owner');

//		$crud->callback_edit_field( string $name , mixed $callback );
//		$crud->callback_edit_field('phone', function ($value, $primary_key) {
//		return '+30 <input type="text" maxlength="50" value="'.$value.'" name="phone" style="width:462px">';});

		$crud->field_type('active','true_false');
//		$crud->field_type('active','set',array('banana','orange','apple','lemon'));
		$crud->required_fields('name','active');
		$output = $crud->render();
//		var_dump($output);
//		exit();		 
		$this->_example_output($output);
	}

}
