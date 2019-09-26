<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style><?php include_once ROOT . "/views/css/reset.css";
        include_once  ROOT . "/views/ViewSuperAdminPage/css/style.css";
        include_once ROOT . "/views/ViewSuperAdminPage/css/bootstrap.min.css"?></style>
    <title>SuperAdmin</title>
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
            <li class="nav-item active">
              <a class="nav-link" href="/show/Projects">Проекты</a>
            </li>
            <li class="nav-item">
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
          <span>Управление проектами</span>
        </div>
    </div>
    <div class="row">
        <div class="col-4 col-lg-2 offset-lg-10">

              <input onkeyup="tableSearch()" class="form-control mr-sm-3" id="searchProjects" type="search" placeholder="Поиск по таблице" aria-label="Search">

          
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-3 ReportInfo">
            <div class="card border-info  mb-3">
                <div class="card-header reports"><h3>Добавление нового проекта</h3></div>
                <div class="card-body formAddUsers">
                    <form class="formAddAdmins" action="#" method="get" name="formProject">
<!--                        <input type="text" class="form-control" name="name" placeholder="Заголовок">-->
<!--                        <input type="text" class="form-control" name="subtitle" placeholder="Подзаголовок">-->
<!--                        <input type="text" class="form-control" name="imgLink" placeholder="Ссылка на изображение">-->
<!--                        <input type="text" class="form-control" name="budget" placeholder="Начальный бюджет">-->
<!--                        <input type="text" class="form-control" name="noticeToProject" placeholder="Заметки">-->

                            <p><input type="text" class="form-control"  name="name" placeholder="Имя проекта"></p>
                            <p><input type="text" class="form-control"  name="budget" placeholder="Бюджет"></p>
                            <p><input type="text"  class="form-control" name="raiser_money" placeholder="Собрали денег"></p>

                        <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="customControlValidation2" name="published" required>
                              <label class="custom-control-label" for="customControlValidation2">Опубликовано</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                              <input type="radio" class="custom-control-input" id="customControlValidation3" name="published" required>
                              <label class="custom-control-label" for="customControlValidation3">Не опубликовано</label>

                        </div>

                        <div class="row">
                          <div class="col-12 col-xl-12"> <button class="btn btn-block btn-success" type="submit">Добавить</button></div>
                        </div>
                    </form>
                    <span class="italic"></span>
                </div>
              </div>
        </div>
        <div class="col-8">
          <table class="tableProjects table table-hover">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Дата</th>
                  <th scope="col">Заголовок</th>
                  <th scope="col">Опубликовано</th>
                  <th scope="col">Бюджет</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i class="material-icons">create</i></td>
                  <td>Adolf</td>
                  <td>Occupied Poland</td>
                  <td>24.05.67</td>
                  <td>Adolf Hitler</td>
                </tr>
                <tr>
                  <td><i class="material-icons">create</i></td>
                  <td>Adolf</td>
                  <td>23.02.11</td>
                  <td>Joseph Gebbels</td>
                  <td>Propagandized fascism</td>
                </tr>
                <tr>
                    <td><i class="material-icons">create</i></td>
                    <td>Adolf</td>
                    <td>23.02.11</td>
                    <td>Joseph Gebbels</td>
                    <td>Propagandized fascism</td>
                  </tr>
                  <tr>
                      <td><i class="material-icons">create</i></td>
                      <td>Adolf</td>
                      <td>23.02.11</td>
                      <td>Joseph Gebbels</td>
                      <td>Propagandized fascism</td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">create</i></td>
                        <td>Adolf</td>
                        <td>23.02.11</td>
                        <td>Joseph Gebbels</td>
                        <td>Propagandized fascism</td>
                      </tr>
              </tbody>
            </table>
      </div>
        
    </div>



</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/views/ViewSuperAdminPage/js/bootstrap.min.js"></script>
<script src="/views/ViewSuperAdminPage/js/search/projects.js"></script>
<script src="/views/ViewProjectPage/js/scriptProject.js"></script>
</body>
</html>