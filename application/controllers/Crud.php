<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
	function __construct()
	{
		// calling parent constructor
		parent::__construct();
		// $this->load->helper(('url'));
	}

	public function Index()
	{
		$data['product_details'] = $this->Crud_model->getAllProducts();
		$this->load->view('Crud/Index', $data);
	}   //Function end

	public function AddProduct()
	{

		$this->form_validation->set_rules('name', 'Product Name', 'trim|required');
		$this->form_validation->set_rules('price', 'Product Price', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$data_error = [
				'error' => validation_errors()
			];

			$this->session->set_flashdata($data_error);
		} else {

			$result = $this->Crud_model->InsertProduct([

				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'quantity' => $this->input->post('quantity')

			]);

			if ($result) {
				$this->session->set_flashdata('inserted', 'Your data has been submited successfully...!');
			}
		}

		redirect('Crud');

	}

	public function EditProduct($id)
	{
		$data['singleProduct'] = $this->Crud_model->getSingleProduct($id);

		$this->load->view('EditView', $data);
	}


	public function Update($id)
	{
		$this->form_validation->set_rules('name', 'Product Name', 'trim|required');
		$this->form_validation->set_rules('price', 'Product Price', 'trim|required');
		$this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$data_error = [
				'error' => validation_errors()
			];

			$this->session->set_flashdata($data_error);
		} else {

			$result = $this->Crud_model->UpdateProduct([

				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'quantity' => $this->input->post('quantity')

			], $id);

			if ($result) {
				$this->session->set_flashdata('updated', 'Your data has been updated successfully...!');
			}
		}

		redirect('Crud');
	}

	public function DeleteProduct($id)
	{
		$result = $this->Crud_model->DeleteItem($id);

		if( $result == TRUE ) {

			$this->session->set_flashdata('deleted','The Product has been deleted');
		} 

		redirect('Crud');

	}
}

?>