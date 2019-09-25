@extends('pages.master')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="panel-body">
                    <!-- Formularz -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::model($video, ['method'=>'PATCH', 'class'=>'form-horizontal', 'action'=>['VideosController@update',
                    $video->id]]) !!}
                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('title', 'Tytuł: ') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('description', 'Opis: ') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 control-label">
                            {!! Form::label('url', 'URL: ') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('url', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Dodaj artykuł', null, ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection