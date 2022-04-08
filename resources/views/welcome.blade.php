@extends('layouts.adminLTE')

@section('title', 'Selamat Datang')

@section('title-body','Sistem Informasi')

@section('breadcrumb')
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="/">Home</a></li>
  </ol>
@endsection

@section('content')
    <h1>SELAMAT DATANG DI SISTEM INFORMASI INVENTORY CONTROL</h1>
@endsection
    
Item Type
# Colomn Name Type Null Default
UK code varchar (20) No
description varchar (255) No


php artisan crud:generate ItemType --fields='code#string; description#text;' --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html