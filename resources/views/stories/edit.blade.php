@extends('base')

@section('additionalHeadInfo')
    <title>Stories | Digital ink.</title>
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Create a Story!</h1>
            <div>
                <form id="story_upload" method="post" action="{{ route('stories.update', $story->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="author_id">Author ID:</label>
                        <input type="text" class="form-control" name="author_id" autocomplete="off" value="{{ $story->author_id }}">
                    </div>
                    <span class="text-danger">{{ $errors->first('author_id') }}</span>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" autocomplete="off" value="{{ $story->title }}">

                    </div>

                    <div class="form-group">
                        <label for="genre">Genre:</label>
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
                    </div>

                    <div class="form-group">
                        <label for="blurb">Blurb:</label>
                        <input type="textarea" class="form-control" name="blurb" autocomplete="off" value="{{ $story->blurb }}">
                    </div>

                    <div class="form-group">
                        <label for="content">Content:</label>
                        <input type="textarea" class="form-control" name="content" autocomplete="off" value="{{ $story->content }}">
                    </div>

                    <div class="form-group">
                        <input type="radio" id="draft" name="published" value="0">
                        <label for="draft">Save as a Draft</label><br>
                        <input type="radio" id="upload" name="published" value="1">
                        <label for="upload">Upload</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Complete</button>
                </form>
            </div>
        </div>
    </div>

@endsection
