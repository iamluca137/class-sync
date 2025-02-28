@extends('layouts.app')

@section('contents')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Color picker
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Basic</h3>
                    <div class="row g-3">
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-1" value="#066fd1" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-1",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-2" value="#45aaf2" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-2",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-3" value="#6574cd" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-3",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-4" value="#a55eea" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-4",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-5" value="#f66d9b" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-5",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-6" value="#fa4654" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-6",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-7" value="#fd9644" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-7",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-8" value="#f1c40f" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-8",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-9" value="#7bd235" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-9",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-10" value="#5eba00" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-10",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-11" value="#2bcbba" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-11",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input type="text" class="form-control d-block" id="colorpicker-12" value="#17a2b8" />
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        window.Coloris && (Coloris({
                                            el: "#colorpicker-12",
                                            selectInput: false,
                                            alpha: false,
                                            format: "hex",
                                            swatches: [
                                                "#066fd1",
                                                "#45aaf2",
                                                "#6574cd",
                                                "#a55eea",
                                                "#f66d9b",
                                                "#fa4654",
                                                "#fd9644",
                                                "#f1c40f",
                                                "#7bd235",
                                                "#5eba00",
                                                "#2bcbba",
                                                "#17a2b8",
                                            ],
                                        }))
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/dist/libs/melloware/coloris/dist/umd/coloris.min.js') }}" defer></script>
@endsection
