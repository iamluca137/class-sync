@extends('layouts.app')

@section('contents')
    <!-- Steps -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Steps
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Steps horizontal</h3>
                            <ul class="steps steps-green my-4">
                                <li class="step-item">1</li>
                                <li class="step-item active">2</li>
                                <li class="step-item">3</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul class="steps steps-green steps-counter my-4">
                                <li class="step-item"></li>
                                <li class="step-item active"></li>
                                <li class="step-item"></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul class="steps steps-green steps-counter my-4">
                                <li class="step-item">Cart</li>
                                <li class="step-item active">Billing Information</li>
                                <li class="step-item">Confirmation</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ol class="breadcrumb breadcrumb-arrows">
                                <li class="breadcrumb-item"><a href="#">Step one</a></li>
                                <li class="breadcrumb-item active"><a href="#">Step two</a></li>
                                <li class="breadcrumb-item disabled"><a href="#">Step three</a></li>
                                <li class="breadcrumb-item disabled"><a href="#">Step four</a></li>
                            </ol>
                        </div>
                        <div class="card-body">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">1. Step one</a></li>
                                <li class="breadcrumb-item"><a href="#">2. Step two</a></li>
                                <li class="breadcrumb-item active"><a href="#">3. Step three</a></li>
                                <li class="breadcrumb-item disabled"><a href="#">4. Step four</a></li>
                                <li class="breadcrumb-item disabled"><a href="#">5. Step five</a></li>
                            </ol>
                        </div>
                        <div class="card-body">
                            <ol class="breadcrumb breadcrumb-muted">
                                <li class="breadcrumb-item"><a href="#">1. Step one</a></li>
                                <li class="breadcrumb-item"><a href="#">2. Step two</a></li>
                                <li class="breadcrumb-item active"><a href="#">3. Step three</a></li>
                                <li class="breadcrumb-item disabled"><a href="#">4. Step four</a></li>
                                <li class="breadcrumb-item disabled"><a href="#">5. Step five</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Steps vertical</h3>
                            <ul class="steps steps-vertical">
                                <li class="step-item">
                                    <div class="h4 m-0">Order received</div>
                                    <div class="text-secondary">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusamus culpa cum expedita ipsam laborum nam ratione
                                        reprehenderit sed sint tenetur!</div>
                                </li>
                                <li class="step-item">
                                    <div class="h4 m-0">Order received</div>
                                    <div class="text-secondary">Lorem ipsum dolor sit amet.</div>
                                </li>
                                <li class="step-item active">
                                    <div class="h4 m-0">Out for delivery</div>
                                    <div class="text-secondary">Lorem ipsum dolor sit amet.</div>
                                </li>
                                <li class="step-item">
                                    <div class="h4 m-0">Finalized</div>
                                    <div class="text-secondary">Lorem ipsum dolor sit amet.</div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul class="steps steps-counter steps-vertical">
                                <li class="step-item">Step one</li>
                                <li class="step-item">Step two</li>
                                <li class="step-item active">Step three</li>
                                <li class="step-item">Step four</li>
                                <li class="step-item">Step five</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
