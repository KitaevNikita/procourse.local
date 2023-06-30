@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="card-title text-center fs-1">Доступные курсы</h5><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
              <img src="/img/1card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">ВИЗАЖИСТ С НУЛЯ</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Уход за кожей и подготовка к макияжу. Легкий и естественный макияж. - Макияж на каждый день и для вечера. - Смоки айз и стрелки</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
        <div class="col">
            <div class="card h-100">
              <img src="/img/4card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">МЕДИТАЦИИ СВЕТА</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Радужные вращения. Прокачка головы и сердца. - Медитация «Исцеление рода». - Доброй Вечности! Сделаем практики на открытие сердечного центра.</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
        <div class="col">
            <div class="card h-100">
              <img src="/img/7card.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">ПОРТРЕТЫ КАРАНДАШОМ</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Основы рисования животногою. Реалистичный женский портрет 3/4. - Реалистичный портрет анфас. Каждому участнику марафон в подарок</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
        <div class="col">
          <div class="card h-100">
            <img src="/img/card12.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">САЙТЫ НА TILDA</h3>
                    <h5 class="card-title">Программа обучения:</h5>
                    <p class="card-text">Уход за кожей и подготовка к макияжу. Легкий и естественный макияж. - Макияж на каждый день и для вечера. - Смоки айз и стрелки</p>
                    <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
              <img src="/img/card14.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">КОПИРАЙТИНГ</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Радужные вращения. Прокачка головы и сердца. - Медитация «Исцеление рода». - Доброй Вечности! Сделаем практики на открытие сердечного центра.</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/img/card13.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">CMM СПЕЦИАЛИСТ</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Основы рисования животногою. Реалистичный женский портрет 3/4. - Реалистичный портрет анфас. Каждому участнику марафон в подарок</p>
                      <<a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                      href="{{ route('zakazs.index') }}">
                          Купить
                  </a>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/img/card15.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">СКОРОЧТЕНИЕ</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Уход за кожей и подготовка к макияжу. Легкий и естественный макияж. - Макияж на каждый день и для вечера. - Смоки айз и стрелки</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/img/card16.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">АКТЕРСКОЕ МАСТЕРСТВО</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Радужные вращения. Прокачка головы и сердца. - Медитация «Исцеление рода». - Доброй Вечности! Сделаем практики на открытие сердечного центра</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="/img/card17.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h3 class="card-title">ОБУЧЕНИЕ</h3>
                      <h5 class="card-title">Программа обучения:</h5>
                      <p class="card-text">Основы рисования животногою. Реалистичный женский портрет 3/4. - Реалистичный портрет анфас. Каждому участнику марафон в подарок</p>
                      <a class="btn btn-success btn-lg d-grid gap-2 col-6 mx-auto"
                          href="{{ route('zakazs.index') }}">
                              Купить
                      </a>
                  </div>
              </div>
          </div>
    </div>
<div>
@endsection