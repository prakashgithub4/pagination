<?php

defined('BASEPATH') OR exit('No direct script access allowed');


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
     
    </tr>
  </thead>
  <tbody>
  <?php $count  = 1; ?>
  <?php foreach($posts as $post){ ?>
    <tr>
      <th scope="row"><?= $count?></th>
      <td><?= $post->title?></td>
    
    </tr>
    <?php $count++; } ?>
  </tbody>
</table>
	</div>

<nav aria-label="...">
<center>
<?php $current_page = empty($_GET['page'])?1:$_GET['page']; ?>
  <ul class="pagination pagination-sm">
    <li class="page-item">
	 <?php if($current_page<$number_of_page){?>
      <a href="<?php echo base_url(); ?>?page=<?php echo $current_page+1; ?>"><span class="page-link">Next</span></a>
	  <?php } ?>
    </li>
	
	<?php
	
	for($page=1;$page<=$number_of_page;$page++){ ?>
      <li class="page-item <?php echo $current_page == $page?'active':''; ?>"><a class="page-link" href="<?php echo base_url(); ?>?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
	<?php } ?>
	<li class="page-item">
	 <?php if($current_page > 1){?>
      <a href="<?php echo base_url(); ?>?page=<?php echo $current_page - 1; ?>"><span class="page-link">Prev</span></a>
	  <?php } ?>
    </li>
  </ul>
  
  </center>
</nav>

</div>

</body>
</html>