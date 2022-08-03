<?php
class Controller
{
    protected function view($view)
    {
        if(file_exists("../app/view/". $view .".php"))
        {
            include "../app/view/". $view .".php";
        }
        else{
            include "../app/view/404.php";
        }
    }

    protected function loadModel($model)
    {
        if(file_exists("../app/model/". $model .".php"))
        {
            include "../app/model/". $model .".php";
            
            return $model = new $model();
        }
        return false;
    }
}

?>