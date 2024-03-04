<! -- -- -- -- -- -- -- -- -- -->
	<?php if (isset($_SESSION['message'])){?>
		<div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
		  	<?= $_SESSION['message']; ?>
		</div>
	<?php session_unset(); } ?>	
<! -- -- -- -- -- -- -- -- -- -->