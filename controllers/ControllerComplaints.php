<?php


class ControllerComplaints
{
    private $v, $vs, $m;

    public function __construct()
    {
        include_once ROOT . "/views/ViewPersonalPage/ViewPersonalPage.php";
        include_once ROOT . "/views/ViewSuperAdminPage/ViewSuperAdminPage.php";
        include_once ROOT . "/models/ModelComplaints.php";
        $this->v = new ViewPersonalPage();
        $this->vs = new ViewSuperAdminPage();
        $this->m = new ModelComplaints();
    }

    public function actionAddComplaints()
    {

        $this->m->addComplaints($_POST['text']);
    }

    public function actionNumComplaints()
    {
        $this->m->totalNumComplaints();

    }
    public function actionNumNewComplaints()
    {
        $this->m->totalNumNewComplaints();
    }
    public function actionTotalAnswerComplaints()
    {
        $this->m->totalAnswerComplaints();
    }


}