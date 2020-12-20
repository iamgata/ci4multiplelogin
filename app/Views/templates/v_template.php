<?php

echo $this->include('templates/v_header');
echo $this->include('templates/v_sidebar.php');
echo $this->include('templates/v_topbar.php');

echo $this->renderSection('content');

echo $this->include('templates/v_footer');
