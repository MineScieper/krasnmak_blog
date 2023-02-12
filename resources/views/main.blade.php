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

    <p> На сайте дизайн-студии можно познакомиться с основными направлениями работ, а также эксклюзивной технологией
        озеленения, разработанной ландшафтным дизайнером Александровой Еленой Фаритовной (образование УДГУ,
        биолого-химический факультет, 1997г.выпуска). </p>
    <p> Все отличительные особенности технологии «Красные маки» разрабатывались специально для городских и плотно
        застроенных МО
        в регионах Поволжья, особенно Удмуртской Республики. Для этого учитывались сложные климатические условия
        для выращивания растений — декоративных и сортовых, а также современные условия обитания на застроенных
        территориях.
        Созданная новая технология «Красные маки» помогает рационально и экономично организовывать ландшафтное
        озеленение: </p>
    <ul style="padding: 0px 0px 15px 30px">
        <li> — на частных территориях;</li>
        <li> — на общественных пространствах городов и муниципальных образований Удмуртии;</li>
        <li> — на территориях спортивно-развлекательных и образовательных парков с озеленением в Удмуртии и регионах
            Поволжья.
        </li>
    </ul>

    <p>
        Использование онлайн-обучения, статей и консультаций в Учебном курсе «Красные маки» поможет самостоятельно
        изучить
        все главные теоретические и практические особенности технологии «Красные маки», чтобы была возможность
        самостоятельно
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
                 xmlns='http://www.w3.org/2000/svg' fill='none' stroke='white' stroke-width='5' width='34' height='101'>
                <path data-slide="prev" d='M 2 52 l 30 -50 M 2 49 l 30 50'/>
            </svg>
            <svg class="itcss__btn itcss__btn_next" data-slide="next"
                 xmlns='http://www.w3.org/2000/svg' fill='none' stroke='white' stroke-width='5' width='34' height='101'>
                <path data-slide="next" d='M 32 52 l -30 -50 M 32 49 l -30 50'/>
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
    <br>

    {{--    <tr> - очередная строка, а в ней <td> - очередной столбец--}}

    {{--    <div class="page_subtitle">--}}
    {{--        ПРАЙС-ЛИСТ ДИЗАЙН-СТУДИЯ «КРАСНЫЕ МАКИ» <br> СТОИМОСТЬ  ЛАНДШАФТНЫХ РАБОТ  2022 год--}}
    {{--    </div>--}}

    <div class="spoiler_block" data-spoiler>
        <div class="spoiler_title">
            Прайс-лист. Стоимость ландшафтных работ на 2022 год
        </div>
        <div class="spoiler_content">
            <table class="table">
                <tbody>
                <tr>
                    <td class="table_cell column">
                        <span>
                            НАИМЕНОВАНИЕ  РАБОТ
                        </span>
                    </td>
                    <td class="table_cell column">
                        <span>
                            ЕДИНИЦА ИЗМЕРЕНИЯ
                        </span>
                    </td>
                    <td class="table_cell column">
                        <span>
                            СТОИМОСТЬ
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            1) ПОДГОТОВИТЕЛЬНЫЕ РАБОТЫ
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.1  Сбор строительного мусора
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            куб. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.2  Погрузка в контейнер вручную
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            куб. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.3  Вывоз мусора в контейнерах
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            куб. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.4  Очистка территории от кустарников
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за 1 шт.
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            300 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.5  Корчевка  пней
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за 1 шт.
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.6  Прополка участка вручную
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            100 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.7  Снятие и перемещение грунта
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            200 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            1.8  Геопластика с подъемом земли
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1500 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            2) РАБОТЫ ПО УСТРОЙСТВУ ПОДЗЕМНЫХ КОММУНИКАЦИЙ
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            2.1  Дренажная система (устр-во песчано-гравийного основания, прокладка труб, соединение труб и ввод в колодец)
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            500 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            2.2  Установка пластиковых колодцев
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за 1 шт.
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            15.000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            2.3  Установка бетонных колодцев
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за 1 кольцо
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            10.000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            2.4  Установка ливневой канализации
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            пог. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            2.5  Система автоматического и ручного полива (комплекс работ)
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            пог. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            3) РАБОТЫ ПО УСТРОЙСТВУ ДОРОЖЕК, ПЛОЩАДОК, ПОДПОРНЫХ СТЕНОК, ВОДОЕМОВ
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.1  Устройство площадок и дорожек на гравийном основании с гранитной посыпкой
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            800 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.2  Устройство площадок и дорожек из природного камня на щебеночно-песчаном основании
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            800 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.3  Устройство  мульчирующего слоя из коры
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            300 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.4  Устройство подпорных стенок из бетона
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            пог. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            5000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.5  Устройство подпорных стенок из камня
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            пог. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            3000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.6  Устройство альпийской горки
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            5000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            3.7  Устройство декоративных водоемов
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            5000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            4) РАБОТЫ ПО ОЗЕЛЕНЕНИЮ
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.1  Посадочные работы многолетних травянистых растений с подсыпкой грунта и комплексных удобрений
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.2  Устройство газона посевного
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            700 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.3  Посадка кустарников
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за  1 шт.
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            500 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.4  Посадка деревьев
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за  1 шт.
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.5  Посадка модульных композиций в соответствии с картой посадки
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за  1  модуль
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            2000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.6  Установка каркасных опор ( для трехмерных клумб)
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за  1  модуль
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.7  Установка  МАФ и садовой мебели
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за  1 шт.
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            1000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            4.8  Контроль специалиста по ландш.дизайну при выполнении работ по проекту
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за  1 час
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            500 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            5) РАБОТЫ ПО УХОДУ ЗА РАСТЕНИЯМИ
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            5.1  Уход за газоном (стрижка, прополка)
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            за 100 кв.метров
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            3000 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            5.2  Уход за деревьями и кустарниками <br> — обрезка кроны <br> — прополка и рыхление прикорневой зоны
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            <br> за  1 шт./ пог. метр <br> кв. метр
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            <br> 400 руб./200 руб. <br> 200 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span>
                            5.3  Уход за цветниками
                            <br> — прополка и рыхление
                            <br> — рассаживание многолетних травянистых растений
                            <br> — полив растений
                            <br> — укрытие и обрезка растений на зиму
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            <br> кв. метр
                            <br> кв. метр
                            <br>
                            <br> за 1 час
                            <br> за 1 час
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                        <br> 100 руб.
                        <br> 500 руб.
                        <br>
                        <br> 500 руб.
                        <br> 500 руб.
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            6) ДОГОВОР УСЛУГ НА ПРОЕКТИРОВАНИЕ УЧАСТКА
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            30 % от НМЦК (от стоимости проекта)
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            7) ДОГОВОР УСЛУГ НА СОЗДАНИЕ РАБОЧЕГО ПРОЕКТА
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            10 % от НМЦК (от стоимости проекта)
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            8) ДОГОВОР УСЛУГ НА ИСПОЛЬЗОВАНИЕ «МОДУЛЬНЫХ» ПРОЕКТОВ ПО ТЕХНОЛОГИИ «КРАСНЫЕ МАКИ»
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            20 % от НМЦК (от стоимости проекта)
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            9) РАБОТЫ ПО ВЫРАЩИВАНИЮ МОДУЛЬНЫХ КОМПОЗИЦИЙ
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            20 % от НМЦК (от стоимости проекта)
                        </span>
                    </td>
                    <td class="table_cell">

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="spoiler_block" data-spoiler>
        <div class="spoiler_title">
            Таблица каталогов изделий (эксклюзивные изделия, проекты и услуги)
        </div>
        <div class="spoiler_content">
            <table class="table">
                <tbody>
                <tr>
                    <td class="table_cell column">
                        <span>
                                Название  каталога
                            </span>
                    </td>
                    <td class="table_cell column">
                            <span>
                                Состав  и краткое описание изделий
                            </span>
                    </td>
                    <td class="table_cell column">
                            <span>
                                Направления применения изделий в проектах
                            </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                            <span class="table_cell_subtitle">
                                1) Каталог №1 <br> Виды многолетних декоративных растений питомника «Красные маки»
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Список, фото, описание растений из питомника «Красные маки», стоимость
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Акклиматизированная подборка растений для региона Поволжья и средней России, для проектов на общественных и частных территориях
                            </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                            <span class="table_cell_subtitle">
                                2) Каталог №2 <br> Типы модульных композиций из многолетних растений
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Список с названиями и составом модульных композиций из растений для ландшафтных проектов, стоимость и фото
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Подборка растений в композициях для легкого применения в проектах, создания определенного сезонного образа территорий
                            </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                            <span class="table_cell_subtitle">
                                3) Каталог №3 <br> Каркасные опоры для трехмерного озеленения
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Список с чертежом и фото металлических каркасов, обтянутых искуственным газонным полотном, карта расположения опоры в озеленении, фотопримеры проектов
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Для создания оригинального трехмерного озеленения в Поволжье и средней России
                            </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                            <span class="table_cell_subtitle">
                                4) Каталог №4 <br> Заборные панели и садовая мебель
                            </span>
                    </td>
                    <td class="table_cell">
                            <span>
                                Список с фото и описанием способа расположения панелей, садовой мебели к ним, стоимость
                            </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для создания оригинального озеленения по периметру частной и общественной территории, соединенного с ограждением
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            5) Каталог №5 <br> Фотооткрытки, фотобордюры, пейзажные панели
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список фотооткрыток с фотосюжетами и собственными стихами, подборка и стоимость фотобордюров с разными материалами
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для индивидуальных поздравлений в электронном и печатном виде (открытки), для использования дизайна интерьера(фотобордюры)
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            6) Каталог №6 <br> Подарочные наборы в эксклюзивной упаковке «Красные маки»
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список изделий из текстиля бытового и декоративного, стоимость, размеры, фотопримеры работ
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для индивидуального пошива из декоративных тканей, с учетом пожеланий цвета и дизайна для заказчика, для заказа и покупки на сайте имеющихся изделий
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            7) Каталог №7 <br> Ландшафтные проекты для парков и частных территорий по технологии «Красные маки»
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список оригинальных проектов по технологии Красные маки, краткое описание бизнес-проекта, стоимость разработки «проекта и рабочей документации со сметой»
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для реализации на общественных и частных территориях проектов создания спортивно-развлекательных парков, прогулочных территорий, частного озеленения
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            8) Каталог №8 <br> Сценарии для корпоративов, семейных вечеров, развлекательных и праздничных мероприятий
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список направлений и стоимость разработки сценария, примеры имеющихся сценариев с подборкой оформления
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для проведения запоминающихся эмоциональных, тематических вечеров, праздников
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            9) Каталог №9 <br> Учебные курсы «Красные маки»
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список учебных курсов с количеством часов, стоимостью занятий, программа теоретических, практических занятий, список тематических вечеров (с одноразовым посещением)
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Обучение ландшафтному озеленению, изготовлению декоративных изделий, обучение маркетингу (работе на готовых ландшафтных объектах), обучение практическому применению знаний по здоровому образу жизни в Удмуртии и Поволжье
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            10) Каталог №10 <br> Пищевые продукты растительные региона Поволжье (травяной чай, замороженные ягоды и овощи, варенье)
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список, стоимость и состав продуктов, способ упаковки, хранения, технология изготовления
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для употребления в цельном виде и использовании в меню здорового образа жизни, примеры рецептов
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="table_cell">
                        <span class="table_cell_subtitle">
                            11) Каталог №11 <br> Прайс-лист на услуги по озеленению
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Список и стоимость услуг по ландшафтному, дизайну территорий, озеленению, уходу за территорией
                        </span>
                    </td>
                    <td class="table_cell">
                        <span>
                            Для использования при заявках на ландшафтные работы
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <a href="{{ asset('download_files/Бланк договора подряда на выполнение проектных работ.pdf') }}">
        Бланк договора подряда на выполнение проектных работ.pdf
    </a>


@endsection
