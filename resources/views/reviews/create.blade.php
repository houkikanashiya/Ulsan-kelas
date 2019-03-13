@extends('layouts.app')

@section('content')
    
   


<h1>New class review</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($review, ['route' => 'reviews.store']) !!}
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
                    {!! Form::select('rank',[ '' => '','difficult' => 'difficult','normal' => 'normal','easy' => 'easy',], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('presentation', 'presentation:') !!}
                    {!! Form::select('presentation',['' => '','〇' => '〇','×' => '×'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('test_review', 'How was the test?:') !!}
                    {!! Form::text('test_review', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('class_review', 'How was the class?:') !!}
                    {!! Form::text('class_review', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('post', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection