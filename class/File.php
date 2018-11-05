<?php

class File{
    private $file_name,$file_tmp,$file_type,$file_size,$file_ext;
    private $extensions = []; 
    private $errors = [];
    private $maxSize;
    public $arra = [];
    public function __construct($file,array $ext, $maxSize = 15728640){
        $this->file_name = $file['name'];
        $this->file_tmp = $file['tmp_name'];
        $this->file_type = $file['type'];
        $this->file_size = $file['size'];
        $this->file_ext = end(explode('.',$file['name']));
        $this->maxSize = $maxSize;
        $this->extensions = $ext;
    }
    public function upload($path,$newName = ''){
        $name  = $newName ? $newName : $this->file_name;
        $file = $path . $name . '.' . $this->file_ext;
        if (!in_array($this->file_ext, $this->extensions)) {
			$this->errors[] = 'Extension not allowed: ' . $this->file_name . ' ' . $this->file_type;
		}
		if ($this->file_size > $this->maxSize) {
			$this->errors[] = 'File size exceeds limit: ' . $this->file_name . ' ' . $this->file_type;
		}
		if (empty($this->errors)) {
            return move_uploaded_file($this->file_tmp, $file) ? true : false;
        }
        if ($this->errors) print_r($this->errors);
    }
}