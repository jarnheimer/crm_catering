@extends('layouts.app')

@section('contentheader_title', 'Редактировать сотрудника - ' . $user->fullname)

@section('htmlheader_title')
    Редактировать сотрудника - {{ $user->fullname }}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                {!! Form::open(['route' => ['staff.update', $user->id], 'method' => 'PUT']) !!}
                    @include('staff._form', ['user' => $user])
                {!! Form::hidden('id', $user->id) !!}
                {!! Form::close() !!}
                <div class="box-footer">
                {!! Form::open(['route' => ['staff.destroy', $user->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы действительно хотите удалить этого работника?");']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection