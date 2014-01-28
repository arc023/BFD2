<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


public function get_news($slug = FALSE)
{
	if ($slug === FALSE)
	{
		$query = $this->db->get('userContacts');
		return $query->result_array();
	}

	$query = $this->db->get_where('userContacts', array('userID' => $slug));
	return $query->row_array();
}

public function set_news()
{
	$this->load->helper('url');

	$slug = url_title($this->input->post('firstname'), 'dash', TRUE);

	$data = array(
		'firstname' => $this->input->post('firstname'),
		'lastname' => $this->input->post('lastname'),
		'userID' => $slug,
		'notesID' => $this->input->post('notesID')
	);

	return $this->db->insert('userContacts', $data);
}

}