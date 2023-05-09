<?php
class Controller
{
    public function loadModel(string $model)
    {
        require_once('../' . 'model/' . $model . '.php');
        $this->$model = new $model();
    }
    public function render($vue, array $data = [])
    {
        //var_dump($data)
        echo "<h1> ***********</h1>";
        //var_dump($articles);
        require_once(ROOT . 'view/' . strtolower(get_class($this)) . '/' . $vue . '.php');
    }
}

/**
 * todo: test3
 */

$c = new Controller();
$c->loadModel("Article");
echo "inside abstract controller\n";
$c->Article->printAll();
