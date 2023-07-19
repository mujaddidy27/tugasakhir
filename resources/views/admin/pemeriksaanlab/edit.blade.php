@extends('layouts.index')

@section('content')
    <form action="{{ route('pasien.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <input value="{{ $data->nama }}" type="text" name="nama" id="">
    </form>
@endsection
