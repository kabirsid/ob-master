<html>
	<?php $this->load->view('layout/Head');?>
	<body>
		<?php $this->load->view('layout/Nav.php');?>
		<?php $this->load->view('pages/profile/SearchBar.php');?>
		<?php $this->load->view('pages/profile/profile_container',$pagename)?>
		<?php $this->load->view('layout/Footer.php');?>
		<?php $this->load->view('layout/Js.php');?>
	</body>
</html>