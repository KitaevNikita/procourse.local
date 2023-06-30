@extends('layouts.app')

@section('content')

<div class="container">

    <h5 class="card-title text-center fs-1">Наши преимущества перед другими</h5><br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
              <img src="/img/pr11.png" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">ОТБОРНЫЙ КОНТЕНТ</h5>
                      <p class="card-text">Мы тщательно отбираем материалы перед публикацией. Большинство курсов ориентированы на практику, а не на чтение лекций.</p>
                  </div>
              </div>
          </div>
        <div class="col">
            <div class="card h-100">
              <img src="/img/pr22.png" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">ДОСТУП К ПЛАТФОРМЕ 24/7</h5>
                      <p class="card-text">Повышайте квалификацию, осваивайте новую профессию без ограничений. В любом месте в любое время доступно на IOS и Android.</p>
                  </div>
              </div>
          </div>
        <div class="col">
            <div class="card h-100">
              <img src="/img/pr3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">КУРСЫ БЕЗ АБОНЕНТСКОЙ ПЛАТЫ</h5>
                      <p class="card-text">Платите только за те курсы, которые вы хотите изучить, никаких ежемесячных платежей.</p>
                  </div>
              </div>
          </div>
    </div>

<div>

@endsection