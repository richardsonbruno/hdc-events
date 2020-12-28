@extends('layouts.main')

@section('title', 'HDC Events - Produtos')

@section('content')
    <h1>Produtos</h1>
    @if($search != '')
        <p>O usuário pesquisou o produto: {{ $search }}</p>
    @endif
@endsection
