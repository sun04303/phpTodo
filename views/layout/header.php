<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/vender/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/" class="navbar-brand">Todo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">메인<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">일정등록</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">일정삭제</a>
            </li>
          </ul>
        </div>
        <div>
          <a href="/user/register" class="btn btn-primary">회원가입</a>
          <a href="/user/register" class="btn btn-primary">로그인</a>
        </div>
      </nav>
    </header>
  </div>