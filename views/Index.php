<?php $this->load->view('component/head'); ?>
  <body>
  	
    <?php $this->load->view('component/nav'); ?>

    <?php $this->load->view($page); ?>

    <?php $this->load->view('component/footer') ?>

    <?php $this->load->view('component/JS') ?>

  </body>
</html>