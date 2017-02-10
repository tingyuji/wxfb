<?php
require_once 'database_wcc.php';
setlocale(LC_ALL, 'zh_CN.utf-8');

class fileClass extends database_wcc {
	private $test_datasource = 'test_datasource';
	function __construct ($config=NULL){
		parent::__construct($this->test_datasource);
	}
	function getCount(){
		$sql = "select count(*) as number from file";
    	return $this->getTotalNumber($sql);
	}
	
	function getAllItems($offset,$rows){
		$sql = "select * from file order by id desc limit $offset,$rows";
		return $this->selectArray($sql);
	}	

	function add($username,$file){		
		$sql = "INSERT  INTO file(username,file,createTime) Values('$username','$file',now())";
    	// echo $sql;
    	// echo '<br>';
    	$this->update_sql($sql);
	}	
		

}