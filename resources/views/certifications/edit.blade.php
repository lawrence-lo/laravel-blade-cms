@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Certification</h2>

    <form method="post" action="/console/certifications/edit/{{$certification->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" value="{{old('type', $certification->type)}}" required>
            
            @if ($errors->first('type'))
                <br>
                <span class="w3-text-red">{{$errors->first('type')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" value="{{old('subject', $certification->subject)}}">

            @if ($errors->first('subject'))
                <br>
                <span class="w3-text-red">{{$errors->first('subject')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="school">School:</label>
            <input type="text" name="school" id="school" value="{{old('school', $certification->school)}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" value="{{old('date', $certification->date)}}" required>

            @if ($errors->first('date'))
                <br>
                <span class="w3-text-red">{{$errors->first('date')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Certification</button>

    </form>

    <a href="/console/certifications/list">Back to Certification List</a>

</section>

@endsection
