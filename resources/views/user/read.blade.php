@extends('base.bootstrap')

@section('bootstrap')
<h1>Test</h1>
<h2>{{ Auth::user()->Nama }}</h2>
@endsection
