@extends('layouts.layout') <!-- Extend the layout -->

@section('content')
    <h1>Welcome to the Admin Dashboard</h1>
    <form method="POST" action="{{ route('dictionary.store') }}">
        @csrf
        <input type="text" name="name_dict" placeholder="Masukkan kata baru">
        <input type="text" name="exp_dict" placeholder="Masukkan definisi">
        <button type="submit">Tambah Kata</button>
    </form>
    <form method="GET" action="{{ route('dictionary.show') }}">
        <input type="text" name="name_dicts" placeholder="Cari kata...">
        <button type="submit">Cari Kata</button>
    </form>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Logout</button>
    </form>
@endsection

@section('title')
    <title>ADMIN Kamus KBBI Online Sanata Dharma</title>
@endsection
