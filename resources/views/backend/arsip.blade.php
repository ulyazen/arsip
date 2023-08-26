@extends('backend.layouts.app')

@section('title', __('Arsip'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Welcome')
        </x-slot>
    </x-backend.card>
@endsection
