@extends('base')

@section('additionalHeadInfo')
    <title>Stories | Digital ink.</title>
@endsection

@section('additionalHeadInfo')

    <link rel="stylesheet" type="text/css" href="css/base.css">

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Create a Story!</h1>
            <div>
                <form id="story_upload" method="post" action="{{ route('stories.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="author_id">Author ID:</label>
                        <input type="text" class="form-control" name="author_id" autocomplete="off" value="{{ old('author_id') }}">
                    </div>
                    <span class="text-danger">{{ $errors->first('author_id') }}</span>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" autocomplete="off" value="{{ old('title') }}">

                    </div>

                    <div class="form-group">
                        <label for="genre">Genre:</label>
                        <select name="genre">
                            <option value="Action and Adventure">Action and Adventure</option>
                            <option value="Children's">Children's</option>
                            <option value="Historical">Historical</option>
                            <option value="Horror">Horror</option>
                            <option value="Romance">Romance</option>
                            <option value="Science Fiction">Science Fiction</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="blurb">Blurb:</label>
                        <input type="textarea" class="form-control" name="blurb" autocomplete="off" value="{{ old('blurb') }}">
                    </div>

                    <div class="form-group">
                        <label for="content">Content:</label>
                        <input type="textarea" class="form-control" name="content" autocomplete="off" value="{{ old('content') }}">
                    </div>

                    <div class="form-group">
                        <input type="radio" id="draft" name="published" value="0">
                        <label for="female">Save as a Draft</label><br>
                        <input type="radio" id="upload" name="published" value="1">
                        <label for="other">Upload</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Complete</button>
                </form>
            </div>
        </div>
    </div>

@endsection
