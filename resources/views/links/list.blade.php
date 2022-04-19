@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Links</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Name</th>
            <th>URL</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($links as $link)
            <tr>
                <td>
                    @if ($link->icon)
                        <img src="{{asset('storage/'.$link->icon)}}" width="100">
                    @endif
                </td>
                <td>{{$link->name}}</td>
                <td>
                    <a href="{{$link->url}}">
                        {{$link->url}}
                    </a>
                </td>
                <td>{{$link->created_at->format('M j, Y')}}</td>
                <td><a href="/console/links/icon/{{$link->id}}">Icon</a></td>
                <td><a href="/console/links/edit/{{$link->id}}">Edit</a></td>
                <td><a href="/console/links/delete/{{$link->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/links/add" class="w3-button w3-green">New Link</a>

</section>

@endsection
