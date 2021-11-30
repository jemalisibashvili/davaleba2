@extends('layouts.app')
@section('title','student')
@section('content')
<div>
    @include('components.links')
</div><br>
<div>
    {{ $student->title }}
    {{ $student->body }}
</div>

@endsection
