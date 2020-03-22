<?php $this->view('blocks/headHTML');?> 
<body>
    <div>
        <?php $this->view('blocks/header');?> 
    </div>
    <div>
         <?php $this->view('pages/'.$data["pages"]);?> 
    </div>
</body>
</html>