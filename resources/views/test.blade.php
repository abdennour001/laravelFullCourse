@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between">
            <h2>Title</h2>
            <a href="#">Add something</a>
            <a href="#">Remove something</a>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        @csrf
                        <form method="post" action="{{ route('welcome') }}">

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">User Name</label>
                                <input type="text" class="col-md-6 form-control"/>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <input type="password" class="col-md-6 form-control"/>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >Login</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <h4>Side bar</h4>
                <p>More information about our application.</p>

            </div>

        </div>

    </div>
@endsection