@extends('layouts.app')

@section('content')

 <h1>Class Reviews</h1>
    <div style="padding:20px 0; padding-left:0px;">
      {!! Form::open(['route' =>'reviews.search','method' => 'GET']) !!}
   　　　 {!! Form::text('lecturer', null,["placeholder"=>"lecturer"]) !!}
   　　 {!! Form::submit('search') !!}
　　　{!! Form::close() !!}
    </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>lecturer</th>
                    <th>class name</th>
                    <th>date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                <tr>
                    <td>{!! link_to_route('reviews.show', $review->id, ['id' => $review->id]) !!}</td>
                    <td>{{ $review->lecturer }}</td>
                    <td>{{ $review->class_name }}</td>
                    <td>{{ $review->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
       <div class="text-center"> {{ $reviews->render('pagination::bootstrap-4') }}</div>
        
        {!! link_to_route('reviews.create', 'create new review', null, ['class' => 'btn btn-primary']) !!}

@endsection
    