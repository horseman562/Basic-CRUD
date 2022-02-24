<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->load->model('Crud__model');
		$this->load->model('phone_number');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function insert()
	{
		if ($this->input->is_ajax_request()) {



			$ajax_data = $this->input->post('name');

			$ajax_data_num = $this->input->post('phone_numberr');
			$ajax_data_nume = $this->input->post();
			unset($ajax_data_nume['phone_numberr']);
			/* $object['name'] = $ajax_data; */
			if ($this->Crud__model->insert_entry($ajax_data_nume)) {
				$id = $this->Crud__model->single_entry_name($ajax_data);
				$setid = $id[0]->id;
				$object['user_id'] = $setid;
				$object['number'] = $ajax_data_num;
				$data = array('response' => "success", 'message' => 'Data added successfully');



				/* $object['phone_numberr'] = $ajax_data_num; */
				$this->phone_number->insert_entry($object);
			} else {
			}
		} else {
			echo "no";
		}

		echo json_encode($data);
	}

	public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			$offset = $this->input->post('offset');
			$posts = $this->Crud__model->get_entries((int)$offset);
			$num_phone = $this->phone_number->get_entries();


			/* echo json_encode($posts); */
			echo json_encode(array(
				'posts' => $posts,
				'numphone' => $num_phone,
				'offset' => $offset
			));
		}
	}

	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->Crud__model->delete_entry($del_id)) {
				$data = array('responce' => "success",);
			} else {
				$data = array('responce' => "error");
			}

			echo json_encode($data);
		}
	}

	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$this->input->post('edit_id');

			$edit_id = $this->input->post('edit_id');


			if ($post = $this->Crud__model->single_entry($edit_id)) {
				$lost = $this->phone_number->single_entry_edit($edit_id);
				$data = array('response' => "success", 'post' => $post, 'id' => $edit_id, 'lost' => $lost);
			} else {
				$data = array('response' => "error", 'message' => "failed");
			}

			echo json_encode($data);
		}
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('edit_name', 'Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id'] = $this->input->post('edit_id');
				$data['name'] = $this->input->post('edit_name');
				if ($this->Crud__model->update_entry($data)) {
					$data_ph['value'] = $this->input->post('splitted_val');
					$data_ph['id'] = $this->input->post('edit_id');
					$posts = $this->phone_number->update_entry_ph($data_ph);
					$data = array('response' => 'success', 'message' => 'Data update successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'failed');
				}
			}
		} else {
			echo "no";
		}

		echo json_encode($data);
		/* echo json_encode($posts); */
	}

	public function add_number()
	{
		if ($this->input->is_ajax_request()) {
			$this->input->post('add_id');
			$this->input->post('number');

			/* Return id of user */
			$add_id = $this->input->post('add_id');
			$number = $this->input->post('number');

			$post = $this->phone_number->single_entry($add_id);
			if ($post != null) {
				$data = "working";
			} else {
				$data = "not working";
			}
			/* if ($post = $this->phone_number->single_entry($add_id)) {
				$data = array('response' => "success", 'post' => $post);
			} else {
				$data = array('response' => "success");
			} */

			echo json_encode($add_id);
		}
	}

	public function phone_num()
	{
		if ($this->input->is_ajax_request()) {

			/* $this->input->post('edit_id');
			$this->input->post('number'); */

			/* Return id of user */


			$this->input->post('edit_id');
			/* Return id of user */
			$data['user_id'] = $this->input->post('fi');
			$data['number'] = $this->input->post('number');

			$post = $this->phone_number->insert_entry($data);


			echo json_encode($data);
		}
	}

	public function search()
	{
		if ($this->input->is_ajax_request()) {

			$data = $this->input->post('search');

			if (preg_match('~[0-9]+~', $data)) {
				$numdat = $this->phone_number->search_number($data);
			} else {
				$post = $this->Crud__model->search_name($data);

				$get = $this->phone_number->search($post);
			}

			/* Return id of user */






			echo json_encode($get);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */