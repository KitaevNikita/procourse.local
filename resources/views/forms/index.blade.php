@extends('layouts.app')

@section('content')

<div class="card text-bg-dark">
    <img src="/img/dungeon.jpg" class="card-img" alt="..." >
    <div class="card-img-overlay align-bottom square-box d-flex justify-content-center align-items-center">
        <p class="card-text autor text-center fs-1">Pro.Course – это быстрорастущее сообщество творческих людей. Тут эксперты-практики делятся своими знаниями и навыками с помощью профессионально подготовленных видеоуроков. Мы стремимся помочь каждому, кто хочет превратить свою страсть к любимому делу в увлекательный и доходный бизнес, а студентам найти качественные видеокурсы без воды и теории.</p>
    </div>
</div><br>

<h5 class="card-title text-center fs-1">Наши преимущества перед другими</h5><br>

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
          <img src="/img/pr11.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">ВИЗАЖИСТ С НУЛЯ</h5>
                  <p class="card-text">Уход за кожей и подготовка к макияжу. Легкий и естественный макияж. - Макияж на каждый день и для вечера. - Смоки айз и стрелки</p>
              </div>
          </div>
      </div>
    <div class="col">
        <div class="card h-100">
          <img src="/img/pr22.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">МЕДИТАЦИИ СВЕТА</h5>
                  <p class="card-text">Радужные вращения. Прокачка головы и сердца. - Медитация «Исцеление рода». - Доброй Вечности! Сделаем практики на открытие сердечного центра.</p>
              </div>
          </div>
      </div>
    <div class="col">
        <div class="card h-100">
          <img src="/img/pr3.png" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">ПОРТРЕТЫ КАРАНДАШОМ</h5>
                  <p class="card-text">Основы рисования животногою. Реалистичный женский портрет 3/4. - Реалистичный портрет анфас. Каждому участнику марафон в подарок</p>
              </div>
          </div>
      </div>
</div>
<div>
@endsection