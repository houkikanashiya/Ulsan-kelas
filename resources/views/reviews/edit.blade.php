@extends('layouts.app')

@section('content')

  
<!-- I am stil building this file-->
<h1>edit class review</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'put']) !!}
                 <div class="form-group">
                    {!! Form::label('lecturer', 'lecturer:') !!}
                    {!! Form::text('lecturer', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('class_name', 'class name(class code):') !!}
                    {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('rank', 'rank:') !!}
                    {!! Form::select('rank',['','difficult', 'normal', 'easy'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('presentation', 'presentation:') !!}
                    {!! Form::select('presentation',['','〇',' ×'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('test_review', 'How was the test?:') !!}
                    {!! Form::text('test_review', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('class_review', 'How was the class?:') !!}
                    {!! Form::text('class_review', null, ['class' => 'form-control']) !!}
                </div>
                <br>
                 {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection