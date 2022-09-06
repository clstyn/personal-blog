@extends('layouts.app')
@section('content')
    <div class="bg-biru">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/blog" class="btn btn-outline-primary btn-sm my-2">Go Back</a>
                    <div class="cardBlur mt-3 p-4">
                        <h1 class="display-4">Edit Post</h1>
                        <p>Edit and submit this form to update a post</p>

                        <hr>

                        <form action="" method='POST'>
                            @method('PUT')
                            @csrf 
                            <div class="row">
                                <div class="control-group col-12">
                                    <label for="title">Post Title</label>
                                    <input type="text" id='title' name='title' class='form-control' placeholder='Enter post title' value='{{ $post->title }}' required>
                                </div>
                                <div class="control-group col-12 mt-2">
                                    <label for="body">Post Body</label>
                                    <textarea name="body" id="body" rows="5" placeholder='Enter post body' class='form-control' required>{{$post->body}}</textarea>
                                </div>  
                            </div>
                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id='btn-submit' class="btn btn-primary">Update Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection