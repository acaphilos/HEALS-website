<?php

class Course extends CI_Model 
{

	public function __construct() 
	{

		parent::__construct();
		//echo 'constructor';
	}

	public function getCourseData() {

		$query = $this->db->get('course');

		return $query->result();
	}

	public function updateCourse($data)
	{
		$value = array(
			'courseId' => trim($data['courseId']),
			'courseName' => trim($data['courseName']),
			'courseDesc' => trim($data['courseDesc']),
			'syllabus' => trim($data['syllabus']),
			'credits' => trim($data['credits']),
			'courseFee' => trim($data['courseFee']),
			'lecturerId' => trim($data['lecturerId']),
		);

		$this->db->where('courseId',$data['courseId']);

		if ($this -> db -> update('course',$value)) 
		{
		// echo 'update success';
		return true;
		} else 
		{
		// echo 'update error'
		return false;
		}

	}
}
?>