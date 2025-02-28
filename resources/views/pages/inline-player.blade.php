@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Inline Player
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Youtube Player</h3>
                            <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    window.Plyr && (new Plyr('#player-youtube'));
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Vimeo Player</h3>
                            <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    window.Plyr && (new Plyr('#player-charlotte'));
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/libs/plyr/dist/plyr.min.js') }}'" defer></script>
@endsection
