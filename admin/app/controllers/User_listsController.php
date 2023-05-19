<?php 
/**
 * User_lists Page Controller
 * @category  Controller
 */
class User_listsController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "user_lists";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("user_lists.id", 
			"user_lists.name", 
			"user_lists.email", 
			"user_lists.gender", 
			"user_lists.age", 
			"user_lists.language_level_id", 
			"language_levels.title AS language_levels_title", 
			"user_lists.date_of_birth", 
			"user_lists.photo", 
			"user_lists.select_status", 
			"user_lists.second_status", 
			"user_lists.second_date", 
			"user_lists.third_status", 
			"user_lists.third_date");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				user_lists.id LIKE ? OR 
				user_lists.name LIKE ? OR 
				user_lists.email LIKE ? OR 
				user_lists.password LIKE ? OR 
				user_lists.gender LIKE ? OR 
				user_lists.age LIKE ? OR 
				user_lists.language_level_id LIKE ? OR 
				user_lists.professional_career LIKE ? OR 
				user_lists.height LIKE ? OR 
				user_lists.weight LIKE ? OR 
				user_lists.qualification LIKE ? OR 
				user_lists.special_skills LIKE ? OR 
				user_lists.visited LIKE ? OR 
				user_lists.nrc LIKE ? OR 
				user_lists.date_of_birth LIKE ? OR 
				user_lists.address LIKE ? OR 
				user_lists.phone LIKE ? OR 
				user_lists.sibling LIKE ? OR 
				user_lists.visited_sibling LIKE ? OR 
				user_lists.account_type LIKE ? OR 
				user_lists.photo LIKE ? OR 
				user_lists.created_at LIKE ? OR 
				user_lists.updated_at LIKE ? OR 
				user_lists.select_status LIKE ? OR 
				user_lists.second_status LIKE ? OR 
				user_lists.second_date LIKE ? OR 
				user_lists.third_status LIKE ? OR 
				user_lists.third_date LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "user_lists/search.php";
		}
		$db->join("language_levels", "user_lists.language_level_id = language_levels.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("user_lists.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "User Lists";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("user_lists/list.php", $data); //render the full page
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("user_lists.photo", 
			"user_lists.id", 
			"user_lists.name", 
			"user_lists.email", 
			"user_lists.gender", 
			"user_lists.age", 
			"user_lists.language_level_id", 
			"language_levels.title AS language_levels_title", 
			"user_lists.professional_career", 
			"user_lists.height", 
			"user_lists.weight", 
			"user_lists.qualification", 
			"user_lists.special_skills", 
			"user_lists.visited", 
			"user_lists.nrc", 
			"user_lists.date_of_birth", 
			"user_lists.address", 
			"user_lists.phone", 
			"user_lists.sibling", 
			"user_lists.visited_sibling", 
			"user_lists.select_status", 
			"user_lists.second_status", 
			"user_lists.second_date", 
			"user_lists.third_status", 
			"user_lists.third_date");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("user_lists.id", $rec_id);; //select record based on primary key
		}
		$db->join("language_levels", "user_lists.language_level_id = language_levels.id", "INNER");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  User Lists";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("user_lists/view.php", $record);
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","name","gender","age","language_level_id","professional_career","height","weight","qualification","special_skills","visited","nrc","date_of_birth","address","phone","sibling","visited_sibling","second_status","second_date","third_status","third_date");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'name' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'age' => 'sanitize_string',
				'language_level_id' => 'sanitize_string',
				'professional_career' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'qualification' => 'sanitize_string',
				'special_skills' => 'sanitize_string',
				'visited' => 'sanitize_string',
				'nrc' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'address' => 'sanitize_string',
				'phone' => 'sanitize_string',
				'sibling' => 'sanitize_string',
				'visited_sibling' => 'sanitize_string',
				'second_status' => 'sanitize_string',
				'second_date' => 'sanitize_string',
				'third_status' => 'sanitize_string',
				'third_date' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("user_lists.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("user_lists");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$page_error = "No record updated";
						$this->set_page_error($page_error);
						$this->set_flash_msg($page_error, "warning");
						return	$this->redirect("user_lists");
					}
				}
			}
		}
		$db->where("user_lists.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  User Lists";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("user_lists/edit.php", $data);
	}
	/**
     * Update single field
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function editfield($rec_id = null, $formdata = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		//editable fields
		$fields = $this->fields = array("id","name","gender","age","language_level_id","professional_career","height","weight","qualification","special_skills","visited","nrc","date_of_birth","address","phone","sibling","visited_sibling","second_status","second_date","third_status","third_date");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'name' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'age' => 'sanitize_string',
				'language_level_id' => 'sanitize_string',
				'professional_career' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'qualification' => 'sanitize_string',
				'special_skills' => 'sanitize_string',
				'visited' => 'sanitize_string',
				'nrc' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'address' => 'sanitize_string',
				'phone' => 'sanitize_string',
				'sibling' => 'sanitize_string',
				'visited_sibling' => 'sanitize_string',
				'second_status' => 'sanitize_string',
				'second_date' => 'sanitize_string',
				'third_status' => 'sanitize_string',
				'third_date' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("user_lists.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount();
				if($bool && $numRows){
					return render_json(
						array(
							'num_rows' =>$numRows,
							'rec_id' =>$rec_id,
						)
					);
				}
				else{
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "No record updated";
					}
					render_error($page_error);
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		return null;
	}
	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
     * @return BaseView
     */
	function delete($rec_id = null){
		Csrf::cross_check();
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$this->rec_id = $rec_id;
		//form multiple delete, split record id separated by comma into array
		$arr_rec_id = array_map('trim', explode(",", $rec_id));
		$db->where("user_lists.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("user_lists");
	}
}
