<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style><?php include_once ROOT . "/views/css/reset.css";
        include_once  ROOT . "/views/ViewSuperAdminPage/css/style.css";
        include_once ROOT . "/views/ViewSuperAdminPage/css/bootstrap.min.css"?></style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img class="logo" src="/views/ViewSuperAdminPage/img/logo.png" alt="logo"></a>
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
              <a class="nav-link" href="/show/Projects">Проекты</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/show/Admins">Управление администраторами</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/show/Address">Адрес и номер</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/views/ViewSuperAdminPage/pages/logs.html">Logs</a>
            </li>
          </ul>
          <button class="btn btn-success">Выйти</button>
        </div>
      </nav>
<div class="container-fluid">
  <div class="row justify-content-center topTxt">
    <div class="col-12 reports">
        <span>Управление администраторами</span>
       </div>
  </div>
  <div class="row">
      <div class="col-4 col-lg-2 offset-lg-10">
            <input onkeyup="tableSearch()" class="form-control mr-sm-3" id="searchAdmins" type="search" placeholder="Поиск по таблице" aria-label="Search">
        
      </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-3 ReportInfo">
        <div class="card border-info  mb-3">
            <div class="card-header reports"><h3>Добавление новго администратора</h3></div>
            <div class="card-body formAddUsers">
                <form class="formAddAdmins" name="formAdmin" action="#" method="get">
                    <div><input type="text" class="inpText form-control"  name="name" placeholder="Имя">
                        <span class="italic"></span></div>
                    <div><input type="text" class="inpText form-control"  name="patronymic" placeholder="Отчество">
                        <span class="italic"></span></div>
                    <div><input type="text"  class="inpText form-control" name="surname" placeholder="Фамилия">
                        <span class="italic"></span></div>
                    <div><input type="email" class="inpText form-control" name="email" placeholder="Email">
                        <span class="italic"></span></div>
                    <div class="row">
                      <div class="col-12 col-xl-12"><button class="btn btn-block btn-danger" type="submit">Удалить</button></div>
                      <div class="col-12 col-xl-12"> <button class="btn btn-block btn-success" type="submit">Добавить</button></div>
                    </div>
                </form>
                <span class="italic"></span>
            </div>
          </div>
    </div>

    <div class="col-8">
        <table class="tableAdmins table table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">ФИО</th>
                <th scope="col">Адрес</th>
                <th scope="col">Телефон</th>
                <th scope="col">Email</th>
                <th scope="col">ИНН</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><i class="material-icons">delete</i></td>
                <td><i class="material-icons">create</i></td>
                <td>Адольф Гитлер Степанович</td>
                <td>ул. Пушкина, дом. Колотушкина</td>
                <td>13371488</td>
                <td>ihatejews@thirdreich.de</td>
                <td>1939</td>
              </tr>
              <tr>
                  <td><i class="material-icons">delete</i></td>
                  <td><i class="material-icons">create</i></td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
              </tr>
              <tr>
                  <td><i class="material-icons">delete</i></td>
                  <td><i class="material-icons">create</i></td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
              </tr>
              <tr>
                  <td><i class="material-icons">delete</i></td>
                  <td><i class="material-icons">create</i></td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
              </tr>
              
              
            </tbody>
          </table>
    </div>

    

  </div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/views/ViewSuperAdminPage/js/bootstrap.min.js"></script>
<script src="/views/ViewSuperAdminPage/js/search/admins.js"></script>
<script src="/views/ViewAdminPage/js/scriptAdmin.js"></script>
</body>
</html>