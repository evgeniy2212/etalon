@extends('welcome')

@section('content')


    <div class="col-sm-12">
        @if(Cart::count()==0)
            <h2 class="order-success">Кошик порожній</h2>
            @if (session('status'))
                <h2 class="order-success">{{ session('status') }}</h2>
            @endif
        @else
            <div class="row">
                <h1>Кошик</h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Ім'я</th>
                        <th>Кількість</th>
                        <th>Ціна</th>
                        <th>Видалити</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $content as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $product->price }} грн</td>
                            <td><a href="{{ route('deleteFromCart', $product->rowId) }}" class="btn btn-danger">X</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Общая сумма:</td>
                        <td></td>
                        <td></td>
                        <td>{{ Cart::subtotal() }} грн</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
    </div>

    <div class="col-sm-9">
        {{ Form::open(array('url'       => 'acceptOrder',
                            'before'    => 'csrf',
                            'method'    => 'post',
                            ))
        }}
        <div class="form-group">
            <div class="col-xs-4">
                {{ Form::label('Name', "Ім'я", array('class' => 'required')) }}
                {{ Form::text('name', '', array('class' => 'form-control'), ['placeholder' => 'Имя']) }}
                <div class="row">
                    @if (count($errors) > 0)
                        <span class="form-error pull-left errors">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                {{ Form::label('number', 'Телефон', array('class' => 'required')) }}
                <div class="input-group">
                    <span class="input-group-addon">+38</span>
                    {{ Form::text('number', '', array('class' => 'form-control', 'id' => 'phone-mask')) }}
                </div>
                <div class="row">
                    @if (count($errors) > 0)
                        <span class="form-error pull-left errors">{{ $errors->first('number') }}</span>
                    @endif
                </div>
                {{ Form::label('delivery', 'Спосіб доставки', array('class' => 'required')) }}
                {{ Form::select('delivery', array(   'post'     => 'Нова пошта',
                                                     'courier'  => 'Кур\'єр по Черновіцькій обл.',
                                                     'pickup'   => 'Самовивіз',), '', array('class' => 'form-control')) }}
                <div class="row">
                    @if (count($errors) > 0)
                        <span class="form-error pull-left errors">{{ $errors->first('delivery') }}</span>
                    @endif
                </div>
                {{ Form::label('city', 'Місто', array('class' => 'required')) }}
                {{ Form::text('city', '', array('class' => 'form-control')) }}
                <div class="row">
                    @if (count($errors) > 0)
                        <span class="form-error pull-left errors">{{ $errors->first('city') }}</span>
                    @endif
                </div>
                {{ Form::label('adress', 'Адреса', array('class' => 'required')) }}
                {{ Form::text('adress', '', array('class' => 'form-control')) }}
                <div class="row">
                    @if (count($errors) > 0)
                        <span class="form-error pull-left errors">{{ $errors->first('adress') }}</span>
                    @endif
                </div>
                {{ Form::submit('Замовити',array('class' => 'btn btn-success pull-left confirm-order') ) }}
            </div>
        </div>
        {{ Form::close() }}
        @endif
    </div>

@endsection