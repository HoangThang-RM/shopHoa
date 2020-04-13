<?php $this->view('blocks/headHTML');?> 
<body>
    <div>
        <?php $this->view('blocks/header');?> 
    </div>
    <div>
         <?php $this->view('blocks/ads');?> 
         <?php
         if(!empty($data))
         {
            print_r($data);
            echo "</brt></br>";
         }?> 
    </div>
    <div>
        <?php $this->view('pages/home');?> 
    </div>
    <div>
        <?php $this->view('blocks/footer');?> 
    </div>
</body>
</html>