@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">GUIDE</div>

                <div class="card-body">
                    <h1>Pages</h1>
                    <ul class="list-group">
                        <a href="{{ route('services') }}">
                            <li class="list-group-item">Service & Dependency Injection</li>
                        </a>
                        <a href="{{ route('traits') }}">
                            <li class="list-group-item">Laravel Traits – What are Traits</li>
                        </a>
                        <a href="{{ route('solid') }}">
                            <li class="list-group-item">SOLID Design Principles</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection