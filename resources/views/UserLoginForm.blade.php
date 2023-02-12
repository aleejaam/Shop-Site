@extends('Master')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-6" style="heigt:100px; padding:150px;">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button  type="submit" class="btn btn-primary" style="margin-left:90px;">LOGIN</button>
        </form>
    </div>
    </div>
@endsection
