@extends('main')

@section('container')

<h1 class="text-center text-secondary">Daftar {{$title}} Kampus Dota</h1>

<div class="row py-5">
  @foreach ($data as $baris)
  <div class="py-2 col-md-6 ">
    <div class="list-group-item text-center bg-light"> {{$baris->nama}} </div>
    </div>
    @endforeach
</div>

<div class="row py-5">
  <a href="/MahasiswaRawInsert" class="list-group-item text-center bg-light py-2 col"  >Insert</a>
  <a href="/MahasiswaRawDelete" class="list-group-item text-center bg-light py-2 col"  >Delete</a>
  <a href="/MahasiswaRawUpdate" class="list-group-item text-center bg-light py-2 col"  >Update</a>
</div>

@endsection