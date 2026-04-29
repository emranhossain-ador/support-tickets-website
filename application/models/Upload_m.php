<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_m extends CI_Model
{
	public function upload($size = '250')
	{
		ini_set('memory_limit', '-1');
		$data = array();
	
		if (!empty($_FILES['file']['name'])) {
			$filesCount = count($_FILES['file']['name']);
			for ($i = 0; $i < $filesCount; $i++) {
				$_FILES['uploadFile']['name'] = str_replace(",", "", $_FILES['file']['name'][$i]);
				$_FILES['uploadFile']['type'] = $_FILES['file']['type'][$i];
				$_FILES['uploadFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
				$_FILES['uploadFile']['error'] = $_FILES['file']['error'][$i];
				$_FILES['uploadFile']['size'] = $_FILES['file']['size'][$i];
	
				// Directory where files will be uploaded
				$uploadPath = 'uploads/';
	
				$config['upload_path'] = $uploadPath . 'images/';
				$config['allowed_types'] = '*';
				$config['overwrite'] = TRUE;
				$config['encrypt_name'] = TRUE; // Ensures unique file names
	
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->load->library('image_lib'); // Resize library
	
				if ($this->upload->do_upload('uploadFile')) {
					$fileData = $this->upload->data();
					
					// Ensure file extension is included
					$fileName = $fileData['raw_name'] . $fileData['file_ext'];
	
					$uploadData[$i]['file_name'] = $fileName;
	
					// Resize Configuration
					$config = array(
						'source_image'      => $fileData['full_path'],
						'new_image'         => $uploadPath . 'thumb/' . $fileName, // Ensure correct file path
						'maintain_ratio'    => true,
						'width'             => $size,
						'height'            => $size
					);
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
				} else {
					$error = array('error' => $this->upload->display_errors());
					foreach ($error as $key => $value) {
						$msg[$key] = $value;
					}
					return ['st' => 0, 'data' => $msg];
				}
			}
	
			if (!empty($uploadData)) {
				foreach ($uploadData as $key => $value) {
					$data[$key] = array(
						'image' => $uploadPath . 'images/' . $value['file_name'],
						'thumb' => $uploadPath . 'thumb/' . $value['file_name'],
					);
				}
				return ['st' => 1, 'data' => $data];
			} else {
				return ['st' => 0, 'data' => 'Please select an image'];
			}
		} else {
			return ['st' => 0, 'data' => 'Please select an image'];
		}
	}

}