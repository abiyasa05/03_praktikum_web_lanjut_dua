@extends('layouts/master')

@section('title', 'Dashboard')

@section('pages')

@section('page', 'Dashboard')

@section('konten_dashboard')

@push('custom_css')
<style></style>
@endpush  

    <h1>{{ $welcome }}</h1>
    <p>Ini Merupakan Halaman Dashboard Dari Website Kami</p>
@endsection
@push('custom_js')
<script>
    alert('Selamat Datang')
</script>
<style></style>
@endpush


