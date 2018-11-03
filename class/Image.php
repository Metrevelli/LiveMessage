<?php
class Image{

    public $file_name,$file_tmp,$file_type,$file_size,$file_ext;
    public $extensions = ['jpg', 'jpeg', 'png', 'gif'];
    public $errors = [];

    public function __construct($file){
        $this->file_name = $file['name'];
        $this->file_tmp = $file['tmp_name'];
        $this->file_type = $file['type'];
        $this->file_size = $file['size'];
        $this->file_ext = end(explode('.',$file['name']));
    }
    public function upload($path,$newName = ''){
        $name  = $newName ? $newName : $this->file_name;
        $file = $path . $name . '.' . $this->file_ext;
        if (!in_array($this->file_ext, $this->extensions)) {
			$this->errors[] = 'Extension not allowed: ' . $this->file_name . ' ' . $this->file_type;
		}
		if ($this->file_size > 2097152) {
			$this->errors[] = 'File size exceeds limit: ' . $this->file_name . ' ' . $this->file_type;
		}
		if (empty($this->errors)) {
            move_uploaded_file($this->file_tmp, $file);
        }
        if ($this->errors) print_r($this->errors);
    }
    
}