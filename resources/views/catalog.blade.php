@extends('welcome')

@section('content')

    <div class="row">
        @foreach ($products as $product)
            <div class="col-sm-4 product-container">
                <img src="{{$product->img}}" class="product-img scale-img">
                <p class="product-description">{{$product->short_description}}</p>
                <p class="product-price">{{$product->price}} грн</p>
                <button type="button"
                        class="product-button"
                        data_name="{{ $product->name }}"
                        data_id="{{ $product->id }}"
                        data_price="{{ $product->price }}"
                        data_s_description="{{ $product->short_description }}">
                    Додати у кошик
                </button>
                <div class="container-message">
                    <div class="success-message"></div>
                </div>
            </div>
        @endforeach
    </div>

    @if ($category === "3")
        <div class="row">
            <div class="col-sm-12">
                <h1>Українські вікна: </h1>
                <p>ВІКНА, ЯКИМ МОЖНА ДОВІРЯТИ. ПРОФІЛЬНІ СИСТЕМИ УКРАЇНСЬКОГО ВИРОБНИЦТВА РОЗРАХОВАНІ НА СПОЖИВАЧА, ДЛЯ
                    ЯКОГО ВАЖЛИВЕ СПІВВІДНОШЕННЯ ЦІНИ І ЯКОСТІ КОНСТРУКЦІЙ. ЦЕ СИСТЕМИ З НЕОБХІДНИМИ ТЕХНІЧНИМИ
                    ХАРАКТЕРИСТИКАМИ, ЩО ЗАДОВОЛЬНЯТЬ БУДЬ-ЯКІ ВИМОГИ СПОЖИВАЧІВ.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="img/lws.jpg" class="window-img scale-img">
                <p>3-КАМЕРНА ПРОФІЛЬНА СИСТЕМА
                    П-ПОДІБНЕ АРМУВАННЯ
                    МОНТАЖНА ШИРИНА ПРОФІЛЮ СКЛАДАЄ 58 ММ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТІВ ТОВЩИНОЮ 24 ТА 32 ММ
                    ЧОРНИЙ УЩІЛЬНЮВАЧ
                    ЛАМІНАЦІЯ ОДНОСТОРОННЯ (ЗОЛОТИЙ ДУБ)</p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="img/aluplast.jpg" class="window-img scale-img">
                <p>3-КАМЕРНА ПРОФІЛЬНА СИСТЕМА
                    П-ПОДІБНЕ АРМУВАННЯ
                    МОНТАЖНА ШИРИНА ПРОФІЛЮ СКЛАДАЄ 58 ММ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТІВ ТОВЩИНОЮ 24 ТА 32 ММ
                    ЧОРНИЙ УЩІЛЬНЮВАЧ
                    ЛАМІНАЦІЯ ОДНОСТОРОННЯ (ЗОЛОТИЙ ДУБ)</p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="img/fenster.jpg" class="window-img scale-img">
                <p>4-КАМЕРНА ПРОФІЛЬНА СИСТЕМА
                    П-ПОДІБНЕ АРМУВАННЯ
                    МОНТАЖНА ШИРИНА ПРОФІЛЮ СКЛАДАЄ 60 ММ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТІВ ТОВЩИНОЮ 24, 32 ММ
                    ЧОРНИЙ УЩІЛЬНЮВАЧ
                    ЛАМІНАЦІЯ ДВОСТОРОННЯ
                    4 СТАНДАРТНИХ КОЛЬОРИ ЛАМІНАЦІЇ (ЗОЛОТИЙ ДУБ, ГОРІХ, МАХАГОН, ТЕМНИЙ ДУБ)</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="img/classic.jpg" class="window-img scale-img">
                <p>4-КАМЕРНА ПРОФІЛЬНА СИСТЕМА
                    П-ПОДІБНЕ АРМУВАННЯ
                    МОНТАЖНА ШИРИНА ПРОФІЛЮ СКЛАДАЄ 60 ММ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТІВ ТОВЩИНОЮ ДО 32 ММ
                    СІРИЙ УЩІЛЬНЮВАЧ
                    4 СТАНДАРТНИХ КОЛЬОРИ ЛАМІНАЦІЇ
                    7 РОКІВ ГАРАНТІЇ</p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="img/mega.jpg" class="window-img scale-img">
                <p>5-КАМЕРНА ПРОФІЛЬНА СИСТЕМА
                    П-ПОДІБНЕ АРМУВАННЯ
                    МОНТАЖНА ШИРИНА ПРОФІЛЮ – 70 ММ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТІВ ТОВЩИНОЮ 24 ТА 42 ММ
                    ЧОРНИЙ УЩІЛЬНЮВАЧ
                    4 СТАНДАРТНИХ КОЛЬОРИ ЛАМІНАЦІЇ
                    7 РОКІВ ГАРАНТІЇ</p>
            </div>
        </div>
        <div class="row">
            <h1>Європейські вікна: </h1>
            <p>ПРОФІЛЬНІ СИСТЕМИ ЄВРОПЕЙСЬКОГО ВИРОБНИКА РОЗРАХОВАНІ НА СПОЖИВАЧІВ, ЯКІ ЦІНУЮТЬ ВИШУКАНІСТЬ, СТИЛЬ,
                КОМФОРТ ТА НАДІЙНІСТЬ. ЦЕ СИСТЕМИ НЕОБМЕЖЕНИХ МОЖЛИВОСТЕЙ, ЯКІ ПРИЗНАЧЕНІ ДЛЯ ЗАДОВОЛЕННЯ ПОТРЕБ
                НАЙВИБАГЛИВІШИХ КЛІЄНТІВ. ЄВРОПЕЙСЬКІ ВІКНА – ДЛЯ КЛІЄНТІВ, ЯКІ ЗНАЮТЬ, ЧОГО ПРАГНУТЬ!</p>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="img/german.jpg" class="window-img scale-img">
                <p>5-ТИКАМЕРНА ПРОФІЛЬНА СИСТЕМА ШИРИНОЮ 70ММ
                    П-ПОДІБНЕ АРМУВАННЯ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТА ДО 44 ММ
                    УТЕПЛЮВАЧ В ПІДСТАВОЧНОМУ ПРОФІЛІ
                    4 СТАНДАРТНИХ КОЛЬОРИ ЛАМІНАЦІЇ
                    15 РОКІВ ГАРАНТІІ</p>
            </div>
            <div class="col-sm-4 text-center">
                <img src="img/german2.jpg" class="window-img scale-img">
                <p>5-ТИКАМЕРНА ПРОФІЛЬНА СИСТЕМА ШИРИНОЮ 70ММ
                    ВСТАНОВЛЕННЯ СКЛОПАКЕТА ДО 40 ММ
                    УТЕПЛЮВАЧ В ПІДСТАВОЧНОМУ ПРОФІЛІ
                    ОКРУГЛІ КУТИ З ЗОВНІШНЬОЇ ТА ВНУТРІШНЬОЇ СТОРОНИ
                    КВАДРАТНИЙ ПІДСИЛЮВАЧ (АРМУЮЧИЙ ПРОФІЛЬ) РАМІ І ІМПОСТІ
                    ЗАГЛУШКА ПАЗУ ШТАПИКА («ПАЗ ДОМОГОСПОДАРКА»)
                    СІРИЙ УЩІЛЬНЮВАЧ
                    4 СТАНДАРТНИХ КОЛЬОРИ ЛАМІНАЦІЇ
                    15 РОКІВ ГАРАНТІЇ</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1>Вікна "PERFECT"</h1>
                <p>TM “PERFECT” ВЖЕ ПОНАД 13 РОКІВ ПРАЦЮЄ НА РИНКУ ВІКОННИХ ТА ДВЕРНИХ КОНСТРУКЦІЙ. ЗАСТОСОВУЮЧИ НОВІТНІ
                    ТЕХНОЛОГІЇ, КОНТРОЛЬ КОЖНОЇ ДЕТАЛІ, БЕЗДОГАННИЙ СТИЛЬ МИ ЗМОГЛИ ДОСЯГТИ ВИСОКОЇ ЯКОСТІ ПРОПОНОВАНИХ
                    ТОВАРІВ І ПОСЛУГ, ГОЛОВНЕ – ЗАВОЮВАЛИ ДОВІРУ ТИСЯЧ СПОЖИВАЧІВ!
                    ГРАМОТНА І ТОЧНО НАЛАГОДЖЕНА СИСТЕМА СЕРІЙНОГО ВИРОБНИЦТВА ЗРОБИЛА ПЛАСТИКОВІ ВІКНА ДОСТУПНИМИ ДЛЯ
                    БУДЬ-ЯКОГО БУДИНКУ. ТЕМПИ І МОЖЛИВОСТІ ВИРОБНИЦТВА СТРІМКО НАРОСТАЮТЬ, В РЕЗУЛЬТАТІ ЧОГО КОМПАНІЯ
                    ПРОПОНУЄ ГРАМОТНІ РІШЕННЯ ДЛЯ БУДЬ-ЯКИХ ВИПАДКІВ: ВІД СТАНДАРТНИХ ВІКОН ДО СИСТЕМ ОСНАЩЕННЯ БУДИНКІВ
                    З ПАСИВНИМ ОПАЛЕННЯМ.ДОСТАВКА ГОТОВОЇ ПРОДУКЦІЇ ЗДІЙСНЮЄТЬСЯ ВЛАСНИМ ЛОГІСТИЧНИМ ЦЕНТРОМ. ДЛЯ
                    ТРАНСПОРТУВАННЯ ЗАСТОСОВУЮТЬСЯ ЛИШЕ СПЕЦІАЛЬНО СКОНСТРУЙОВАНІ АВТОМОБІЛІ З КРИТИМ
                    КУЗОВОМ.ВСТАНОВЛЕННЯ ВІКОН ПРОВОДИТЬСЯ МОНТАЖНИКАМИ, ЯКІ ПРОЙШЛИ ПРОФІЛЬНУ ПІДГОТОВКУ, З ДОТРИМАННЯМ
                    ВСІХ НОРМ І СТАНДАРТІВ. МИ ЗАСТОСОВУЄМО ЛИШЕ ЯКІСНІ КРІПИЛЬНІ МАТЕРІАЛИ, ЗОКРЕМА – НАЙКРАЩУ МОНТАЖНУ
                    ПІНУ.ВІКНА КОМПЛЕКТУЮТЬСЯ НАДІЙНОЮ ФУРНІТУРОЮ, ЯКА ПЕРЕДБАЧАЄ ФУНКЦІЇ МІКРОЛІФТУ – ЗАХИСТУ ВІД
                    ПРОСІДАННЯ, ПРОВІТРЮВАННЯ, ЗАХИСТ ВІД НЕПРАВИЛЬНОГО ВІДКРИВАННЯ/ВІДКИДАННЯ СТУЛКИ ТА ЗЛАМУ.</p>
                <p class="text-center">
                    <img src="img/part-of-window.png" class="scale-img">
                </p>
            </div>
        </div>
    @endif

@endsection