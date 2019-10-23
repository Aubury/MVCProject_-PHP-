<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style><?php include_once ROOT . "/views/css/reset.css"?></style>
    <style><?php include_once ROOT . "/views/css/style.css" ?></style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin Control Panel</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img class="logo" src="/views/img/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/show/superAdmin">Жалобы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/show/Users">Пользователи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/show/Budget">Финансы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/show/Videos">Видео</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/show/Photos">Фото</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/show/Projects">Проекты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/show/Address">Адрес и номер</a>
            </li>
        </ul>
        <button class="btn btn-success">Выйти</button>
    </div>
</nav>

<div class="container-fluid">
    <div class="row justify-content-center topTxt">
        <div class="col-12 reports">
            <span>Жалобы и предложения</span>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-3 ReportInfo">
            <div class="card border-info  mb-3">
                <div class="card-header reports">
                    <h3>Жалобы</h3>
                </div>
                <div class="card-body">
                    <div>Новых: <span class="newComplaints">123</span></div>
                    <div>Всего: <span class="allComplaints">398</span></div>
                    <div>Отвеченных: <span class="answeredComplaints">123</span></div>
                </div>
            </div>
            <div class="card border-info  mb-3">
                <div class="card-header reports">
                    <h3>Дoбавить ответ</h3>
                </div>
                <div class="card-body">
                    <form name="formAnswer" action="#" class="formAddUsers">
                        <p><input type="text" class="form-control"  name="id" placeholder="№ Жалобы или предложения" required>
                        <p><input type="text" class="form-control"  name="email" placeholder="email" required>
                        <p><textarea class="form-control height" name="text" placeholder="Жалоба или предложения" required></textarea>
                        <p class="col-12 col-xl-12"> <button class="btn btn-block btn-success" type="submit">Подать</button></p>
                    </form>
                    <span class="italic"></span>
                </div>
            </div>
        </div>
        <div class="col-8 tableReports">

            <div class="card border-warning mb-3" data-toggle="modal" data-target="#exampleModal">
                <div class="card-header">
                    <div class="row reporterInfo">
                        <div class="col reporterName">Adolf Hitler</div>
                        <div class="col reportDate">26.05.1945</div>
                        <div class="col reportTime">21:30</div>
                    </div>
                </div>
                <div class="card-body reportContent">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, debitis! Labore praesentium adipisci ea maxime accusamus excepturi molestias inventore cum ullam, cumque necessitatibus, reiciendis, magni nihil! Fugit autem vero quod!
                </div>
            </div>


        </div>

    </div>
</div>


<!-- модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ответ на жалобу</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <textarea name="" id="textAreaForAdminModal" rows="5"></textarea>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>



<script><?php include_once ROOT . "/views/ViewSuperAdminPage/js/bootstrap.min.js"?></script>
<script><?php include_once ROOT . "/views/ViewSuperAdminPage/js/scriptAnswer.js"?></script>
<script><?php include_once ROOT . "/views/app/main.js"?></script>

</body>
</html>