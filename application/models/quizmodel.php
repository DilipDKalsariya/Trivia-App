<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {

	/* Get single question */
	public function getQuestion($queId = 1)
	{
		$this->db->select("question,que_Id");
		$this->db->where('que_Id',$queId);
		$this->db->from("question");
		
		$query = $this->db->get();
		
		return $query;
		
	}

	/* Insert data into db*/
	public function save_data($data)
	{
		return $this->db->insert_batch('quiz',$data);
	}

	/* Get last quiz record */
	function getLastRecord()
	{
		$this->db->select("que_Id,answer");
		$this->db->limit(3);
		$this->db->order_by("answer_Id", "desc");
		$query = $this->db->get("quiz");
		return $query;
	}

	/* Get  all quiz data*/
	public function get_all_quiz()
	{
		$this->db->select("question,quiz.que_Id,answer,quiz.created_on");
		$this->db->JOIN('question','quiz.que_Id = question.que_Id','left');
		$this->db->order_by('quiz.created_on','DESC');
		$this->db->from("quiz");
		
		$query = $this->db->get();
		
		return $query;
	}
}