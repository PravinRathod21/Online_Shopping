<?php
class model extends CI_Model
{

	/*View User database*/
	function display_records()
	{
		$query = $this->db->get("users");
		return $query->result();
	}

	/*View User database by ID*/
	function display_by_id($id)
	{
		$query=$this->db->query("select * from users where id='".$id."'");
	return $query->result();
	}

	/*View electronics  database by ID*/
	function display_by_id_info($id)
	{
		$query=$this->db->query("select * from electronics where id='".$id."'");
	return $query->result();
	}

	function display_records_toy()
	{
		$query = $this->db->get("toys");
		return $query->result();
	}
	function display_records_home_kitchen()
	{
		$query = $this->db->get("home_kitichen");
		return $query->result();
	}

	/*View Electronics database*/
	function display_recordss()
	{
		$query = $this->db->get("electronics");
		return $query->result();
	}

	/*View User database*/
	function users()
	{
		$query = $this->db->get("person");
		return $query->result();
	}

	/*View website_information database*/
	function website_setting()
	{
		$query = $this->db->get("website_information");
		return $query->result();
	}
	function update_info($name,$logo,$icon)
	{
		// $data = array(
		// 	"name"=> $name,
		// 	"logo"=> $logo,
		// 	"icon"=> $icon,$data
		// );
		
		// $query=
		$this->db->query("UPDATE website_information SET name='$name', logo='$logo' , icon='$icon' WHERE id=1");
		return true;
	}
	function update__store_info($data)
	{
		$query =$this->db->insert('store_information', $data);
		// $this->db->insert("UPDATE `store_information` SET `store_name`='$store_name',`store_email`='$store_email',`legal_name`='$legal_name',`phone`='$phone',`street`='$street',`apartment`='$apartment',`city`='$city',`pin_num`='$pin_num',`country`='$country',`state`='$state',`currency`='$currency' WHERE `id =1'");
		return true;
	}

	function otp_sent($otp)
	{
		$query=$this->db->query("select* from person where otp='$otp'");
		return $query->result();
	}

	/*save data in database*/
	function saverecords($data)
	{
		$query =$this->db->insert('person', $data);
		return true;
	}
	       
	function displayrecordsById($email, $pass)
	{
		$query = $this->db->get_where('person', array('email' => $email, 'otp' => $pass));

		return $query->row_array();
	}


	function user_update_profile($id)
	{
		$query=$this->db->query("select * from person where id='".$id."'");
	return $query->result();
	}
	function user_delete_profile($id)
	{
		$query=$this->db->query("DELETE FROM `person` WHERE id='".$id."'");
	    return true;
	}

	function update__user_info($data,$id)
	{

		$data = array(
			"photo"=>$data['photo'],
				"first_name"=>$data['first_name'],
				"last_name"=> $data['last_name'],
				"email"=> $data['email'],
				'phone_num'=> $data['phone_num'],
				'dob'=> $data['dob'],
				'gender'=> $data['gender'],
				'address'=> $data['address'],
			);
			$this->db->where('id', $id);
			$this->db->update('person', $data);
	return true;
	}

	/*Delete*/
	//   function deleterecords($id)
//   {
//     $this->db->where("id", $id);
//     $this->db->delete("crud");
//     return true;
//   }
//   	function displayrecordsById($id)
// 	{
// 	$query=$this->db->query("select * from crud where id=$id");
// 	return $query->result();
// 	}

	/*Update*/
	function User_login($email, $pass)
	{
		$query = $this->db->query("select * from Users where email='$email',otp='$pass' ");
		$row = $query->num_rows();
		if (count($row) > 0) {
			echo "<script>alert('login succesfull')</script>";
			// redirect('http://localhost:8080/coreigniter_4/Welcome'); 
		} else {
			echo "Insert error !";

		}
	}
}