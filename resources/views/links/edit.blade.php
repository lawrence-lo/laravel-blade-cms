@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Link</h2>

    <form method="post" action="/console/links/edit/{{$link->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="name" name="name" id="name" value="{{old('name', $link->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url', $link->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Link</button>

    </form>

    <a href="/console/links/list">Back to Link List</a>

</section>

@endsection
