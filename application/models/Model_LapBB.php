<?php 
 
class Model_LapBB extends CI_Model{

	function tampil_data(){
		$this->db->select('*');
		$this->db->from('ref_group');
		$this->db->join('ref_user', 'ref_user.id_group = ref_group.id_group');
        $this->db->order_by("created_at", "desc");
        return $this->db->get();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function select_group(){
		$this->db->order_by("create_at", "desc");
        return $this->db->get('ref_group');
	}

	
}