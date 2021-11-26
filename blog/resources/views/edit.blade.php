<form action="/users/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="description" class="edit_description_label">Description</label>

        <div class="edit_description_div">
            <input id="description"
                   type="text"
                   class="form-control @error('description') is-invalid @enderror"
                   name="description"
                   value="{{ old('description') ?? $user->profile->description ?? '' }}"
                   autocomplete="description" autofocus>

            @error('description')
            <div class="invalid-feedback-div">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
            </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="url" class="edit_title_label">URL</label>

        <div class="edit_url_div">
            <input id="url"
                   type="text"
                   class="form-control @error('url') is-invalid @enderror"
                   name="url"
                   value="{{ $user->profile->url ?? '' }}"
                   autocomplete="url" autofocus>

            @error('url')
            <div class="invalid-feedback-div">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
            </div>
            @enderror
        </div>
    </div>

    <div class="create_post_image_div">
        <label for="image" class="create_image_label">Profile Image</label>
        <input type="file" class="form-control-file" id="image" name="image">

        @error('image')
        <div class="invalid-feedback-div">
            <strong>{{ $message }}</strong>
        </div>
        @enderror

        <div class="create_post_btn_div">
            <button class="create_post_btn">Save Profile</button>
        </div>
    </div>

</form>
