<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style><?php include_once ROOT . "/views/css/reset.css"?></style>
    <style><?php include_once ROOT . "/views/css/style.css" ?></style>
    <style><?php include_once ROOT . "/views/css/fonts.css"?></style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img class="logo" src="/views/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
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
            <li class="nav-item active">
              <a class="nav-link" href="/show/Admins">Управление администраторами</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/show/Address">Адрес и номер</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/show/Logs">Logs</a>
            </li>
          </ul>
            <button class="btn btn-success" id="exit">Выйти</button>
        </div>
      </nav>
<div class="container-fluid">
  <div class="row justify-content-center topTxt">
    <div class="col-12 reports">
        <h2>Управление администраторами</h2>
       </div>
  </div>
  <div class="row">
      <div class="col-4 col-md-3 offset-md-9 p-2">
            <input onkeyup="tableSearch()" class="form-control mr-sm-3" id="searchAdmins" type="search" placeholder="Поиск по таблице" aria-label="Search">
        
      </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-3 ReportInfo">
        <div class="card border-info  mb-3">
            <div class="card-header"><h3>Добавление или редактировать администратора</h3></div>
            <div class="card-body">
                <form name="formAddAdmins" action="#" method="get">
                    <p><input type="text" class="form-control"  name="name" placeholder="Имя">
                    <p><input type="text" class="form-control"  name="patronymic" placeholder="Отчество">
                    <p><input type="text"  class="form-control" name="surname" placeholder="Фамилия">
                    <p><input type="email" class="form-control" name="email" placeholder="Email">
                    <p class="col-12 col-xl-12"> <button class="btn btn-block btn-success" type="submit">Добавить / Редактировать</button></p>
                </form>
                <span class="italic"></span>
            </div>
          </div>
    </div>

    <div class="col-9 border-warning">
        <table class="tableAdmins table table-hover"></table>
    </div>
  </div>
</div>
<script><?php include_once ROOT . "/views/ViewAdminPage/js/searchAdmins.js"?></script>
<script><?php include_once ROOT . "/views/ViewAdminPage/js/scriptAdmin.js"?></script>
<script><?php include_once ROOT . "/views/app/main.js"?></script>

</body>
</html>