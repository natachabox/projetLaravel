@extends("layout-test")

        @section("content")
            <h1>Notre equipe</h1>
            <a href="{{ route("url_welcome") }}">Lien vers la page Welcome</a>
            <a href="{{ route("route_test_tableau") }}">Lien vers la page Test Tableau</a>
            <a href="{{ route("url_vers_cgv") }}">Lien vers la page CGV</a>

            {{-- dump($team) --}}

            @foreach ($team as $teamMember)
                <ul>
                    <li>Titre : {{ $teamMember['firstname'] }}
                        @if ($teamMember['chef'] == true )
                            - Chef !
                        @endif</li>
                    <li>Description : {{ $teamMember['lastname'] }}</li>
                    <li>Prix : {{ $teamMember['description'] }}</li>
                    <li>Date :  {{ $teamMember['statut'] }}</li>
                </ul>
            @endforeach

            <p>Nbre membre de l'équipe {{ count($team) }}</p>

            <img src="{{ URL::asset('imagetest/index.jpeg') }}" alt="chef">

            {{-- HTML::image('imagetest/index.jpeg') --}}

            <img src="{{asset('imagetest/index.jpeg') }}">

        @endsection




