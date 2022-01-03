@extends('layouts.shop')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>LOGIN</h2>
                    <form action="{{route('checkLogin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-info">AUTHORIZATION</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
