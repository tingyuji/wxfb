<?php
require_once 'database_wcc.php';
setlocale(LC_ALL, 'zh_CN.utf-8');

class noteClass extends database_wcc {
	private $test_datasource = 'test_datasource';
	function __construct ($config=NULL){
		parent::__construct($this->test_datasource);
	}
	function getCount(){
		$sql = "select count(*) as number from note";
    	return $this->getTotalNumber($sql);
	}
	function getCount2($type){
		$sql = "select count(*) as number from note where type='$type'";
    	return $this->getTotalNumber($sql);
	}
	function getAll(){
		$sql = "select * from note order by id desc";
		return $this->selectArray($sql);		
	}
	function getAll2($type){
		$sql = "select * from note where type='$type' order by id desc";
		return $this->selectArray($sql);		
	}
	function getAllItems($offset,$rows){
		$sql = "select * from note order by id desc limit $offset,$rows";
		return $this->selectArray($sql);		
	}

	function update($id,$password){
		$sql = "update note set password='$password' where id=$id";
    	echo $sql;
    	echo '<br>';
    	$this->update_sql($sql);
	}
	function add($type,$note){		
		$sql = "INSERT  INTO note(type,note,createTime) Values('$type','$note',now())";
    	echo $sql;
    	echo '<br>';
    	$this->update_sql($sql);
	}	
	function del($id){
		$sql = "delete from note where id=$id";
    	echo $sql;
    	echo '<br>';
    	$this->update_sql($sql);
	}		

}