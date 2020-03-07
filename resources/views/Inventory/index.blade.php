@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">To jest invetory</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in! Suzin tu byl
                    </div>
                </div>
            </div>

            <div class="col-8 mt-2 py-1">
                <div class="card mt-3">
                    <div class="card-header">Add Item</div>
                    <div class="card-body"></div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">Edit Item</div>
                    <div class="card-body"></div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">Show Item</div>
                    <div class="card-body"></div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">Delete Item</div>
                    <div class="card-body"></div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">Items list</div>

                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
