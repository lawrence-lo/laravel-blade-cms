@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Certifications</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Type</th>
            <th>Subject</th>
            <th>School</th>
            <th>Date</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($certifications as $certification)
            <tr>
                <td>
                </td>
                <td>{{$certification->type}}</td>
                <td>{{$certification->subject}}</td>
                <td>{{$certification->school}}</td>
                <td>{{$certification->date}}</td>
                <td></td>
                <td><a href="/console/certifications/edit/{{$certification->id}}">Edit</a></td>
                <td><a href="/console/certifications/delete/{{$certification->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/certifications/add" class="w3-button w3-green">New Certification</a>

</section>

@endsection
