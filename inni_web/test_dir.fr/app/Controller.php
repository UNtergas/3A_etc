<?php
abstract class Controller
{
    public function loadModel(string $model)
    {
        require_once('model/' . $model . '.php');
        $this->$model = new $model();
    }
    public function render($vue, array $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }
        // ob_start();
        // echo "<h1> ***********</h1>";
        //var_dump($articles);
        require_once('views/' . strtolower(get_class($this)) . '/' . $vue . '.php');
        echo "<h2> load view ok</h2>";
        // $content = ob_get_clean();
    }
}

// /**
//  * todo: test3
//  */

// $c = new Controller();
// $c->loadModel("Article");
// echo "inside abstract controller\n";
// $c->Article->printAll();
