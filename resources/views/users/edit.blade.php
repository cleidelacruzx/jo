@extends('layouts.app')
@section('content')
    @include('partials._UserEditCreate')
    <input type="hidden" name="is_active" id="is_active" value="{{ $user->is_active == 'Y' ? 'Y' : 'N' }}">
    {!! Form::close() !!}              
@endsection