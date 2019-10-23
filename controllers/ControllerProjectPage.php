<?php


class ControllerProjectPage
{
    private $v, $m;

    public function __construct()
    {
        include_once ROOT . "/views/ViewProjectPage/ViewProjectPage.php";
        include_once ROOT . "/models/ModelProjectPage.php";
        $this->v = new ViewProjectPage();
        $this->m = new ModelProjectPage();
    }


    public function actionAddProject()
    {
       $obj = [
           'name'   => $_POST['name'],
           'budget' => $_POST['budget']
       ];

        $this->m->addProject($obj);
    }


    public function actionShowProjects()
    {
        $this->v->showFormProject();
    }

    public function actionGetInfoProject()
    {
        $this->m->getInformationProjects();
    }
    public function actionUserProjectMoney()
    {
        $id = $_COOKIE['user_id'];
//        $project = $_POST['project'];
        $this->m->getTotalInvestAmount($id);
    }


}