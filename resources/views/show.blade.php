@extends("blank")

@section("konten")

Name : {{ $data_user->name }} <br>
Email : {{ $data_user->email }} <br>
Level : {{ $data_user->level }} <br>
Created : {{ $data_user->created_at }} <br>
Updated : {{ $data_user->updated_at }} <br>
@endsection