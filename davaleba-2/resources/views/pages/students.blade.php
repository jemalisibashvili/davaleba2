@extends('layouts.app')
@section('title','students')
@section('content')
<div>
    <h2>Table of student works</h2>

<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>title</th>
    <th>body</th>
    <th>action</th>
  </tr>

  @foreach ($students as $student)
  <tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->title}}</td>
    <td>{{$student->body}}</td>
    <td>  <a href="{{ route('student', ['student'=> $student->slug]) }}">
      view
  </a></td>
    </tr>
  @endforeach
</table>

</div>
{{ $students->links() }}

@endsection
