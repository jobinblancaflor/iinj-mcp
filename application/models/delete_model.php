<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_model extends CI_Model {
	
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	function delete($table,$id_name,$id){
		$this->db->where($id_name, $id);
			$this->db->delete($table);
        }
	
}
/* End of file Delete_model.php */
/* Location: ./application/models/Delete_model.php */