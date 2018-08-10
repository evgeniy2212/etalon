@extends('admin')

@section('admin-content')

    <div class="row product-table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Найменування</th>
                <th scope="col">Опис</th>
                <th scope="col">Кількість</th>
                <th scope="col">Ціна</th>
                <th scope="col">Видалити</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
            <tr>
                <th scope="row">{{$key}}</th>
                <td><a href="products/{{$product->id}}/edit">{{$product->name}}</a></td>
                <td>{{$product->short_description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}} грн</td>
                <td>
                    <a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger" >
                        Видалити
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
