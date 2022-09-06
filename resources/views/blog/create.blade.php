@extends('layouts.app')
@section('content')
    <div class="bg-biru">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/blog" class="btn btn-outline-primary btn-sm my-2">Go back</a>
                    <div class="cardBlur mt-3 p-4">
                        <h1 class="display-4">Create a New Post</h1>
                        <p>Fill and submit this form to create a new post</p>

                        <hr>

                        <form action="" method='post'>
                            @csrf 
                            <div class="row">
                                <div class="control-group col-12">
                                    <label for="title">Post Title</label>
                                    <input type="text" id='title' name='title' class="form-control" placeholder='Enter Post Title' required>
                                </div>

                                <div class="control-group col-12 mt-2">
                                    <label for="body">Post Body</label>
                                    <textarea id='body' class="form-control" name='body' placeholder='Enter Post Body' rows='' required></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="control-group col-12 text-center">
                                    <button id='btn-submit' class="btn btn-primary">Create Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection