@extends('base')

@section('additionalHeadInfo')
    <title>Edit | Digital ink.</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/upload.css') }}">
@endsection

@section('content')

    <div class="main-body">
        <!-- page heading -->
            <h1 class="form-heading">Edit your story!</h1>
        <br/>

        <!-- form for editing a story -->
        <form id="story_upload" method="post" action="{{ route('stories.update', $story->id) }}">
            @method('PATCH')
            @csrf

            <!-- first section of the form -->
            <div class="upload-section">
                <!-- author ID field -->
                <div class="form-group">
                    <label for="author_id" class = "input-heading"><strong>Author Reference Number: *</strong></label>
                    <input type="text" class="form-control" name="author_id" autocomplete="off" disabled value="{{ $story->author_id }}">

                    <!-- error messages -->
                    <span class="text-danger">{{ $errors->first('author_id') }}<br/></span>
                </div>

                <!-- title field -->
                <div class="form-group">
                    <label for="title" class = "input-heading"><strong>Title: *</strong></label>
                    <p>Every story needs a good title!</p>
                    <input type="text" class="form-control" name="title" autocomplete="off" value="{{ $story->title }}">

                    <!-- error messages -->
                    <span class="text-danger">{{ $errors->first('title') }}<br/></span>
                </div>

                <!-- genre field -->

                <div class="form-group">
                    <label for="genre" class = "input-heading"><strong>Genre: *</strong></label>
                    <p>What type of story are you creating?</p>
                    <select class="form-control" name="genre">
                        <option value="Action and Adventure" @if(old('genre',$story->genre)=="Action and Adventure") selected @endif>
                            Action and Adventure
                        </option>
                        <option value="Children's" @if(old('genre',$story->genre)=="Children's") selected @endif>
                            Children's
                        </option>
                        <option value="Historical" @if(old('genre',$story->genre)=="Historical") selected @endif>
                            Historical
                        </option>
                        <option value="Horror" @if(old('genre',$story->genre)=="Horror") selected @endif>
                            Horror
                        </option>
                        <option value="Romance" @if(old('genre',$story->genre)=="Romance") selected @endif>
                            Romance
                        </option>
                        <option value="Science Fiction" @if(old('genre',$story->genre)=="Science Fiction") selected @endif>
                            Science Fiction
                        </option>
                    </select>

                    <br/>
                </div>
            </div>
            <br/>

             <!-- second section of the form -->
             <div class="upload-section">
                    <!-- content field -->
                    <div class="form-group">
                        <label for="content" class="input-heading"><strong>Your Story: *</strong></label>
                        <p>Add the content of your story below.</p>
                        <textarea class="form-control" rows = "10" id="content" name="content" autocomplete="off">{{ old('content', $story->content) }}</textarea>

                        <!-- error messages -->
                        <span class="text-danger">{{ $errors->first('content') }}<br/></span>
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
                     <textarea class="form-control" rows = "3" id="blurb" name="blurb" autocomplete="off">{{ old('content', $story->blurb) }}</textarea>

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

                     <!-- error messages -->
                     <span class="text-danger">{{ $errors->first('published') }}<br/></span>
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
