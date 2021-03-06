@extends('templates.master')

@section('conteudo-view')

@if(session('success'))
    <h3>{{ session('success')['messages'] }}</h3>      
@endif

{!! Form::model($institution, ['route' => ['institution.update', $institution->id], 'method' => 'put', 'class' => 'form-padrao']) !!}

    @include('templates.formulario.input', ['label'=> 'Nome da Instituição', 'input' => 'name', 'attributes' => ['placeholder' => 'Nome da instituição']])
    @include('templates.formulario.submit', ['input' => 'Atualizar', 'class' => 'btn btn-primary'])

{!! Form::close()!!}
    
@endsection