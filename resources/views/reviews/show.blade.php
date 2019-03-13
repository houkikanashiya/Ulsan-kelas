@extends('layouts.app')

@section('content')


<h1>{{ $review->class_name }}</h1>

<br>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $review->id }}</td>
        </tr>
        <tr>
            <th>lecturer</th>
            <td>{{ $review->lecturer }}</td>
        </tr>
        <tr>
            <th>class name</th>
            <td>{{ $review->class_name }}</td>
        </tr>
        <tr>
            <th>rank</th>
            <td>{{ $review->rank }}</td>
        </tr>
        <tr>
            <th>presentation</th>
            <td>{{ $review->presentation }}</td>
        </tr>
        <tr>
            <th>test review</th>
            <td>{{ $review->test_review }}</td>
        </tr>
        <tr>
            <th>class review</th>
            <td>{{ $review->class_review }}</td>
        </tr>
        
    </table>
     {!! link_to_route('reviews.edit', 'edit', ['id' => $review->id], ['class' => 'btn btn-light']) !!}
     {!! Form::model($review, ['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection