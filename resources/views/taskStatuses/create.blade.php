@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mb-5">{{ __('task_status.create_title') }}</h1>
        {!! Form::open()->route('task_statuses.store')->fill($taskStatus) !!}
        @include('taskStatuses.form')
        <div>
            {!! Form::submit(__('task_status.create')) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection