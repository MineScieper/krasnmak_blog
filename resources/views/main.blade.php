@extends('layouts.main_layout')

@section('main_title')
    Главная
@endsection


@section('page_title')
    <h2 class="category_title">
        <span style="color: #66FF00;">Дизайн-студия</span> «Красные&nbsp;маки»
    </h2>
@endsection


@section('page_content')
    <div class="page_image_container">
        <div class="page_image" style="background-image: url(../images/home_photo_1.jpg)"></div>
    </div>

    <div class="quote">
        приглашает Вас к сотрудничеству для реализации ландшафтных проектов <br>
        по технологии озеленения «Красные маки» на плотно застроенных территориях.
    </div>

    <p> На сайте дизайн-студии  можно познакомиться с основными направлениями работ, а также  эксклюзивной технологией озеленения, разработанной  ландшафтным дизайнером  Александровой Еленой Фаритовной (образование УДГУ, биолого-химический факультет, 1997г.выпуска).  </p>
    <p> Все отличительные особенности технологии «Красные маки» разрабатывались специально для городских и плотно застроенных МО
        в регионах Поволжья, особенно Удмуртской Республики. Для этого учитывались сложные климатические условия
        для выращивания растений — декоративных и сортовых, а также современные условия обитания на застроенных территориях.
        Созданная новая технология «Красные маки» помогает рационально и экономично организовывать ландшафтное озеленение: </p>
    <ul style="padding: 0px 0px 15px 30px">
        <li> — на частных территориях; </li>
        <li> — на общественных пространствах городов и муниципальных образований Удмуртии; </li>
        <li> — на территориях спортивно-развлекательных и образовательных парков с озеленением в Удмуртии и регионах Поволжья. </li>
    </ul>

    <p>
        Использование онлайн-обучения, статей и консультаций  в Учебном курсе «Красные маки» поможет самостоятельно изучить
        все главные теоретические и практические особенности технологии «Красные маки», чтобы была возможность самостоятельно
        реализовывать частные проекты. Тем не менее, дизайн-студия дополнительно
    </p>

    <div class="quote">
        приглашает к сотрудничеству по проектированию и реализации проектов <br>
        на объектах туристических маршрутов <br>
        (парков отдыха, спортивно-развлекательных, образовательных).
    </div>

    <!-- Внешняя оболочка с отступами -->
    <div class="slider_outwrapper">
        <!-- Разметка слайдера (html код) -->
        <div class="itcss">
            <div class="itcss__wrapper">
                <div class="itcss__items">
                    <!-- Контент слайдов -->
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/1.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/2.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/3.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/4.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/5.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/6.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/7.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                    <div class="itcss__item">
                        <img src="{{ asset('images/slider_on_main_page/8.jpg') }}" alt="" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <!-- Стрелки для перехода к предыдущему и следующему слайду -->
            <svg class="itcss__btn itcss__btn_prev" data-slide="prev"
                 xmlns='http://www.w3.org/2000/svg' fill='none' stroke='white' stroke-width='5' width='34' height='101'><path data-slide="prev" d='M 2 52 l 30 -50 M 2 49 l 30 50' />
            </svg>
            <svg class="itcss__btn itcss__btn_next" data-slide="next"
                 xmlns='http://www.w3.org/2000/svg' fill='none' stroke='white' stroke-width='5' width='34' height='101'><path data-slide="next" d='M 32 52 l -30 -50 M 32 49 l -30 50' />
            </svg>
        </div>
    </div>

    <div class="submit_button modal_button" data-modal-window="textRequestWindow">
        Оставить сообщение
    </div>

    <br>
    <p>
        Если Вас заинтересовали наши предложения, можете оставить сообщение, нажав на кнопку выше
        или провести индивидуальную консультацию, договорившись о встрече по телефону или электронной почте.
    </p>

@endsection
