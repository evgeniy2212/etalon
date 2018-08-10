<div class="row">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Серійний номер</th>
            <th>Товари</th>
            <th>Кількість</th>
            <th>Ціна</th>
            <th>Загальна сума</th>
            <th>Адреса</th>
            <th>Ім'я</th>
            <th>Номер</th>
            <th>Фотографія</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    @foreach( $products as $item)
                        {{ $item->id }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach( unserialize($orderList) as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach( unserialize($quantity) as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach( unserialize($priceList) as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>{{ $amount }}</td>
                <td>{{ $adress }}</td>
                <td>{{ $name }}</td>
                <td>+380{{ $number }}</td>
                <td>
                    @foreach( $products as $item)
                        <img src="{{asset($item->img)}}" style="width: 50px; height: 100px;"> <br>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
