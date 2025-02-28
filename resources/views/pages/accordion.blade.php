@extends('layouts.app')

@section('contents')
    <!-- Accordion -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Accordion
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordion-example">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <strong>This is the first item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use
                                    to style each element. These classes control the overall appearance, as well
                                    as the showing and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also worth noting
                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use
                                    to style each element. These classes control the overall appearance, as well
                                    as the showing and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also worth noting
                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use
                                    to style each element. These classes control the overall appearance, as well
                                    as the showing and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also worth noting
                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false">
                                    Accordion Item #4
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                                <div class="accordion-body pt-0">
                                    <strong>This is the fourth item's accordion body.</strong> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we use
                                    to style each element. These classes control the overall appearance, as well
                                    as the showing and hiding via CSS transitions. You can modify any of this
                                    with custom CSS or overriding our default variables. It's also worth noting
                                    that just about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alerts -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Alerts
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
                            <h2 class="card-title">Basic alerts</h2>
                            <p class="text-secondary">Wrap any text and an optional dismiss button in
                                <code>.alert</code> and one of the four contextual classes (e.g.,
                                <code>.alert-success</code>) for basic alert messages.
                            </p>
                            <div class="alert alert-success" role="alert">
                                Wow! Everything worked!
                            </div>
                            <div class="alert alert-warning" role="alert">
                                Uh oh, something went wrong
                            </div>
                            <div class="alert alert-danger" role="alert">
                                I'm so sorry…
                            </div>
                            <div class="alert alert-info" role="alert">
                                Did you know?
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Alerts with icon</h2>
                            <p class="text-secondary">Build on any alert by adding an optional icon.</p>
                            <div class="alert alert-success" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon alert-icon icon-2">
                                            <path d="M5 12l5 5l10 -10" />
                                        </svg>
                                    </div>
                                    <div>
                                        Wow! Everything worked!
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M12 9v4" />
                                            <path
                                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        Uh oh, something went wrong
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 8v4" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        I'm so sorry…
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 9h.01" />
                                            <path d="M11 12h1v4h1" />
                                        </svg>
                                    </div>
                                    <div>
                                        Did you know?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Dismissible alerts</h2>
                            <p class="text-secondary">Build on any alert by adding an optional
                                <code>.alert-dismissible</code> and close button.
                            </p>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M5 12l5 5l10 -10" />
                                        </svg>
                                    </div>
                                    <div>
                                        Wow! Everything worked!
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M12 9v4" />
                                            <path
                                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        Uh oh, something went wrong
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 8v4" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        I'm so sorry…
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 9h.01" />
                                            <path d="M11 12h1v4h1" />
                                        </svg>
                                    </div>
                                    <div>
                                        Did you know?
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Alert with a description</h2>
                            <p class="text-secondary">Add a description to the alert to provide additional
                                information.</p>
                            <div class="alert alert-success" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M5 12l5 5l10 -10" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="alert-title">This is a custom alert box!</h4>
                                        <div class="text-secondary">Your account has been saved!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M12 9v4" />
                                            <path
                                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="alert-title">This is a custom alert box!</h4>
                                        <div class="text-secondary">Sorry! There was a problem with your
                                            request.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 8v4" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="alert-title">This is a custom alert box!</h4>
                                        <div class="text-secondary">Something went wrong. Please try again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 9h.01" />
                                            <path d="M11 12h1v4h1" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="alert-title">This is a custom alert box!</h4>
                                        <div class="text-secondary">Here is something that you might like to
                                            know.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Important alerts</h2>
                            <div class="alert alert-important alert-success alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M5 12l5 5l10 -10" />
                                        </svg>
                                    </div>
                                    <div>
                                        Wow! Everything worked!
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            <div class="alert alert-important alert-warning alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M12 9v4" />
                                            <path
                                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        Uh oh, something went wrong
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 8v4" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </div>
                                    <div>
                                        I'm so sorry…
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            <div class="alert alert-important alert-info alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/info-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon alert-icon icon-2">
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 9h.01" />
                                            <path d="M11 12h1v4h1" />
                                        </svg>
                                    </div>
                                    <div>
                                        Did you know?
                                    </div>
                                </div>
                                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Badges -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Badges
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h1>Example heading <span class="badge">New</span></h1>
                            <h2>Example heading <span class="badge">New</span></h2>
                            <h3>Example heading <span class="badge">New</span></h3>
                            <h4>Example heading <span class="badge">New</span></h4>
                            <h5>Example heading <span class="badge">New</span></h5>
                            <h6>Example heading <span class="badge">New</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="badges-list">
                                        <span class="badge bg-blue text-blue-fg">Blue</span>
                                        <span class="badge bg-azure text-azure-fg">Azure</span>
                                        <span class="badge bg-indigo text-indigo-fg">Indigo</span>
                                        <span class="badge bg-purple text-purple-fg">Purple</span>
                                        <span class="badge bg-pink text-pink-fg">Pink</span>
                                        <span class="badge bg-red text-red-fg">Red</span>
                                        <span class="badge bg-orange text-orange-fg">Orange</span>
                                        <span class="badge bg-yellow text-yellow-fg">Yellow</span>
                                        <span class="badge bg-lime text-lime-fg">Lime</span>
                                        <span class="badge bg-green text-green-fg">Green</span>
                                        <span class="badge bg-teal text-teal-fg">Teal</span>
                                        <span class="badge bg-cyan text-cyan-fg">Cyan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="badges-list">
                                        <span class="badge bg-blue-lt">Blue</span>
                                        <span class="badge bg-azure-lt">Azure</span>
                                        <span class="badge bg-indigo-lt">Indigo</span>
                                        <span class="badge bg-purple-lt">Purple</span>
                                        <span class="badge bg-pink-lt">Pink</span>
                                        <span class="badge bg-red-lt">Red</span>
                                        <span class="badge bg-orange-lt">Orange</span>
                                        <span class="badge bg-yellow-lt">Yellow</span>
                                        <span class="badge bg-lime-lt">Lime</span>
                                        <span class="badge bg-green-lt">Green</span>
                                        <span class="badge bg-teal-lt">Teal</span>
                                        <span class="badge bg-cyan-lt">Cyan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="badges-list">
                                        <span class="badge badge-outline text-blue">Blue</span>
                                        <span class="badge badge-outline text-azure">Azure</span>
                                        <span class="badge badge-outline text-indigo">Indigo</span>
                                        <span class="badge badge-outline text-purple">Purple</span>
                                        <span class="badge badge-outline text-pink">Pink</span>
                                        <span class="badge badge-outline text-red">Red</span>
                                        <span class="badge badge-outline text-orange">Orange</span>
                                        <span class="badge badge-outline text-yellow">Yellow</span>
                                        <span class="badge badge-outline text-lime">Lime</span>
                                        <span class="badge badge-outline text-green">Green</span>
                                        <span class="badge badge-outline text-teal">Teal</span>
                                        <span class="badge badge-outline text-cyan">Cyan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dropdown-menu dropdown-menu-demo dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">
                            Action
                            <span class="badge bg-primary text-primary-fg ms-auto">12</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            Another action
                            <span class="badge bg-green ms-auto"></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn">Blue badge <span
                                                class="badge bg-blue text-blue-fg ms-2">1</span></button>
                                        <button class="btn">Azure badge <span
                                                class="badge bg-azure text-azure-fg ms-2">2</span></button>
                                        <button class="btn">Indigo badge <span
                                                class="badge bg-indigo text-indigo-fg ms-2">3</span></button>
                                        <button class="btn">Purple badge <span
                                                class="badge bg-purple text-purple-fg ms-2">4</span></button>
                                        <button class="btn">Pink badge <span
                                                class="badge bg-pink text-pink-fg ms-2">5</span></button>
                                        <button class="btn">Red badge <span
                                                class="badge bg-red text-red-fg ms-2">6</span></button>
                                        <button class="btn">Orange badge <span
                                                class="badge bg-orange text-orange-fg ms-2">7</span></button>
                                        <button class="btn">Yellow badge <span
                                                class="badge bg-yellow text-yellow-fg ms-2">8</span></button>
                                        <button class="btn">Lime badge <span
                                                class="badge bg-lime text-lime-fg ms-2">9</span></button>
                                        <button class="btn">Green badge <span
                                                class="badge bg-green text-green-fg ms-2">10</span></button>
                                        <button class="btn">Teal badge <span
                                                class="badge bg-teal text-teal-fg ms-2">11</span></button>
                                        <button class="btn">Cyan badge <span
                                                class="badge bg-cyan text-cyan-fg ms-2">12</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn position-relative">Blue badge <span
                                                class="badge bg-blue text-blue-fg badge-notification badge-pill">1</span></button>
                                        <button class="btn position-relative">Azure badge <span
                                                class="badge bg-azure text-azure-fg badge-notification badge-pill">2</span></button>
                                        <button class="btn position-relative">Indigo badge <span
                                                class="badge bg-indigo text-indigo-fg badge-notification badge-pill">3</span></button>
                                        <button class="btn position-relative">Purple badge <span
                                                class="badge bg-purple text-purple-fg badge-notification badge-pill">4</span></button>
                                        <button class="btn position-relative">Pink badge <span
                                                class="badge bg-pink text-pink-fg badge-notification badge-pill">5</span></button>
                                        <button class="btn position-relative">Red badge <span
                                                class="badge bg-red text-red-fg badge-notification badge-pill">6</span></button>
                                        <button class="btn position-relative">Orange badge <span
                                                class="badge bg-orange text-orange-fg badge-notification badge-pill">7</span></button>
                                        <button class="btn position-relative">Yellow badge <span
                                                class="badge bg-yellow text-yellow-fg badge-notification badge-pill">8</span></button>
                                        <button class="btn position-relative">Lime badge <span
                                                class="badge bg-lime text-lime-fg badge-notification badge-pill">9</span></button>
                                        <button class="btn position-relative">Green badge <span
                                                class="badge bg-green text-green-fg badge-notification badge-pill">10</span></button>
                                        <button class="btn position-relative">Teal badge <span
                                                class="badge bg-teal text-teal-fg badge-notification badge-pill">11</span></button>
                                        <button class="btn position-relative">Cyan badge <span
                                                class="badge bg-cyan text-cyan-fg badge-notification badge-pill">12</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button class="btn position-relative">Blue badge <span
                                                class="badge bg-blue badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Azure badge <span
                                                class="badge bg-azure badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Indigo badge <span
                                                class="badge bg-indigo badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Purple badge <span
                                                class="badge bg-purple badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Pink badge <span
                                                class="badge bg-pink badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Red badge <span
                                                class="badge bg-red badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Orange badge <span
                                                class="badge bg-orange badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Yellow badge <span
                                                class="badge bg-yellow badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Lime badge <span
                                                class="badge bg-lime badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Green badge <span
                                                class="badge bg-green badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Teal badge <span
                                                class="badge bg-teal badge-notification badge-blink"></span></button>
                                        <button class="btn position-relative">Cyan badge <span
                                                class="badge bg-cyan badge-notification badge-blink"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Buttons -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Buttons
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Standard Buttons</h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary active w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary active w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success active w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning active w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger active w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info active w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark active w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light active w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary disabled w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary disabled w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success disabled w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning disabled w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger disabled w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info disabled w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark disabled w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light disabled w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Outline Buttons</h3>
                        </div>
                        <div class="card-body">
                            <p>Use <code>.btn-outline-*</code> class for outline buttons.
                            </p>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-primary w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-secondary w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-success w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-warning w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-danger w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-info w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-dark w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-outline-light w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-primary active w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-secondary active w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-success active w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-warning active w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-danger active w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-info active w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-dark active w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-outline-light active w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-primary disabled w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-secondary disabled w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-success disabled w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-warning disabled w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-danger disabled w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-info disabled w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-outline-dark disabled w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-outline-light disabled w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ghost Buttons</h3>
                        </div>
                        <div class="card-body">
                            <p>Use <code>.btn-ghost-*</code> class for ghost buttons.
                            </p>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-primary w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-secondary w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-success w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-warning w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-danger w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-info w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-dark w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-light w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-primary active w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-secondary active w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-success active w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-warning active w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-danger active w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-info active w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-dark active w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-light active w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-primary disabled w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-secondary disabled w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-success disabled w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-warning disabled w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-danger disabled w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-info disabled w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-dark disabled w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-ghost-light disabled w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Square Buttons</h3>
                        </div>
                        <div class="card-body">
                            <p>Use <code>.btn-square</code> class for square buttons.
                            </p>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary btn-square w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary btn-square w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success btn-square w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning btn-square w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger btn-square w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info btn-square w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark btn-square w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light btn-square w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary active btn-square w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary active btn-square w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success active btn-square w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning active btn-square w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger active btn-square w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info active btn-square w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark active btn-square w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light active btn-square w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary disabled btn-square w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary disabled btn-square w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success disabled btn-square w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning disabled btn-square w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger disabled btn-square w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info disabled btn-square w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark disabled btn-square w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light disabled btn-square w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pill Buttons</h3>
                        </div>
                        <div class="card-body">
                            <p>Use <code>.btn-pill</code> class for pill buttons.
                            </p>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Normal</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary btn-pill w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary btn-pill w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success btn-pill w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning btn-pill w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger btn-pill w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info btn-pill w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark btn-pill w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light btn-pill w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Active state</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary active btn-pill w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary active btn-pill w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success active btn-pill w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning active btn-pill w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger active btn-pill w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info active btn-pill w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark active btn-pill w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light active btn-pill w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-12 col-xl-2 font-weight-semibold">Disabled</div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-primary disabled btn-pill w-100">
                                        Primary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-secondary disabled btn-pill w-100">
                                        Secondary
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-success disabled btn-pill w-100">
                                        Success
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-warning disabled btn-pill w-100">
                                        Warning
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-danger disabled btn-pill w-100">
                                        Danger
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-info disabled btn-pill w-100">
                                        Info
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                                    <a href="#" class="btn btn-6 btn-dark disabled btn-pill w-100">
                                        Dark
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl bg-dark py-3">
                                    <a href="#" class="btn btn-6 btn-light disabled btn-pill w-100">
                                        Light
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Extra colors</h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-blue w-100">
                                        Blue
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-azure w-100">
                                        Azure
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-indigo w-100">
                                        Indigo
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-purple w-100">
                                        Purple
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-pink w-100">
                                        Pink
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-red w-100">
                                        Red
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-orange w-100">
                                        Orange
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-yellow w-100">
                                        Yellow
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-lime w-100">
                                        Lime
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-green w-100">
                                        Green
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-teal w-100">
                                        Teal
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-cyan w-100">
                                        Cyan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Icon buttons</h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-x w-100 btn-icon" aria-label="X">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-x -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-facebook w-100 btn-icon"
                                        aria-label="Facebook">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                            <path
                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-twitter w-100 btn-icon"
                                        aria-label="Twitter">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-google w-100 btn-icon" aria-label="Google">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-google -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M20.945 11a9 9 0 1 1 -3.284 -5.997l-2.655 2.392a5.5 5.5 0 1 0 2.119 6.605h-4.125v-3h7.945z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-youtube w-100 btn-icon"
                                        aria-label="Youtube">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-youtube -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                            <path d="M10 9l5 3l-5 3z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-vimeo w-100 btn-icon" aria-label="Vimeo">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-vimeo -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M3 8.5l1 1s1.5 -1.102 2 -.5c.509 .609 1.863 7.65 2.5 9c.556 1.184 1.978 2.89 4 1.5c2 -1.5 7.5 -5.5 8.5 -11.5c.444 -2.661 -1 -4 -2.5 -4c-2 0 -4.047 1.202 -4.5 4c2.05 -1.254 2.551 1 1.5 3c-1.052 2 -2 3 -2.5 3c-.49 0 -.924 -1.165 -1.5 -3.5c-.59 -2.42 -.5 -6.5 -3 -6.5s-5.5 4.5 -5.5 4.5z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-dribbble w-100 btn-icon"
                                        aria-label="Dribbble">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-dribbble -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M9 3.6c5 6 7 10.5 7.5 16.2" />
                                            <path d="M6.4 19c3.5 -3.5 6 -6.5 14.5 -6.4" />
                                            <path d="M3.1 10.75c5 0 9.814 -.38 15.314 -5" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-github w-100 btn-icon" aria-label="Github">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-instagram w-100 btn-icon"
                                        aria-label="Instagram">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-instagram -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-pinterest w-100 btn-icon"
                                        aria-label="Pinterest">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-pinterest -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M8 20l4 -9" />
                                            <path
                                                d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-vk w-100 btn-icon" aria-label="VK">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-vk -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M14 19h-4a8 8 0 0 1 -8 -8v-5h4v5a4 4 0 0 0 4 4h0v-9h4v4.5l.03 0a4.531 4.531 0 0 0 3.97 -4.496h4l-.342 1.711a6.858 6.858 0 0 1 -3.658 4.789h0a5.34 5.34 0 0 1 3.566 4.111l.434 2.389h0h-4a4.531 4.531 0 0 0 -3.97 -4.496v4.5z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-rss w-100 btn-icon" aria-label="RSS">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/rss -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M4 4a16 16 0 0 1 16 16" />
                                            <path d="M4 11a9 9 0 0 1 9 9" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-flickr w-100 btn-icon" aria-label="Flickr">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-flickr -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M17 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-bitbucket w-100 btn-icon"
                                        aria-label="Bitbucket">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-bitbucket -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" />
                                            <path d="M14 15h-4l-1 -6h6z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-tabler w-100 btn-icon" aria-label="Tabler">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-tabler -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M8 9l3 3l-3 3" />
                                            <path d="M13 15h3" />
                                            <path
                                                d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Social colors</h3>
                        </div>
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-x w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-x -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                        </svg>
                                        X
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-facebook w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg>
                                        Facebook
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-twitter w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                                        </svg>
                                        Twitter
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-google w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-google -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M20.945 11a9 9 0 1 1 -3.284 -5.997l-2.655 2.392a5.5 5.5 0 1 0 2.119 6.605h-4.125v-3h7.945z" />
                                        </svg>
                                        Google
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-youtube w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-youtube -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                            <path d="M10 9l5 3l-5 3z" />
                                        </svg>
                                        Youtube
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-vimeo w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-vimeo -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M3 8.5l1 1s1.5 -1.102 2 -.5c.509 .609 1.863 7.65 2.5 9c.556 1.184 1.978 2.89 4 1.5c2 -1.5 7.5 -5.5 8.5 -11.5c.444 -2.661 -1 -4 -2.5 -4c-2 0 -4.047 1.202 -4.5 4c2.05 -1.254 2.551 1 1.5 3c-1.052 2 -2 3 -2.5 3c-.49 0 -.924 -1.165 -1.5 -3.5c-.59 -2.42 -.5 -6.5 -3 -6.5s-5.5 4.5 -5.5 4.5z" />
                                        </svg>
                                        Vimeo
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-dribbble w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-dribbble -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M9 3.6c5 6 7 10.5 7.5 16.2" />
                                            <path d="M6.4 19c3.5 -3.5 6 -6.5 14.5 -6.4" />
                                            <path d="M3.1 10.75c5 0 9.814 -.38 15.314 -5" />
                                        </svg>
                                        Dribbble
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-github w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-github -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                        </svg>
                                        Github
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-instagram w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-instagram -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M16.5 7.5v.01" />
                                        </svg>
                                        Instagram
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-pinterest w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-pinterest -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M8 20l4 -9" />
                                            <path
                                                d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        </svg>
                                        Pinterest
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-vk w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-vk -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M14 19h-4a8 8 0 0 1 -8 -8v-5h4v5a4 4 0 0 0 4 4h0v-9h4v4.5l.03 0a4.531 4.531 0 0 0 3.97 -4.496h4l-.342 1.711a6.858 6.858 0 0 1 -3.658 4.789h0a5.34 5.34 0 0 1 3.566 4.111l.434 2.389h0h-4a4.531 4.531 0 0 0 -3.97 -4.496v4.5z" />
                                        </svg>
                                        VK
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-rss w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/rss -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M4 4a16 16 0 0 1 16 16" />
                                            <path d="M4 11a9 9 0 0 1 9 9" />
                                        </svg>
                                        RSS
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-flickr w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-flickr -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                            <path d="M17 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        </svg>
                                        Flickr
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-bitbucket w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-bitbucket -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path
                                                d="M3.648 4a.64 .64 0 0 0 -.64 .744l3.14 14.528c.07 .417 .43 .724 .852 .728h10a.644 .644 0 0 0 .642 -.539l3.35 -14.71a.641 .641 0 0 0 -.64 -.744l-16.704 -.007z" />
                                            <path d="M14 15h-4l-1 -6h6z" />
                                        </svg>
                                        Bitbucket
                                    </a>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <a href="#" class="btn btn-6 btn-tabler w-100">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/brand-tabler -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-2">
                                            <path d="M8 9l3 3l-3 3" />
                                            <path d="M13 15h3" />
                                            <path
                                                d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                                        </svg>
                                        Tabler
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Typography -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Typography
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card card-lg">
                <div class="card-body ">
                    <div class="row g-4">
                        <div class="col-12 markdown">
                            <h1>1/1 Text</h1>
                            <p>I'm not a witch. Now, look here, my good man. Oh! Come and see the violence
                                inherent in the system! Help, help, I'm being repressed! Well, I didn't vote for
                                you. You can't expect to wield supreme power just 'cause some watery tart threw
                                a sword at you! Bring her forward! He hasn't got shit all over him. He hasn't
                                got shit all over him. We shall say 'Ni' again to you, if you do not appease us.
                            </p>
                            <p>Well, we did do the nose. Why? Now, look here, my good man. Be quiet! Well, what
                                do you want?</p>
                        </div>
                        <div class="col-md-6 markdown">
                            <h2>1/2 Text</h2>
                            <p>What do you mean? We shall say 'Ni' again to you, if you do not appease us. I
                                have to push the pram a lot. No, no, no! Yes, yes. A bit. But she's got a wart.
                                What a strange person.</p>
                        </div>
                        <div class="col-md-6 markdown">
                            <h2>1/2 Text</h2>
                            <p>And this isn't my nose. This is a false one. We found them. Listen. Strange women
                                lying in ponds distributing swords is no basis for a system of government.
                                Supreme executive power derives from a mandate from the masses, not from some
                                farcical aquatic ceremony.</p>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>1/3 Text</h3>
                            <p>Knights of Ni, we are but simple travelers who seek the enchanter who lives
                                beyond these woods. Why? Well, what do you want? …Are you suggesting that
                                coconuts migrate?</p>
                        </div>
                        <div class="col-md-8 markdown">
                            <h3>2/3 Text</h3>
                            <p>Well, I got better. Knights of Ni, we are but simple travelers who seek the
                                enchanter who lives beyond these woods. Found them? In Mercia?! The coconut's
                                tropical! A newt? …Are you suggesting that coconuts migrate?</p>
                        </div>
                        <div class="col-md-8 markdown">
                            <p>I don't want to talk to you no more, you empty-headed animal food trough water! I
                                fart in your general direction! Your mother was a hamster and your father smelt
                                of elderberries! Now leave before I am forced to taunt you a second time! We
                                want a shrubbery!!</p>
                            <p>Well, how'd you become king, then? Found them? In Mercia?! The coconut's
                                tropical! Oh, ow! I am your king.</p>
                        </div>
                        <div class="col-md-3 markdown">
                            <h4>Small Text</h4>
                            <p>Well, Mercia's a temperate zone! You don't vote for kings. Now, look here, my
                                good man. </p>
                            <p class="text-secondary small lh-base">Who's that then? Well, we did do the nose.
                            </p>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Unordered list</h3>
                            <ul>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret
                                    <ul>
                                        <li>lorem ipsum doloret</li>
                                        <li>lorem ipsum doloret</li>
                                    </ul>
                                </li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                            </ul>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Ordered list</h3>
                            <ol>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                            </ol>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Unstyled list</h3>
                            <ul class="list-unstyled">
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                                <li>lorem ipsum doloret</li>
                            </ul>
                        </div>
                        <div class="col-12 markdown">
                            <h3>Blockquote</h3>
                            <blockquote class="blockquote">
                                <p>I don't want to talk to you no more, you empty-headed animal food trough
                                    water! I fart in your general direction! Your mother was a hamster and your
                                    father smelt of elderberries! Now leave before I am forced to taunt you a
                                    second time! The nose?</p>
                                <footer class="blockquote-footer">Julius Cesar</footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Text elements</h3>
                            <div>You can use the mark tag to <mark>highlight</mark> text.</div>
                            <div><s>This line of text is meant to be treated as deleted</s></div>
                            <div><u>This line of text will render as underlined.</u></div>
                            <div><small>This line of text is meant to be treated as fine print.</small></div>
                            <div>The following snippet of text is <strong>rendered as bold text.</strong></div>
                            <div>The following snippet of text is <em>rendered as italicized text.</em></div>
                            <div>The following snippet of text show useful keyboard shortcut: <kbd>⌘</kbd> +
                                <kbd>C</kbd> or <kbd>ctrl</kbd> + <kbd>C</kbd>.
                            </div>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Text color</h3>
                            <div class="text-primary">This is an example of primary text.</div>
                            <div class="text-secondary">This is an example of secondary text.</div>
                            <div class="text-body">This is an example of body text.</div>
                            <div class="text-success">This is an example of success text.</div>
                            <div class="text-info">This is an example of info text.</div>
                            <div class="text-warning">This is an example of warning text.</div>
                            <div class="text-danger">This is an example of danger text.</div>
                            <div class="text-pink">This is an example of pink text.</div>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Addresses</h3>
                            <address><strong>Twitter, Inc. <br> </strong>1355 Market Street, Suite 900 <br>
                                San Francisco, CA 94103 <br><abbr title="Phone">P: </abbr>(123) 456 7890
                            </address>
                            <address><strong>Full name <br></strong><a href="mailto:#">first.last@example.com</a>
                            </address>
                        </div>
                        <div class="col-md-4 markdown">
                            <h3>Typography</h3>
                            <div>
                                <h1>H1 Lorem ipsum dolor sit amet</h1>
                                <h2>H2 Lorem ipsum dolor sit amet</h2>
                                <h3>H3 Lorem ipsum dolor sit amet</h3>
                                <h4>H4 Lorem ipsum dolor sit amet</h4>
                                <h5>H5 Lorem ipsum dolor sit amet</h5>
                                <h6>H6 Lorem ipsum dolor sit amet</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toasts -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Toasts
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <div class="btn-list">
                        <a href="#" class="btn btn-2" data-bs-toggle="toast" data-bs-target="#toast-simple">
                            Simple toast
                        </a>
                        <a href="#" class="btn btn-2" data-bs-toggle="toast" data-bs-target="#toast-cookies">
                            Cookies toast
                        </a>
                    </div>
                </div>
            </div>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div class="toast " id="toast-simple" role="alert" aria-live="assertive" aria-atomic="true"
                    data-bs-autohide="false">
                    <div class="toast-header">
                        <span class="avatar avatar-xs me-2"
                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                        <strong class="me-auto">Mallory Hulme</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>
                <div class="toast " id="toast-cookies" role="alert" aria-live="assertive" aria-atomic="true"
                    data-bs-autohide="false">
                    <div class="toast-header">
                        <span class="avatar avatar-xs me-2"
                            style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                        <strong class="me-auto">Mallory Hulme</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        🍪&nbsp;Our site uses cookies. By continuing to use our site, you agree to our Cookie
                        Policy.
                        <div class="mt-2 pt-2 border-top">
                            <a href="#" class="btn btn-primary btn-sm">I understand</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tags -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tags
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Default tags</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    Label 1
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 2
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 3
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 4
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 5
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 6
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 7
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 8
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 9
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 10
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 11
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 12
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 13
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label 14
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tags with flag</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    Andorra
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    United Arab Emirates
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Afghanistan
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Antigua
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Anguilla
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Armenia
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Angolan
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Antarctica
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Argentina
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tags with icon</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/bold -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />
                                        <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" />
                                    </svg>
                                    bold
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/italic -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M11 5l6 0" />
                                        <path d="M7 19l6 0" />
                                        <path d="M14 5l-4 14" />
                                    </svg>
                                    italic
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/underline -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M7 5v5a5 5 0 0 0 10 0v-5" />
                                        <path d="M5 19h14" />
                                    </svg>
                                    underline
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/copy -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path
                                            d="M7 7m0 2.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" />
                                        <path
                                            d="M4.012 16.737a2.005 2.005 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" />
                                    </svg>
                                    copy
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/scissors -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M6 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        <path d="M8.6 8.6l10.4 10.4" />
                                        <path d="M8.6 15.4l10.4 -10.4" />
                                    </svg>
                                    scissors
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                        <path d="M12 11l0 6" />
                                        <path d="M9 14l6 0" />
                                    </svg>
                                    file-plus
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/file-minus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                        <path d="M9 14l6 0" />
                                    </svg>
                                    file-minus
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/ghost -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path
                                            d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                        <path d="M10 10l.01 0" />
                                        <path d="M14 10l.01 0" />
                                        <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                    </svg>
                                    ghost
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                    star
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/script -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path
                                            d="M17 20h-11a3 3 0 0 1 0 -6h11a3 3 0 0 0 0 6h1a3 3 0 0 0 3 -3v-11a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v8" />
                                    </svg>
                                    script
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/photo -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M15 8h.01" />
                                        <path
                                            d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                    </svg>
                                    photo
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/dog -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path d="M11 5h2" />
                                        <path d="M19 12c-.667 5.333 -2.333 8 -5 8h-4c-2.667 0 -4.333 -2.667 -5 -8" />
                                        <path d="M11 16c0 .667 .333 1 1 1s1 -.333 1 -1h-2z" />
                                        <path d="M12 18v2" />
                                        <path d="M10 11v.01" />
                                        <path d="M14 11v.01" />
                                        <path
                                            d="M5 4l6 .97l-6.238 6.688a1.021 1.021 0 0 1 -1.41 .111a.953 .953 0 0 1 -.327 -.954l1.975 -6.815z" />
                                        <path
                                            d="M19 4l-6 .97l6.238 6.688c.358 .408 .989 .458 1.41 .111a.953 .953 0 0 0 .327 -.954l-1.975 -6.815z" />
                                    </svg>
                                    dog
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/piano -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon tag-icon icon-xxs">
                                        <path
                                            d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M9 19v-6" />
                                        <path d="M8 5v8h2v-8" />
                                        <path d="M15 19v-6" />
                                        <path d="M14 5v8h2v-8" />
                                    </svg>
                                    piano
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tags with avatar</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar"
                                        style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                    Paweł Kuna
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar">JL</span>
                                    Jeffie Lewzey
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar"
                                        style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                    Mallory Hulme
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar"
                                        style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                    Dunn Slane
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar"
                                        style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                    Emmy Levet
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar"
                                        style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                    Maryjo Lebarree
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar">EP</span>
                                    Egan Poetz
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="avatar avatar-xxs tag-avatar"
                                        style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
                                    Kellie Skingley
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tags with status</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    <span class="badge badge-3 bg-blue text-blue-fg tag-status badge-empty">
                                    </span>
                                    Blue
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-azure text-azure-fg tag-status badge-empty">
                                    </span>
                                    Azure
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-indigo text-indigo-fg tag-status badge-empty">
                                    </span>
                                    Indigo
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-purple text-purple-fg tag-status badge-empty">
                                    </span>
                                    Purple
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-pink text-pink-fg tag-status badge-empty">
                                    </span>
                                    Pink
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-red text-red-fg tag-status badge-empty">
                                    </span>
                                    Red
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-orange text-orange-fg tag-status badge-empty">
                                    </span>
                                    Orange
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-yellow text-yellow-fg tag-status badge-empty">
                                    </span>
                                    Yellow
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-lime text-lime-fg tag-status badge-empty">
                                    </span>
                                    Lime
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-green text-green-fg tag-status badge-empty">
                                    </span>
                                    Green
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-teal text-teal-fg tag-status badge-empty">
                                    </span>
                                    Teal
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="badge badge-3 bg-cyan text-cyan-fg tag-status badge-empty">
                                    </span>
                                    Cyan
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tags with legend</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    <span class="legend bg-blue"></span>
                                    Blue
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-azure"></span>
                                    Azure
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-indigo"></span>
                                    Indigo
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-purple"></span>
                                    Purple
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-pink"></span>
                                    Pink
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-red"></span>
                                    Red
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-orange"></span>
                                    Orange
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-yellow"></span>
                                    Yellow
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-lime"></span>
                                    Lime
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-green"></span>
                                    Green
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-teal"></span>
                                    Teal
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <span class="legend bg-cyan"></span>
                                    Cyan
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Default tags</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" />
                                    Label 1
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" />
                                    Label 2
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" />
                                    Label 3
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" />
                                    Label 4
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" />
                                    Label 5
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" />
                                    Label 6
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" checked />
                                    Label 7
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" checked />
                                    Label 8
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" checked />
                                    Label 9
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" checked />
                                    Label 10
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" checked />
                                    Label 11
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    <input type="checkbox" class="form-check-input tag-check" checked />
                                    Label 12
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Default tags</h3>
                            <div class="tags-list">
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        1
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        2
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        3
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        4
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        5
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        6
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        7
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        8
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        9
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        10
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        11
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                                <span class="tag">
                                    Label
                                    <span class="badge badge-sm tag-badge">
                                        12
                                    </span>
                                    <a href="#" class="btn-close"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tabs
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-1" class="nav-link active" data-bs-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-1" class="nav-link" data-bs-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item ms-auto">
                                    <a href="#tabs-settings-1" class="nav-link" title="Settings"
                                        data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-1">
                                            <path
                                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-1">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-1">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                                <div class="tab-pane" id="tabs-settings-1">
                                    <h4>Settings tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus
                                        amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs flex-row-reverse" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-2" class="nav-link active" data-bs-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-2" class="nav-link" data-bs-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item me-auto">
                                    <a href="#tabs-settings-2" class="nav-link" title="Settings"
                                        data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-1">
                                            <path
                                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-2">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-2">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                                <div class="tab-pane" id="tabs-settings-2">
                                    <h4>Settings tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus
                                        amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-3" class="nav-link active" data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon me-2 icon-2">
                                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-3" class="nav-link" data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon me-2 icon-2">
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        Profile</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-3">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-3">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-4" class="nav-link active" data-bs-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-4" class="nav-link" data-bs-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            Action
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Another action
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-4">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-4">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-5" class="nav-link active" data-bs-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-5" class="nav-link" data-bs-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab">Activity</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-5">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-5">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                                <div class="tab-pane" id="tabs-activity-5">
                                    <h4>Activity tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus
                                        amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-6" class="nav-link active" data-bs-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-6" class="nav-link" data-bs-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-activity-6" class="nav-link disabled"
                                        data-bs-toggle="tab">Disabled</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-6">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-6">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-7" class="nav-link active" data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon me-2 icon-2">
                                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-7" class="nav-link" data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon me-2 icon-2">
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-activity-7" class="nav-link" data-bs-toggle="tab">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon me-2 icon-2">
                                            <path d="M3 12h4l3 8l4 -16l3 8h4" />
                                        </svg>
                                        Activity</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-7">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-7">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                                <div class="tab-pane" id="tabs-activity-7">
                                    <h4>Activity tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus
                                        amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                                <li class="nav-item">
                                    <a href="#tabs-home-8" class="nav-link active" data-bs-toggle="tab">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-profile-8" class="nav-link" data-bs-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tabs-activity-8" class="nav-link" data-bs-toggle="tab">Activity</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tabs-home-8">
                                    <h4>Home tab</h4>
                                    <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis
                                        ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                                </div>
                                <div class="tab-pane fade" id="tabs-profile-8">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique
                                        enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                                <div class="tab-pane fade" id="tabs-activity-8">
                                    <h4>Activity tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus
                                        amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Pagination
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="pagination ">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-1">
                                            <path d="M15 6l-6 6l6 6" />
                                        </svg>
                                        prev
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        next
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-1">
                                            <path d="M9 6l6 6l-6 6" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pagination ">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-1">
                                            <path d="M15 6l-6 6l6 6" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-1">
                                            <path d="M9 6l6 6l-6 6" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="pagination ">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <div class="page-item-subtitle">previous</div>
                                        <div class="page-item-title">Getting started</div>
                                    </a>
                                </li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="#">
                                        <div class="page-item-subtitle">next</div>
                                        <div class="page-item-title">Breadcrumbs</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
