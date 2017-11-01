<html>
    <?php $this->load->view('layout/Head');?>
    <body>
        <?php $this->load->view('layout/Nav.php');?>
       
        <?php $this->load->view('pages/loginregi/'.$pagename,$email="");?>
        <?php $this->load->view('layout/Footer.php');?>
        <?php $this->load->view('layout/Js.php');?>
    </body>
</html>