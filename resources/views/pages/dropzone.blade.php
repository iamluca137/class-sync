@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Dropzone
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Basic Usage</h3>
                            <form class="dropzone" id="dropzone-default" action="./" autocomplete="off" novalidate>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                            </form>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    new Dropzone("#dropzone-default")
                                })
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Multiple File Upload</h3>
                            <form class="dropzone" id="dropzone-multiple" action="./" autocomplete="off" novalidate>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    new Dropzone("#dropzone-multiple")
                                })
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Custom Dropzone</h3>
                            <form class="dropzone" id="dropzone-custom" action="./" autocomplete="off" novalidate>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                                <div class="dz-message">
                                    <h3 class="dropzone-msg-title">Your text here</h3>
                                    <span class="dropzone-msg-desc">Your custom description here</span>
                                </div>
                            </form>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    new Dropzone("#dropzone-custom")
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/dropzone/dist/dropzone-min.js') }}" defer></script>
@endsection
