@extends('layouts.app')

@section('styles')
@endsection

@section('modals')
@endsection

@section('breadcrumbs')
    <li aria-current="page">
        <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Inställningar</span>
        </div>
    </li>
@endsection

@section('content')
    <div class="m-5">
        <h1 class="mb-5 font-bold">Inställningar</h2>
        <form id="onSaveForm" action="#" method="POST">
            @csrf
        </form>

        <button class="onSave block text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Spara
        </button>
        <div class="action-message mt-3">
        </div>
    </div>
@endsection

@section('scripts')
    @include('settings::includes.scripts.form')
@endsection
