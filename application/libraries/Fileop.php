<?php
if (! defined ( 'BASEPATH' ))exit ( 'No direct script access allowed' );

class Fileop
{
	const CONFIG_DIR = '././webconf/';

	public function writeFileToArray($fileName,$fileArray)
	{
		file_put_contents(self::CONFIG_DIR.$fileName,
		"<?php \n return ".var_export($fileArray,true).";\n ?>");
	}
	private function openFile($fileName)
	{
		if(file_exists(self::CONFIG_DIR.$fileName)) return true;
		return false;
	}

	public function loadFile($fileName)
	{
		if($this->openFile($fileName)){
			return file_get_contents(self::CONFIG_DIR.$fileName);
		}
		return array();
	}
}