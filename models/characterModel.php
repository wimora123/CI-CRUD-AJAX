<?php

/**
 * 
 */
class CharacterModel extends CI_Model
{
	
	public function get_all_post()
	{
		return $this->db->get('anime', 4)->result();
	}

	public function get_post_more($limi)
	{
		return $this->db->get('anime', $limi)->result();
	}

	public function get_total_rows()
	{
		return $this->db->get('anime')->num_rows();
	}

	public function get_total_rows2($limi)
	{
		return $this->db->get('anime', $limi)->num_rows();
	}

	public function get_post_by_id($id)
	{
		return $this->db->get_where('anime', array('id_anime' => $id))->row();
	}

	public function add_new_post($dataInsert)
	{
		$this->db->insert('anime', $dataInsert);
	}

	public function update_post($dataUpdt, $where)
	{
		$this->db->update('anime', $dataUpdt, $where);
	}

	public function delete_post($dataDel)
	{
		$this->db->delete('anime', array('id_anime' => $dataDel));
	}
}

 ?>