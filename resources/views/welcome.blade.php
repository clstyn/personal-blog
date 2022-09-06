@extends('layouts.app')
@section('content')
    <div class="container-fluid overflow-hidden p-0 m-0">
        <div class="row no-gutters welcomeBg">
            <div class="col-12 text-center">
                <div class="welcomeTitle">
                    <div class="cardBlur px-5 py-4">
                        <h1 class="display-one">{{config('app.name')}}</h1>
                        <p>Welcome to my personal blog, Click the button below to get started.</p>
                        <br>
                        <a href="/blog" class='btn btn-outline-primary'>Show Blog</a>
                        <a href="/" class='btn btn-outline-secondary'>Log In as Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection