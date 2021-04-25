@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">SOLID Design Principles</div>

                <div class="card-body">
                    <h1>SOLID Design Principles Explained:</h1>
                    <div class="list-group">
                        <div class="list-group-item">
                            Single Responsibility Principle
                        </div>
                        <div class="list-group-item">
                            Open/Closed Principle
                        </div>
                        <div class="list-group-item">
                            Liskov Substitution Principle
                        </div>
                        <div class="list-group-item">
                            Interface Segregation Principle
                        </div>
                        <div class="list-group-item">
                            Dependency Inversion
                        </div>
                    </div>
                    <hr>
                    <h2>What is Single Responsibility Principle ?</h2>
                    <p class="green font-weight-bold text-center h4">
                            " A class should have one, and only one, reason to change "
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection