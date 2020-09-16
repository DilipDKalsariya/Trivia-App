<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	Dilip Kalsariya 15 Sep 2020
*/
class Home extends CI_Controller {

	 public function __construct() {
	      parent::__construct(); 
	      $this->load->model('quizmodel');         
	 }

	 /* 
	    -> Default function for first question
        ->  First question
	 */
	public function index()
	{
		$postData = $this->input->post();
		$this->form_validation->set_rules('quesid_1','question one','trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('question_one',$postData);
		} else {
			$this->session->set_userdata('quesid_1', $postData["quesid_1"]);
			redirect("home/question_second");
		}
	}

	 /* function for second question*/
	public function question_second()
	{
		$data = $this->quizmodel->getQuestion(2)->row_array(); // 2 for question 2
		$postData = $this->input->post();
		$this->form_validation->set_rules('quesid_2','question two','trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('question_second',$data);
		} else {
			$this->session->set_userdata('quesid_2', $postData["quesid_2"]);
			redirect("home/question_third");
		}
	}

	 /* function for third question*/
	public function question_third()
	{
		if(!$this->session->userdata('quesid_1') || !$this->session->userdata('quesid_2')){
			redirect("home");
		}
		$postData = $this->input->post();
		$data = $this->quizmodel->getQuestion(3)->row_array(); // 3 for question 3
		$this->form_validation->set_rules('quesid[]','question three','trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('question_third',$data);
		} else {
			$inserData[0]['que_Id'] = 1;
			$inserData[0]['answer'] = $this->session->userdata("quesid_1");
			$inserData[1]['que_Id'] = 2;
			$inserData[1]['answer'] = $this->session->userdata("quesid_2");
			$inserData[2]['que_Id'] = 3;
			$inserData[2]['answer'] = implode(',',$postData['quesid']);
			$this->quizmodel->save_data($inserData);
			$this->session->unset_userdata('quesid_1');
			$this->session->unset_userdata('quesid_2');
			redirect("home/summary");
		}
	}

	/*function for summary*/
	public function summary()
	{
		$data["arr"] = $this->quizmodel->getLastRecord()->result_array();
		$this->load->view('summary',$data);
	}
	
	/*Show history quiz*/
	public function historyQuiz()
	{
		$result = $this->quizmodel->get_all_quiz()->result_array();
		 
		$group = [];
		foreach ($result as $item)  {
		    if (!isset($group[$item['created_on']])) {
		        $group[$item['created_on']] = [];
		    }
		     $group[$item['created_on']][] = $item;
		}
		$data['quiz'] = $group;
		
        $this->load->view('history',$data);
    
	}

}
