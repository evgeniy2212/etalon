@extends('welcome')

@section('content')

    <div class="visitor-counter">
        <span class="visitors">
            Відвідувачі
        </span>
        <span class="num-counter">
            {{$counter}}
        </span>
    </div>

    <div class="row text-center logo-container">
        <div class="col-sm-12">
            <h1 class="site-title">
                <img src="img/logo.png" class="logo">
                Etalon-вікна-та-двері</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <img src="img/slides.gif" class="slides">
        </div>
    </div>
    <div class="row fade">
        <div class="col-sm-4 out-door">
            <a href="/products?category=1&sub_category=none">
                <img src="img/out_door.jpg" class="menu-img">
                <p class="sub-title-menu">
                    Вхідні двері
                </p>
            </a>
        </div>
        <div class="col-sm-4 doors">
            <a href="/products?category=2&sub_category=none">
                <img src="img/doors.jpg" class="menu-img">
                <p class="sub-title-menu doors-text">
                    Міжкімнатні двері
                </p>
            </a>
        </div>
        <div class="col-sm-4 windows">
            <a href="/products?category=3&sub_category=none">
                <img src="img/windows.jpg" class="menu-img">
                <p class="sub-title-menu text-windows">
                    Вікна
                </p>
            </a>
        </div>
    </div>
    <div class="row fade">
        <h3 class="title-about">Про нас</h3>
        <p class="text-about-us">
            Ви потрапили на цей сайт якщо шукаєте двері в місті Чернівці.Можливо ви шукаєте міжкімнатні мдф двері чи
            шпоновані чи розсувні(двері-купе).В нас представлений широкий асортимент виробників - тут лідери
            дверного ринку "Новий стиль" та "Оміс" і нестандартні та особливі двері фабрики "Фенікс" та "Неман",є
            один з найкращих - по співвідношенню ціна\якість - виробник шпонованих дверей "Ваш стиль".Італійські
            дверні технології представляє фабрика "Корфад"
            <br>
            <br>
            Як же розібратися в цьому різноманітті дверей?
            <br>
            <br>
            Ні,звичайно,можливо обїхати все місто - наприклад,поїхати в Епіцентр чи походити по магазинам.Втратити
            багато часу і вибрати те що подобається.Але на жаль такі гіпермаркети як Епіцентр не надають послуг
            попереднього заміру та консультації.А саме на етапі консультації у клієнта - можна виявити всі нюанси -
            тим самим зберігши - час,нерви та гроші замовника.Продавців - консультантів іноді можна чекати по
            півгодини - а часта зміна кадрів - не дозволяє набути серйозного фахового досвіду - і підібрати
            найкращий варіант.
            <br>
            <br>
            Є багато невеликих магазинів які продають одночасно багато всього - вікна,двері,ворота і т.д - але знову
            ж таки через свої невеликі розміри та універсальність - вони не можуть тримати широкий асортимент дверей
            в магазині,їхні консультанти знову ж таки через велику кількість різних товарів не глибоко розбираються
            в специфіці міжкімнатки - а монтажники універсали що ставлять однаково все добре - це скорше виключення
            з правил.
            <br>
            <br>
            По ідеї можна звернутися у спеціалізовані мережі наприклад такі як "Двері Білорусії", але час показав,що
            по співвідношенню ціна\якість та фаховості персоналу - вони не стали лідерами на нашому ринку,як від них
            очікували
            <br>
            <br>
            Компанія Еталон вже більше 5 років на ринку - на відміну від інших - наша основна спеціалізація - це
            міжкімнатні двері.В нас працюють фахівці з досвідом,ми знаємовсі тонкощі цього ринку.І намагаємося
            підібрати для наших клієнтів оптимальну якість - за найкращу ціну.
        </p>
    </div>
    <div class="row fade">
        <div class="col-sm-6 square-container">
            <img src="img/square_1.jpg" class="square-img scale-img">
        </div>
        <div class="col-sm-6 square-container">
            <img src="img/square_2.jpg" class="square-img scale-img">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 square-container">
            <img src="img/square_3.jpg" class="square-img scale-img">
        </div>
        <div class="col-sm-6 square-container">
            <img src="img/square_4.jpg" class="square-img scale-img">
        </div>
    </div>
    <h3 class="title-about">Контакти</h3>
    <div class="row">

        <div class="col-sm-6 contact-container">
            <div class="dark-background"></div>
            <img src="img/girl.jpg" class="contact-img scale-img">
            <p class="contact-name">
                Ольга
            </p>
            <p class="contact-position">
                Менеджер з продажу
            </p>
            <p class="contact-number">
                +380997309837
            </p>
        </div>
        <div class="col-sm-6 contact-container">
            <div class="dark-background"></div>
            <img src="img/man.jpg" class="contact-img scale-img">
            <p class="contact-name">
                Анатолій
            </p>
            <p class="contact-position">
                Менеджер з продажу
            </p>
            <p class="contact-number">
                +380997309837
            </p>
        </div>
    </div>
    <div class="row fade">
        <h4 class="sub-title">
            З питань співпраці та консультацій чекаємо вас в офісі з 9.00 до 19.00
        </h4>
    </div>

    @include('footer')
@endsection

