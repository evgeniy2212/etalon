@extends('admin')

@section('admin-content')

<div class="row">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Унікльний номер</th>
            <th>Статус</th>
            <th>Перелік товарів</th>
            <th>Артікул</th>
            <th>Кількість</th>
            <th>Ціна</th>
            <th>Загальна ціна</th>
            <th>Адреса</th>
            <th>Ім'я</th>
            <th>Номер</th>
            <th>Спосіб доставки</th>
            <th>Місто</th>
            <th>Зроблено</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $orders as $order)
            <tr @if($order->status)
                class="success"
                @else
                class="danger"
                @endif>
                <td>{{ $order->id }}</td>
                <td>
                    @if($order->status)
                        Підтверджений
                    @else
                        <a class="btn btn-success" href="{{ route('confirmOrder', $order->id) }}">Подвердить</a>
                    @endif
                </td>
                <td>
                    @foreach($order->order_list as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($order->articuls as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($order->order_quantity as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>
                    @foreach($order->price_list as $item)
                        {{ $item }}<br>
                    @endforeach
                </td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->adress }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->number }}</td>
                <td>{{ $order->delivery_method }}</td>
                <td>{{ $order->city }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection