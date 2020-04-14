<?php 

class M_photo_booth extends CI_Model
{
	public function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
	public function getdata($table)
	{
		return $this->db->get($table)->result();
	}
	public function deletedata($where,$table)
	{
		$this->db->where($where);
		return $this->db->delete($table);
	}
	public function editdata($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function updatedata($table,$data,$where)
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	public function delete_data($where,$table,$data)
	{
		$this->db->where($where);
		return $this->db->delete($table,$data);
	}

	public function getdata_ya()
	{
		$this->db->where('status', 'Ya');
		return $this->db->get('tbl_background');
	}

	public function get_count()
	{
		$sql = "SELECT count(status) as status FROM tbl_background";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}

	public function get_sum()
	{
		$sql = "SELECT sum(status) as status FROM tbl_background";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}
	
	public function kategori()
	{
		$this->db->where('status','1');

		$cek  = $this->db->get('tbl_background')->num_rows();

		if($cek <= 7){

			$hasil = 'Resiko Rendah';

		}elseif($cek >= 7 && $cek <=14){

			$hasil = 'Resiko Sedang';

		}else{

			$hasil = 'Resiko Tinggi';
	
		}
			return $hasil;
	}
	
	
}
 ?>
