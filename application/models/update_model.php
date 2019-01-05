<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_model extends CI_Model {
	
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	function update($table,$tbl_id,$id,$data){
		$this->db->where($tbl_id, $id);
		$this->db->update($table, $data);
        }
	
}
/* End of file Update_model.php */
/* Location: ./application/models/Update_model.php */