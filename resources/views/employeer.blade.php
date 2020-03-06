@extends('layout.app')

@section('content')
<div class="container" style="margin-top: 8%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hi boss!
                    {{ Auth::guard('employeer')->user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection