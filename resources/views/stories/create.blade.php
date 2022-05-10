@extends('base')

@section('additionalHeadInfo')
    <title>Create | Digital ink.</title>
@endsection

@section('content')
@php


@endphp



    <div class="main-body">
        <!-- page heading -->
        <h1 class = "form-heading">Create your story!</h1>
        <br/>

        <!-- form for story upload -->
        <form id="story_upload" method="post" action="{{ route('stories.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- first section of the form -->
            <div class="upload-section">
                <!-- author ID field -->
                <div class="form-group">
                    <label for="author_id" class = "input-heading"><strong>Author Reference Number: *</strong></label>
                    <input type="text" class="form-control" id="author_id" name="author_id" autocomplete="off" disabled value="{{ Auth()->user()->id }}">

                    <!-- error messages -->
                    <span class="text-danger">{{ $errors->first('author_id') }}<br/></span>
                </div>

                <!-- title field -->
                <div class="form-group">
                    <label for="title" class = "input-heading"><strong>Title: *</strong></label>
                    <p>Every story needs a good title!</p>
                    <input type="text" class="form-control" id="title" name="title" autocomplete="off" value="{{ old('title') }}">

                    <!-- error messages -->
                    <span class="text-danger">{{ $errors->first('title') }}<br/></span>
                </div>

                <!-- genre field -->
                <div class="form-group">
                    <label for="genre" class = "input-heading"><strong>Genre: *</strong></label>
                    <p>What type of story are you creating?</p>

                    <select class="form-control" id="genre" name="genre">
                        <option value="" disabled selected>Choose the genre</option>
                        <option value="Action and Adventure">Action and Adventure</option>
                        <option value="Children's">Children's</option>
                        <option value="Historical">Historical</option>
                        <option value="Horror">Horror</option>
                        <option value="Romance">Romance</option>
                        <option value="Science Fiction">Science Fiction</option>
                    </select>

                    <br/>
                </div>
            </div>
            <br/>

            <!--second section of the form -->
            <div class="upload-section">
                <!-- content field -->
                <div class="form-group">
                    <label for="content" class="input-heading"><strong>Your Story: *</strong></label>
                    <p>Add the content of your story below.</p>
                    <textarea class="form-control" rows = "10" id="content" name="content" autocomplete="off">{{ old('content') }}</textarea>

                    <!-- error messages -->
                    <span class="text-danger">{{ $errors->first('content') }}<br/></span>

                    <input type="file" accept=".pdf" id="file_upload" name="file_upload">
                    <span class="text-danger">{{ $errors->first('file_upload') }}<br/></span>
                </div>
                <br/>
            </div>
            <br/>

            <!-- last section of the form -->
            <div class="upload-section">
                <!-- blurb field -->
                <div class="form-group">
                    <label for="blurb" class="input-heading"><strong>Blurb: *</strong></label>
                    <p>Add a short description of your story!</p>
                    <textarea class="form-control" rows = "3" id="blurb" name="blurb" autocomplete="off">{{ old('blurb') }}</textarea>
                    <br>
                    <input type="file" name="cover_image">
                    <span class="text-danger">{{ $errors->first('cover_image') }}<br/></span>

                    <!-- error messages -->
                    <span class="text-danger">{{ $errors->first('blurb') }}<br/></span>
                </div>

                <!-- published field -->
                <div class="form-group">
                    <p class="input-heading"><strong>Nearly finished! *</strong></p>
                    <p>Do you want to save your story as a draft or publish it onto our site?</p>
                    <br/>

                    <input type="radio" id="draft" name="published" value="0">
                    <label for="draft">Save as a Draft</label><br>
                    <input type="radio" id="upload" name="published" value="1">
                    <label for="upload">Upload</label>
                    <br/>
                    <!-- ensures error message for radio buttons appears beneath them -->
                    <label for="published" class="error"></label>

                </div>
            </div>
            <br/>

             <div class="main-button">
             <!-- form submit button - activates error messages -->
                <button type="submit" class="button complete-button">Complete</button>
             </div>

        </form>
        <br/>
    </div>

@endsection

@section ('validation')
    <script src="{{ asset('js/check_create_update_input.js') }}"></script>
@endsection
