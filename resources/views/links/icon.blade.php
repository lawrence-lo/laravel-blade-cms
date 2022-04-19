@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Link Icon</h2>

    <div class="w3-margin-bottom">
        @if($link->icon)
            <img src="{{asset('storage/'.$link->icon)}}" width="100">
        @endif
    </div>

    <form method="post" action="/console/links/icon/{{$link->id}}" novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf

        <div class="w3-margin-bottom">
            <label for="icon">Icon:</label>
            <input type="file" name="icon" id="icon" value="{{old('icon')}}" required>
            
            @if ($errors->first('icon'))
                <br>
                <span class="w3-text-red">{{$errors->first('icon')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Icon</button>

    </form>

    <a href="/console/links/list">Back to Link List</a>

</section>

@endsection
