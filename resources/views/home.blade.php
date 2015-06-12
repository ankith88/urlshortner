@extends('app')

@section('content')


                <h1>Welcome to URL Shortener Sample Website</h1>

                {!! Form::open(['url' => '/make', 'id' => 'myform', 'class' => 'ajax']) !!}

                <div class="form-group">


                    {!! Form::label('url', 'URL') !!}
                    {!! Form::url('url', null, ['class' => 'form-control']) !!}

                </div>

                <div class="form-group">


                    {!! Form::submit('URL SHORTEN', ['class' => 'btn btn-primary form-control', 'name' => 'tab', 'id' => 'tab']) !!}

                </div>

                {!! Form::close() !!}

                @include('errors.link')

                @if(Session::has('global'))

                <div class="alert-success alert">

                 <a href="{{ Session::get('global') }}">{{ Session::get('global') }}</a>
                </div>

                @endif


@endsection
