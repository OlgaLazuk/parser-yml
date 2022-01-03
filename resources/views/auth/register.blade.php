@extends('layouts.shop')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>REGISTRATION</h2>
                    <form action="{{route('registration')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">Registration</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
