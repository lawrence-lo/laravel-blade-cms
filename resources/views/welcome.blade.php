@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    <ul>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    @foreach ($projects as $project)

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3>{{$project->title}}</h3>

            </div>
            
            @if ($project->image)
                <div class="w3-container w3-margin-top">
                    <img src="{{asset('storage/'.$project->image)}}" width="200">
                </div>
            @endif

            <div class="w3-container w3-padding">

                @if ($project->url)
                    View Project: <a href="{{$project->url}}">{{$project->url}}</a>
                @endif

                <p>
                    Posted: {{$project->created_at->format('M j, Y')}}
                    <br>
                    Type: {{$project->type->title}}
                </p>

                <a href="/project/{{$project->slug}}" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Certifications</h2>

    @foreach ($certifications as $certification)

        <div class="w3-card w3-margin">
            
            <div class="w3-container w3-padding">

                @if ($certification->type)
                    <p>
                        Type: {{$certification->type}}
                    </p>
                @endif

                @if ($certification->subject)
                    <p>
                        Subject: {{$certification->subject}}
                    </p>
                @endif

                @if ($certification->school)
                    <p>
                        School: {{$certification->school}}
                    </p>
                @endif

                @if ($certification->date)
                    <p>
                        Date: {{date('M j, Y', strtotime($certification->date))}}
                    </p>
                @endif

                <p>
                    Posted: {{$certification->created_at->format('M j, Y')}}
                </p>

            </div>
        
        </div>

    @endforeach

</section>

<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

    @foreach ($links as $link)
        
        <a class="w3-padding" href="{{$link->url}}" target="_blank">
            @if ($link->icon)
                <img src="{{asset('storage/'.$link->icon)}}" width="100" alt="An icon of {{$link->name}}">
            @else
                {{$link->name}}
            @endif
        </a>
        
    @endforeach

</section>

@endsection
