@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="text-center">Welcome Back <span style="color: blue;">{{ Auth::user()->name }}</span></h3>
                </div>
                <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <h4 class="text-center">Send Email</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('kirim.email') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" name="email" placeholder="Send To:" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" name="msg" placeholder="Write Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" style="width: 100%;">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection