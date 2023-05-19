<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * admins_name_value_exist Model Action
     * @return array
     */
	function admins_name_value_exist($val){
		$db = $this->GetModel();
		$db->where("name", $val);
		$exist = $db->has("admins");
		return $exist;
	}

	/**
     * admins_email_value_exist Model Action
     * @return array
     */
	function admins_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("admins");
		return $exist;
	}

	/**
     * user_lists_language_level_id_option_list Model Action
     * @return array
     */
	function user_lists_language_level_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,title AS label FROM language_levels";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * company_user_lists_user_list_id_option_list Model Action
     * @return array
     */
	function company_user_lists_user_list_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM user_lists ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * company_user_lists_user_id_option_list Model Action
     * @return array
     */
	function company_user_lists_user_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM users ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * student_docs_user_id_option_list Model Action
     * @return array
     */
	function student_docs_user_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT id AS value , name AS label FROM users ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
