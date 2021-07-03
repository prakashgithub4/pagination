<?php 
class Pageindex {

  function paginate($page_size,$total_records,$table)
  {

    $number_of_pages = ceil($total_records/$page_size);
		if(empty($_GET['page'])){
			 $page = 1;
	    }else{
		   $page =$_GET['page'];
		}
    $first_page = ($page-1)*$page_size;
    $this->db->select("*")->from($table)->limit($page_size,$first_page)->get()->result();
    return $number_of_pages;
  }
}