<?php
        $this->load->view('layout/Head');
?>
        <body>
<?php
        $this->load->view('layout/Nav');
        $this->load->view('info/Titlebar');
		
		if($pagename == "Work.php"){
	        $this->load->view('info/Work');
	    }elseif($pagename == "Feedback.php"){
	        $this->load->view('info/Feedback');
	    }
	    elseif($pagename == "Contact.php"){
	        $this->load->view('info/Contact');
	    }
	    elseif($pagename == "Terms.php"){
	        $this->load->view('info/Terms');
	    }

        $this->load->view('layout/Footer');
        $this->load->view('layout/Js');
?>      
        </body>