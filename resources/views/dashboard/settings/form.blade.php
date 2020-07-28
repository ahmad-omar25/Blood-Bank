@csrf
<style>
    .invalid-feedback {
        color: red;
    }
</style>

<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "phone" @endphp
                <label for="{{$input}}">{{__('dashboard.phone')}}</label>
                <input type="number" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "email" @endphp
                <label for="{{$input}}">{{__('dashboard.email')}}</label>
                <input name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "facebook_url" @endphp
                <label for="{{$input}}">{{__('dashboard.facebook_url')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "twitter_url" @endphp
                <label for="{{$input}}">{{__('dashboard.twitter_url')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "youtube_url" @endphp
                <label for="{{$input}}">{{__('dashboard.youtube_url')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "whatsapp" @endphp
                <label for="{{$input}}">{{__('dashboard.whatsapp')}}</label>
                <input type="number" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "instagram_url" @endphp
                <label for="{{$input}}">{{__('dashboard.instagram_url')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                @php $input = "google_url" @endphp
                <label for="{{$input}}">{{__('dashboard.google_url')}}</label>
                <input type="text" name="{{$input}}" value="{{isset($row) ? $row->{$input} : ""}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}">
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                @php $input = "about_app" @endphp
                <label for="{{$input}}">{{__('dashboard.about_app')}}</label>
                <textarea name="{{$input}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}"  rows="5">{{isset($row) ? $row->{$input} : ""}}</textarea>
                @error($input)
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
                @enderror
            </div>
        </div>

    </div>
</div>
