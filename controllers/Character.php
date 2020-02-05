<?php 

/**
 * 
 */
date_default_timezone_set('Asia/Jakarta');

class Character extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	public function index()
	{	
		$data['page']="pages/character";
		$this->load->view('Index', $data);
	}

	public function select_data()
	{
		$data = $this->characterModel->get_all_post();
		echo json_encode($data);
	}

	public function show_more()
	{
      $output = '';
      $no=0;
      $limi = $this->input->post('showMoreData');
      $totalResult = $this->characterModel->get_total_rows();
      $totalResult2 = $this->characterModel->get_total_rows2($limi);
      $result = $this->characterModel->get_post_more($limi);

      if(isset($limi))
      {

	    if($totalResult2 > 0)
		{
		   foreach($result AS $row)
		   {
		    $output .= '<tr data='.$totalResult.'>
	                  <td><p style="font-weight: bold; font-family: arial; color:DarkOrchid;" align="center">'.($no+1).'</p></td>
	                  <td><p style="font-weight: bold; font-family: arial; color:DarkOrchid;">'.$row->title_anime.'</p></td>
	                   <td><p style="font-weight: bold; font-family: arial; color:DarkOrchid;">'.$row->desc_anime.'</p></td>
	                     <td><button type="button" class="btn btn-info goUpdate" dataID="'.$row->id_anime.'" dataTitle="'.$row->title_anime.'" dataDesc="'.$row->desc_anime.'" data-toggle="modal" data-target="#myModalUpdate">Update</button></td>\
	                   <td><button type="button" class="btn btn-warning btnDelete" dataDel="'.$row->id_anime.'">Delete</button></td>
	                </tr>';   
	                $no++;
		   }

		    $output .= ' <tr>
	                    <td colspan = "5"><center><button type="button" class="btn btn-info btnShowMore">Show More</button></center></td>
	                    </tr>';
		}

	}
  		echo $output;
 		echo json_encode($result);
	}

	public function count_anime()
	{
		$data = $this->characterModel->get_total_rows();
		echo json_encode($data);
	}

	public function add_post()
	{
		// $this->form_validation->set_rules('fileToUpload', 'Image', 'required');
	

		// if($this->form_validation->run() != FALSE)
		// {
		// 	$config['upload_path']          = 'assets/img/';
	 //        $config['allowed_types']        = 'gif|jpg|png';
	 //        $config['max_size']             = 2500;
	 //        $config['max_width']            = 2000;
	 //        $config['max_height']           = 1850;
	 //        $config['overwrite'] 			= TRUE;

	 //        $this->upload->initialize($config);

	 //        if ( ! $this->upload->do_upload('fileToUpload'))
	 //        {
		//         $error = array('error' => $this->upload->display_errors());
		//         $this->session->set_flashdata('failed', $error);
		//         redirect('Character');
	 //      	}
	 //        else
	 //        {
	 //        	$dataImage = $this->upload->data();
	 //        }

			$idAnime = $this->input->post('IDAnime');
			
			// $imageAnime = $dataImage['file_name'];
			$titleAnime = $this->input->post('titleAnime');
			$descAnime = $this->input->post('descAnime');

			
			$data = array(
				'id_anime' => $idAnime,
				'title_anime' => $titleAnime,
				'desc_anime' => $descAnime
			);
			// print_r($data);
			// die();
			$this->session->set_flashdata('success', 'Insert Succeeded');
			$this->characterModel->add_new_post($data);
			
			echo json_encode($data);

	}

	public function delete_post()
	{
		$id = $this->input->post('idDel');
		$data = $this->characterModel->delete_post($id);

		$this->session->set_flashdata('success', 'Delete Succeeded');
		echo json_encode($data);
	
	}

	public function ambilID()
	{
		$id = $this->input->post('idAnime');
		$data = $this->characterModel->get_post_by_id($id);
		// $data = $this->characterModel->update_post(array(
		// 'id_anime' => ));

		// $this->session->set_flashdata('success', 'Update Succeeded');
		echo json_encode($data);
	}

	public function update_post()
	{
		$idAnime = $this->input->post('idUpdate');
		$titleAnime = $this->input->post('titleUpdate');
		$descAnime = $this->input->post('descUpdate');

		$data=$this->characterModel->update_post(array
			(
			'id_anime' => $idAnime,
			'title_anime' => $titleAnime,
			'desc_anime' => $descAnime
			),array(
			'id_anime' => $idAnime
			)
		);
		$this->session->set_flashdata('success', 'Update Succeeded');
		echo json_encode($data);
	}


}

 ?>