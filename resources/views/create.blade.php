@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create listing<span class="float-right"><a href='/home' class="btn btn-secondary">Go Back</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="/listings">
                        @csrf
                      <div class="form-group">
                        <label for="name">Enter Your name</label>
                        <input type="text" class="form-control" name=name id="name" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label for="address">Enter Your address</label>
                        <input type="text" class="form-control" name=address id="address" placeholder="Enter address">
                      </div>
                      <div class="form-group">
                        <label for="website">Enter Your website</label>
                        <input type="text" class="form-control" name=website id="website" placeholder="Enter website">
                      </div>
                      <div class="form-group">
                        <label for="email">Enter Your email</label>
                        <input type="email" class="form-control" name=email id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="phone">Enter Your phone</label>
                        <input type="number" class="form-control" name=phone id="phone" placeholder="Enter phone">
                      </div>
                      <div class="form-group">
                        <label for="bio">Enter Your bio</label>
                        <input type="text" class="form-control" name=bio id="bio" placeholder="Enter bio">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection