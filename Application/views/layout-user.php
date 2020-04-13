<?php $this->view('blocks/headHTML');?> 
<body>
    <div>
        <?php $this->view('blocks/header');?> 
    </div>
    <div>
         <?php $this->view('pages/'.$data["pages"]);?> 
    </div>
    <div>
        <?php $this->view('blocks/footer');?> 
    </div>
</body>
</html>