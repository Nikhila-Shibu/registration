<?php
class mainmodel extends CI_model
{
// public function regist($a)
// {
// $this->db->insert("details",$a);
// }
// public function encpswd($pass)
// {
// 	return password_hash($pass, PASSWORD_BCRYPT);
// }
// //public function view()
// //{
// 	//$this->db->select('*');
// 	//$qry=$this->db->get("details");
// 	//return $qry;
// //}
// public function singledata($id)
// {
// 	$this->db->select('*');
// 	$this->db->where("id",$id);
// 	$qry=$this->db->get("details");
// 	return $qry;
// }
// public function singleselect()
// {
// 	$qry=$this->db->get("details");
// 	return $qry;
// }
// public function updatedetails($a,$id)
// {
// 	$this->db->select('*');
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("details",$a);
// 	return $qry;
// }
// public function deletedetails($id)
// {
// 	$this->db->where('id',$id);
// 	$this->db->delete("details");
// }
// public function viewdata()
// {
// 	$this->db->select('*');
// 	$qry=$this->db->get("details");
// 	return $qry;
// }
// public function approve($id)
// {
// 	$this->db->set('status','1');
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("details");
// 	return $qry;
// }
// public function reject($id)
// {
// 	$this->db->set('status','2');
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("details");
// 	return $qry;
// }
// public function login()
// {

// }
// public function selectpass($email,$pass)
// {
// 	$this->db->select('password');
// 	$this->db->from("details");
// 	$this->db->where("email",$email);
// 	$qry=$this->db->get()->row('password');
// 	return $this->verifypass($pass,$qry);
// }
// public function verifypass($pass,$qry)
// {
// 	return password_verify($pass,$qry);
// }
// public function getuserid($email)
// {
// 	$this->db->select('id');
// 	$this->db->from("details");
// 	$this->db->where("email",$email);
// 	return $this->db->get()->row('id');
// }
// public function getuser($id)
// {
// 	$this->db->select('*');
// 	$this->db->from("details");
// 	$this->db->where("id",$id);
// 	return $this->db->get()->row();
// }


// public function formi($b,$c)
// { 
// 	$this->db->insert("regi_details",$c);
// 	$this->db->insert("reg_details",$b);	
	
// 	}
// 	 public function regist_form($b,$c) 
// 	 { 
// 	 	$this->db->insert("regi_details",$c);
// $loginid=$this->db->insert_id(); $b["loginid"]=$loginid;
// $this->db->insert("reg_details",$b); 
// } 
// public function view()
//  {
// $this->db->select('*');
// $qry=$this->db->join('regi_details','regi_details.id=reg_details.loginid','inner');
// $n=$this->db->get("reg_details"); return $n; 
// } 
// public function dataviewi() {
// $this->db->select('*');
// $qry=$this->db->join('regi_details','regi_details.id=reg_details.loginid','inner');
// $qry=$this->db->get("reg_details"); return $qry; 
// }
//  public function approval($loginid) 
//  { $this->db->set('status','1');
// $qry=$this->db->where("id",$loginid); $qry=$this->db->update("regi_details");
// return $qry; 
// } 
// public function reject_reg($loginid) 
// {
// $this->db->set('status','2'); $qry=$this->db->where("id",$loginid);
// $qry=$this->db->update("regi_details"); return $qry;
//  }


// 	public function teacher_reg($d,$e)
// 	{
// 		$this->db->insert("regi_details",$e);
// 		$loginid=$this->db->insert_id();
// 		$d["loginid"]=$loginid;
// 		$this->db->insert("teacher_details",$d);
// 	}

//     public function encpswds($pass)
// {
	
// 	return password_hash($pass, PASSWORD_BCRYPT);
// }

	
// public function views()
// {
// 	$this->db->select('*');
// 	$qry=$this->db->join('regi_details','regi_details.id=teacher_details.loginid','inner');
// 	$n=$this->db->get("teacher_details");
// 	return $n;
// }
// public function login_students()
// {

// }
// public function selectpassed($email,$pass)
// {
// 	$this->db->select('password');
// 	$this->db->from("regi_details");
// 	$this->db->where("email","$email");
// 	$qry=$this->db->get()->row("password");
// 	return $this->verifypassed($pass,$qry);
// }
// public function verifypassed($pass,$qry)
// {
// 	return password_verify($pass,$qry);
// }
// public function getuseridd($email)
// {
// 	$this->db->select('id');
// 	$this->db->from("regi_details");
// 	$this->db->where("email","$email");
// 	return $this->db->get()->row('id');
// }
// public function getusers($id)
// {
// 	$this->db->select('*');
// 	$this->db->from("regi_details");
// 	$this->db->where("id",$id);
// 	return $this->db->get()->row();
// }
// public function updates($id)
// {
// 	$this->db->select("*");
// 	$qry=$this->db->join('regi_details','regi_details.id=reg_details.loginid','inner');
// 	$qry=$this->db ->where('reg_details.loginid',$id);
// 	$qry=$this->db->get("reg_details");
// 	return $qry;
// }
// public function updatedetailst($p,$u,$id)
// {
// 	$this->db->select('*');
// 	$qry=$this->db->where("loginid",$id);
// 	$this->db->join('regi_details','regi_details.id=reg_details.loginid','inner');
// 	$qry=$this->db->update("reg_details",$p);
// 	$qry=$this->db->where("id",$id);
// 	$qry=$this->db->update("regi_details",$u);
// 	return $qry;


// }

// public function notifi_table($e)
// {
// $this->db->insert("notification",$e);
// }
// public function notifi_view()
//  {
// $this->db->select('*');
// $qry=$this->db->join('teacher_details','teacher_details.loginid=notification.loginid','inner');
// $n=$this->db->get("notification");
//  return $n; 
// } 
// public function notification_delete()
// {
// 	$this->db->select('*');
// 	$n=$this->db->get("notification");
// 	return $n;
// }
// public function delete_notifi($id)
// {
// 	$this->db->where('id',$id);
// 	$this->db->delete("notification");
// }
public function regiss($a)
{
$this->db->insert("user_register",$a);
}
public function encpswd($pass)
{
	return password_hash($pass, PASSWORD_BCRYPT);
}
public function approve_use()
{
	$this->db->select('*');
	$qry=$this->db->get("user_register");
	return $qry;
}
public function approvedetail($id)
{
	$this->db->set('status','1');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("user_register");
	return $qry;
}
public function rejectdetail($id)
{
	$this->db->set('status','2');
	$qry=$this->db->where("id",$id);
	$qry=$this->db->update("user_register");
	return $qry;
}

public function selectpass($email,$pass)
{
	$this->db->select('password');
	$this->db->from("user_register");
	$this->db->where("email",$email);
	$qry=$this->db->get()->row('password');
	return $this->verifypass($pass,$qry);
}
public function verifypass($pass,$qry)
{
	return password_verify($pass,$qry);
}
public function getuserid($email)
{
	$this->db->select('id');
	$this->db->from("user_register");
	$this->db->where("email",$email);
	return $this->db->get()->row('id');
}
public function getuser($id)
{
	$this->db->select('*');
	$this->db->from("user_register");
	$this->db->where("id",$id);
	return $this->db->get()->row();
}

}
?>