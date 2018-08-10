@extends('admin')

@section('admin-content')
<div class="col-xs-12">
    {{ Form::open(array('url'   => (isset($product) ? route('products.update', $product->id) :  route('products.store')),
                        'action' => array( isset($product) ? 'ProductsController@update' : 'ProductsController@store'),
                        'files' => true,
                        'before' => 'csrf',
                        )) }}
    {{ method_field(isset($product) ? 'PATCH' : 'POST') }}

    <div class="form-group">
        {{ Form::label('name', "Ім'я") }}<span class="asteriks">*</span>
        {{ Form::text('name', isset($product) ? $product->name : '', array('class' => 'form-control')) }}<br>
        {{ Form::label('articul', 'Articul') }}
        {{ Form::text('articul', isset($product) ? $product->articul : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('price', 'Ціна') }}<span class="asteriks">*</span>
        {{ Form::number('price', isset($product) ? $product->price : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('discount', 'Знижка') }}<span class="asteriks">*</span>
        {{ Form::number('discount', isset($product) ? $product->discount : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('category_id', 'Категорія') }}<span class="asteriks">*</span>
        {{ Form::select('category_id', $category, isset($product) ? $product->category_id : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('sub_category_id', 'Подкатегорія (для міжкімнатних дверей)') }}
        {{ Form::select('sub_category_id', $sub_category, isset($product) ? $product->sub_category_id : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('short_description', 'Короткий опис') }}<span class="asteriks">*</span>
        {{ Form::text('short_description', isset($product) ? $product->short_description : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('description', 'Опис') }}<span class="asteriks">*</span>
        {{ Form::text('description', isset($product) ? $product->description : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('quantity', 'Кількість') }}
        {{ Form::number('quantity', isset($product) ? $product->description : '', array('class' => 'form-control')) }}
        <br>
        {{ Form::label('img', 'Зображення') }}<span class="asteriks">*</span>
        {{ Form::file('img') }}
    </div>
    {{ Form::submit('Зберегти',array('class' => 'btn btn-success pull-right') ) }}
    {{ Form::close() }}
    <br>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection