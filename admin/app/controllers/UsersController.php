<?php 
/**
 * Users Page Controller
 * @category  Controller
 */
class UsersController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "users";
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
		$fields = array("users.id", 
			"users.name", 
			"users.gender", 
			"users.age", 
			"users.language_level_id", 
			"language_levels.title AS language_levels_title", 
			"users.phone_no", 
			"users.companie_id", 
			"users.first_status", 
			"users.first_select_date", 
			"users.second_status", 
			"users.second_select_date", 
			"users.third_status", 
			"users.third_select_date", 
			"users.last_login_at", 
			"users.last_login_ip", 
			"users.device");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				users.id LIKE ? OR 
				users.name LIKE ? OR 
				users.email LIKE ? OR 
				users.email_verified_at LIKE ? OR 
				users.password LIKE ? OR 
				users.gender LIKE ? OR 
				users.age LIKE ? OR 
				users.language_level_id LIKE ? OR 
				users.height LIKE ? OR 
				users.weight LIKE ? OR 
				users.date_of_birth LIKE ? OR 
				users.address LIKE ? OR 
				users.remember_token LIKE ? OR 
				users.created_at LIKE ? OR 
				users.updated_at LIKE ? OR 
				users.account_type LIKE ? OR 
				users.photo LIKE ? OR 
				users.education LIKE ? OR 
				users.foreign_experience LIKE ? OR 
				users.other_qualification LIKE ? OR 
				users.marital_status LIKE ? OR 
				users.blood_type LIKE ? OR 
				users.wearing_glasses_or_not LIKE ? OR 
				users.birth_place LIKE ? OR 
				users.nationality LIKE ? OR 
				users.religion LIKE ? OR 
				users.phone_no LIKE ? OR 
				users.nrc_photo_back LIKE ? OR 
				users.nrc_photo_front LIKE ? OR 
				users.household_members LIKE ? OR 
				users.is_active LIKE ? OR 
				users.japan_certificate LIKE ? OR 
				users.first_status LIKE ? OR 
				users.first_select_date LIKE ? OR 
				users.second_status LIKE ? OR 
				users.second_select_date LIKE ? OR 
				users.third_status LIKE ? OR 
				users.third_select_date LIKE ? OR 
				users.last_login_at LIKE ? OR 
				users.last_login_ip LIKE ? OR 
				users.device LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "users/search.php";
		}
		$db->join("language_levels", "users.language_level_id = language_levels.id", "INNER");
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("users.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Users";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("users/list.php", $data); //render the full page
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
		$fields = array("users.id", 
			"users.name", 
			"users.email", 
			"users.gender", 
			"users.age", 
			"users.language_level_id", 
			"language_levels.title AS language_levels_title", 
			"users.height", 
			"users.weight", 
			"users.date_of_birth", 
			"users.address", 
			"users.photo", 
			"users.education", 
			"users.foreign_experience", 
			"users.other_qualification", 
			"users.marital_status", 
			"users.blood_type", 
			"users.wearing_glasses_or_not", 
			"users.birth_place", 
			"users.nationality", 
			"users.religion", 
			"users.phone_no", 
			"users.nrc_photo_back", 
			"users.nrc_photo_front", 
			"users.household_members", 
			"users.japan_certificate", 
			"users.companie_id", 
			"users.first_status", 
			"users.first_select_date", 
			"users.second_status", 
			"users.second_select_date", 
			"users.third_status", 
			"users.third_select_date", 
			"users.last_login_at", 
			"users.last_login_ip", 
			"users.device");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("users.id", $rec_id);; //select record based on primary key
		}
		$db->join("language_levels", "users.language_level_id = language_levels.id", "INNER");  
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Users";
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
		return $this->render_view("users/view.php", $record);
	}
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("name","email","password","gender","age","language_level_id","height","weight","date_of_birth","address","education","foreign_experience","other_qualification","marital_status","blood_type","wearing_glasses_or_not","birth_place","nationality","religion","phone_no","nrc_photo_back","nrc_photo_front","household_members","japan_certificate","companie_id","first_status","first_select_date","second_status","second_select_date","third_status","third_select_date","last_login_at","last_login_ip","device");
			$postdata = $this->format_request_data($formdata);
			$cpassword = $postdata['confirm_password'];
			$password = $postdata['password'];
			if($cpassword != $password){
				$this->view->page_error[] = "Your password confirmation is not consistent";
			}
			$this->rules_array = array(
				'name' => 'required',
				'email' => 'required|valid_email',
				'password' => 'required',
				'gender' => 'required',
				'age' => 'required',
				'language_level_id' => 'required',
				'height' => 'required',
				'weight' => 'required',
				'date_of_birth' => 'required',
				'address' => 'required',
				'education' => 'required',
				'foreign_experience' => 'required',
				'other_qualification' => 'required',
				'marital_status' => 'required',
				'blood_type' => 'required',
				'wearing_glasses_or_not' => 'required',
				'birth_place' => 'required',
				'nationality' => 'required',
				'religion' => 'required',
				'phone_no' => 'required',
				'last_login_at' => 'required',
				'last_login_ip' => 'required',
				'device' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'email' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'age' => 'sanitize_string',
				'language_level_id' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'address' => 'sanitize_string',
				'education' => 'sanitize_string',
				'foreign_experience' => 'sanitize_string',
				'other_qualification' => 'sanitize_string',
				'marital_status' => 'sanitize_string',
				'blood_type' => 'sanitize_string',
				'wearing_glasses_or_not' => 'sanitize_string',
				'birth_place' => 'sanitize_string',
				'nationality' => 'sanitize_string',
				'religion' => 'sanitize_string',
				'phone_no' => 'sanitize_string',
				'nrc_photo_back' => 'sanitize_string',
				'nrc_photo_front' => 'sanitize_string',
				'household_members' => 'sanitize_string',
				'japan_certificate' => 'sanitize_string',
				'companie_id' => 'sanitize_string',
				'first_status' => 'sanitize_string',
				'first_select_date' => 'sanitize_string',
				'second_status' => 'sanitize_string',
				'second_select_date' => 'sanitize_string',
				'third_status' => 'sanitize_string',
				'third_select_date' => 'sanitize_string',
				'last_login_at' => 'sanitize_string',
				'last_login_ip' => 'sanitize_string',
				'device' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$password_text = $modeldata['password'];
			//update modeldata with the password hash
			$modeldata['password'] = $this->modeldata['password'] = password_hash($password_text , PASSWORD_DEFAULT);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("users");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Users";
		$this->render_view("users/add.php");
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
		$fields = $this->fields = array("id","name","email","gender","age","language_level_id","height","weight","date_of_birth","address","education","foreign_experience","other_qualification","marital_status","blood_type","wearing_glasses_or_not","birth_place","nationality","religion","phone_no","nrc_photo_back","nrc_photo_front","household_members","japan_certificate","companie_id","first_status","first_select_date","second_status","second_select_date","third_status","third_select_date","last_login_at","last_login_ip","device");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'name' => 'required',
				'email' => 'required|valid_email',
				'gender' => 'required',
				'age' => 'required',
				'language_level_id' => 'required',
				'height' => 'required',
				'weight' => 'required',
				'date_of_birth' => 'required',
				'address' => 'required',
				'education' => 'required',
				'foreign_experience' => 'required',
				'other_qualification' => 'required',
				'marital_status' => 'required',
				'blood_type' => 'required',
				'wearing_glasses_or_not' => 'required',
				'birth_place' => 'required',
				'nationality' => 'required',
				'religion' => 'required',
				'phone_no' => 'required',
				'last_login_at' => 'required',
				'last_login_ip' => 'required',
				'device' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'email' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'age' => 'sanitize_string',
				'language_level_id' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'address' => 'sanitize_string',
				'education' => 'sanitize_string',
				'foreign_experience' => 'sanitize_string',
				'other_qualification' => 'sanitize_string',
				'marital_status' => 'sanitize_string',
				'blood_type' => 'sanitize_string',
				'wearing_glasses_or_not' => 'sanitize_string',
				'birth_place' => 'sanitize_string',
				'nationality' => 'sanitize_string',
				'religion' => 'sanitize_string',
				'phone_no' => 'sanitize_string',
				'nrc_photo_back' => 'sanitize_string',
				'nrc_photo_front' => 'sanitize_string',
				'household_members' => 'sanitize_string',
				'japan_certificate' => 'sanitize_string',
				'companie_id' => 'sanitize_string',
				'first_status' => 'sanitize_string',
				'first_select_date' => 'sanitize_string',
				'second_status' => 'sanitize_string',
				'second_select_date' => 'sanitize_string',
				'third_status' => 'sanitize_string',
				'third_select_date' => 'sanitize_string',
				'last_login_at' => 'sanitize_string',
				'last_login_ip' => 'sanitize_string',
				'device' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("users.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("users");
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
						return	$this->redirect("users");
					}
				}
			}
		}
		$db->where("users.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Users";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("users/edit.php", $data);
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
		$fields = $this->fields = array("id","name","email","gender","age","language_level_id","height","weight","date_of_birth","address","education","foreign_experience","other_qualification","marital_status","blood_type","wearing_glasses_or_not","birth_place","nationality","religion","phone_no","nrc_photo_back","nrc_photo_front","household_members","japan_certificate","companie_id","first_status","first_select_date","second_status","second_select_date","third_status","third_select_date","last_login_at","last_login_ip","device");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'name' => 'required',
				'email' => 'required|valid_email',
				'gender' => 'required',
				'age' => 'required',
				'language_level_id' => 'required',
				'height' => 'required',
				'weight' => 'required',
				'date_of_birth' => 'required',
				'address' => 'required',
				'education' => 'required',
				'foreign_experience' => 'required',
				'other_qualification' => 'required',
				'marital_status' => 'required',
				'blood_type' => 'required',
				'wearing_glasses_or_not' => 'required',
				'birth_place' => 'required',
				'nationality' => 'required',
				'religion' => 'required',
				'phone_no' => 'required',
				'last_login_at' => 'required',
				'last_login_ip' => 'required',
				'device' => 'required',
			);
			$this->sanitize_array = array(
				'name' => 'sanitize_string',
				'email' => 'sanitize_string',
				'gender' => 'sanitize_string',
				'age' => 'sanitize_string',
				'language_level_id' => 'sanitize_string',
				'height' => 'sanitize_string',
				'weight' => 'sanitize_string',
				'date_of_birth' => 'sanitize_string',
				'address' => 'sanitize_string',
				'education' => 'sanitize_string',
				'foreign_experience' => 'sanitize_string',
				'other_qualification' => 'sanitize_string',
				'marital_status' => 'sanitize_string',
				'blood_type' => 'sanitize_string',
				'wearing_glasses_or_not' => 'sanitize_string',
				'birth_place' => 'sanitize_string',
				'nationality' => 'sanitize_string',
				'religion' => 'sanitize_string',
				'phone_no' => 'sanitize_string',
				'nrc_photo_back' => 'sanitize_string',
				'nrc_photo_front' => 'sanitize_string',
				'household_members' => 'sanitize_string',
				'japan_certificate' => 'sanitize_string',
				'companie_id' => 'sanitize_string',
				'first_status' => 'sanitize_string',
				'first_select_date' => 'sanitize_string',
				'second_status' => 'sanitize_string',
				'second_select_date' => 'sanitize_string',
				'third_status' => 'sanitize_string',
				'third_select_date' => 'sanitize_string',
				'last_login_at' => 'sanitize_string',
				'last_login_ip' => 'sanitize_string',
				'device' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("users.id", $rec_id);;
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
		$db->where("users.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("users");
	}
}
