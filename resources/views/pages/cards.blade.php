@extends('layouts.app')

@section('contents')
	<!-- Cards -->
	<div class="page-header d-print-none">
		<div class="container-xl">
			<div class="row g-2 align-items-center">
				<div class="col">
					<h2 class="page-title">
						Cards
					</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body">
		<div class="container-xl">
			<div class="row row-cards">
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Card title</h3>
						</div>
						<div class="card-body">Simple card</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-header card-header-light">
							<h3 class="card-title">Card title</h3>
						</div>
						<div class="card-body">Card with header background</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card card-borderless">
						<div class="card-body">
							<h3 class="card-title">Card title</h3>
							<div>Card without border</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
						</div>
						<div class="card-body">Card with title and subtitle</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="card card-link">
						<div class="card-body">Default hover effect</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="card card-link card-link-rotate">
						<div class="card-body">Rotate hover effect</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
					<a href="#" class="card card-link card-link-pop">
						<div class="card-body">Pop hover effect</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-3">
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card card-rotate-right">
						<div class="card-body">Card rotate right</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card card-rotate-left">
						<div class="card-body">Card rotate left</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card card-active">
						<div class="card-body">
							<p>This is a card with active state.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card card-inactive">
						<div class="card-body">
							<p>This is some text inactive state.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-stamp">
							<div class="card-stamp-icon bg-yellow">
								<!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
									<path
										d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
									<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
								</svg>
							</div>
						</div>
						<div class="card-body">
							<h3 class="card-title">Card with icon bg</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
								nostrum recusandae reiciendis saepe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card bg-primary-lt">
						<div class="card-body">
							<h3 class="card-title">Card with primary light background</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
								nostrum recusandae reiciendis saepe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card bg-primary text-primary-fg">
						<div class="card-stamp">
							<div class="card-stamp-icon bg-white text-primary">
								<!-- Download SVG icon from http://tabler.io/icons/icon/star -->
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
									stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
									<path
										d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
								</svg>
							</div>
						</div>
						<div class="card-body">
							<h3 class="card-title">Card with background and icon</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at
								consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae
								reiciendis saepe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-status-top bg-danger"></div>
						<div class="card-body">
							<h3 class="card-title">Card with top status</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-status-bottom bg-success"></div>
						<div class="card-body">
							<h3 class="card-title">Card with bottom status</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-status-start bg-primary"></div>
						<div class="card-body">
							<h3 class="card-title">Card with side status</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="ribbon ribbon-top bg-yellow">
							<!-- Download SVG icon from http://tabler.io/icons/icon/star -->
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round" class="icon icon-1">
								<path
									d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
							</svg>
						</div>
						<div class="card-body">
							<h3 class="card-title">Card with top ribbon</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
								nostrum recusandae reiciendis saepe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="ribbon bg-red">NEW</div>
						<div class="card-body">
							<h3 class="card-title">Card with text ribbon</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi
								nostrum recusandae reiciendis saepe.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Card with progress bar</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<div class="progress progress-1 progress-sm card-progress">
							<div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38"
								aria-valuemin="0" aria-valuemax="100" aria-label="38% Complete">
								<span class="visually-hidden">38% Complete</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card card-stacked">
						<div class="card-body">
							<h3 class="card-title">Stacked card</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="row row-0">
							<div class="col-3">
								<!-- Photo -->
								<img src="./static/photos/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg"
									class="w-100 h-100 object-cover card-img-start"
									alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach" />
							</div>
							<div class="col">
								<div class="card-body">
									<h3 class="card-title">Card with left side image</h3>
									<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Aperiam deleniti fugit
										incidunt, iste, itaque minima
										neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="row row-0">
							<div class="col-3 order-md-last">
								<!-- Photo -->
								<img src="./static/photos/finances-us-dollars-and-bitcoins-currency-money.jpg"
									class="w-100 h-100 object-cover card-img-end"
									alt="Finances - US Dollars and Bitcoins - Currency - Money" />
							</div>
							<div class="col">
								<div class="card-body">
									<h3 class="card-title">Card with right side image</h3>
									<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Aperiam deleniti fugit
										incidunt, iste, itaque minima
										neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<!-- Photo -->
						<div class="img-responsive img-responsive-21x9 card-img-top"
							style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
						</div>
						<div class="card-body">
							<h3 class="card-title">Card with top image</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Card with bottom image</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<!-- Photo -->
						<div class="img-responsive img-responsive-21x9 card-img-bottom"
							style="background-image: url({{ asset('assets/static/photos/a-visit-to-the-bookstore.jpg') }})">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Card with footer</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<div class="card-footer">
							This is standard card footer
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Card with transparent footer</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<div class="card-footer card-footer-transparent">
							This is transparent card footer
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Card with footer button</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<!-- Card footer -->
						<div class="card-footer">
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Card with footer buttons</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<!-- Card footer -->
						<div class="card-footer">
							<div class="d-flex">
								<a href="#" class="btn btn-link">Cancel</a>
								<a href="#" class="btn btn-primary ms-auto">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<!-- Card footer -->
						<div class="card-footer">
							<div class="row align-items-center">
								<div class="col-auto">
									<a href="#">More information</a>
								</div>
								<div class="col-auto ms-auto">
									<label class="form-check form-switch form-switch-4 m-0">
										<input class="form-check-input position-static" type="checkbox" checked>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="card">
						<div class="card-body">
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
						<!-- Card footer -->
						<div class="card-footer">
							<div class="row align-items-center">
								<div class="col-auto ms-auto">
									<div class="avatar-list avatar-list-stacked">
										<span class="avatar avatar-2 rounded"
											style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
										<span class="avatar avatar-2 rounded">JL</span>
										<span class="avatar avatar-2 rounded"
											style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
										<span class="avatar avatar-2 rounded"
											style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
										<span class="avatar avatar-2 rounded"
											style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
										<span class="avatar avatar-2 rounded">+3</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-tabs card-header-tabs">
								<li class="nav-item">
									<a class="nav-link active" href="#">
										Active
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										<!-- Download SVG icon from http://tabler.io/icons/icon/star -->
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
											class="icon nav-link-icon icon-2">
											<path
												d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
										</svg>
										Link
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
										Disabled
									</a>
								</li>
								<li class="nav-item ms-auto">
									<a class="nav-link" href="#">
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
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="card">
						<div class="card-header">
							<ul class="nav nav-pills card-header-pills">
								<li class="nav-item">
									<a class="nav-link active" href="#">
										Active
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										<!-- Download SVG icon from http://tabler.io/icons/icon/star -->
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
											class="icon nav-link-icon icon-2">
											<path
												d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
										</svg>
										Link
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
										Disabled
									</a>
								</li>
								<li class="nav-item ms-auto">
									<a class="nav-link" href="#">
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
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Aperiam deleniti fugit incidunt, iste, itaque minima
								neque pariatur perferendis sed suscipit velit vitae voluptatem.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<!-- Cards with tabs component -->
					<div class="card-tabs">
						<!-- Cards navigation -->
						<ul class="nav nav-tabs">
							<li class="nav-item"><a href="#tab-top-1" class="nav-link active"
									data-bs-toggle="tab">Tab 1</a></li>
							<li class="nav-item"><a href="#tab-top-2" class="nav-link" data-bs-toggle="tab">Tab
									2</a></li>
							<li class="nav-item"><a href="#tab-top-3" class="nav-link" data-bs-toggle="tab">Tab
									3</a></li>
							<li class="nav-item"><a href="#tab-top-4" class="nav-link" data-bs-toggle="tab">Tab
									4</a></li>
						</ul>
						<div class="tab-content">
							<!-- Content of card #1 -->
							<div id="tab-top-1" class="card tab-pane active show">
								<div class="card-body">
									<div class="card-title">Content of tab #1</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
							<!-- Content of card #2 -->
							<div id="tab-top-2" class="card tab-pane">
								<div class="card-body">
									<div class="card-title">Content of tab #2</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
							<!-- Content of card #3 -->
							<div id="tab-top-3" class="card tab-pane">
								<div class="card-body">
									<div class="card-title">Content of tab #3</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
							<!-- Content of card #4 -->
							<div id="tab-top-4" class="card tab-pane">
								<div class="card-body">
									<div class="card-title">Content of tab #4</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<!-- Cards with tabs component -->
					<div class="card-tabs">
						<div class="tab-content">
							<!-- Content of card #1 -->
							<div id="tab-bottom-1" class="card tab-pane active show">
								<div class="card-body">
									<div class="card-title">Content of tab #1</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
							<!-- Content of card #2 -->
							<div id="tab-bottom-2" class="card tab-pane">
								<div class="card-body">
									<div class="card-title">Content of tab #2</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
							<!-- Content of card #3 -->
							<div id="tab-bottom-3" class="card tab-pane">
								<div class="card-body">
									<div class="card-title">Content of tab #3</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
							<!-- Content of card #4 -->
							<div id="tab-bottom-4" class="card tab-pane">
								<div class="card-body">
									<div class="card-title">Content of tab #4</div>
									<p class="text-secondary">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci,
										alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae
										molestias odit.
									</p>
								</div>
							</div>
						</div>
						<!-- Cards navigation -->
						<ul class="nav nav-tabs nav-tabs-bottom">
							<li class="nav-item"><a href="#tab-bottom-1" class="nav-link active"
									data-bs-toggle="tab">Tab 1</a></li>
							<li class="nav-item"><a href="#tab-bottom-2" class="nav-link"
									data-bs-toggle="tab">Tab 2</a></li>
							<li class="nav-item"><a href="#tab-bottom-3" class="nav-link"
									data-bs-toggle="tab">Tab 3</a></li>
							<li class="nav-item"><a href="#tab-bottom-4" class="nav-link"
									data-bs-toggle="tab">Tab 4</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Cards inside card</h3>
						</div>
						<div class="card-body">
							<div class="row row-cards">
								<div class="col-md">
									<div class="card">
										<div class="card-status-top bg-red"></div>
										<div class="card-header">
											<h3 class="card-title">First card</h3>
										</div>
										<div class="card-body p-0">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-100"
												preserveAspectRatio="none" width="400" height="200"
												viewBox="0 0 400 200" fill="transparent"
												stroke="var(--tblr-border-color, #b8cef1)">
												<line x1="0" y1="0" x2="400" y2="200"></line>
												<line x1="0" y1="200" x2="400" y2="0"></line>
											</svg>
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="card">
										<div class="card-status-top bg-green"></div>
										<div class="card-header">
											<h3 class="card-title">Second card</h3>
										</div>
										<div class="card-body p-0">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-100"
												preserveAspectRatio="none" width="400" height="200"
												viewBox="0 0 400 200" fill="transparent"
												stroke="var(--tblr-border-color, #b8cef1)">
												<line x1="0" y1="0" x2="400" y2="200"></line>
												<line x1="0" y1="200" x2="400" y2="0"></line>
											</svg>
										</div>
									</div>
								</div>
								<div class="col-md">
									<div class="card">
										<div class="card-status-top bg-blue"></div>
										<div class="card-header">
											<h3 class="card-title">Third card</h3>
										</div>
										<div class="card-body p-0">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-100"
												preserveAspectRatio="none" width="400" height="200"
												viewBox="0 0 400 200" fill="transparent"
												stroke="var(--tblr-border-color, #b8cef1)">
												<line x1="0" y1="0" x2="400" y2="200"></line>
												<line x1="0" y1="200" x2="400" y2="0"></line>
											</svg>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="card-group">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">First card</h3>
							</div>
							<div class="card-body p-0">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
									width="400" height="200" viewBox="0 0 400 200" fill="transparent"
									stroke="var(--tblr-border-color, #b8cef1)">
									<line x1="0" y1="0" x2="400" y2="200"></line>
									<line x1="0" y1="200" x2="400" y2="0"></line>
								</svg>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Second card</h3>
							</div>
							<div class="card-body p-0">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
									width="400" height="200" viewBox="0 0 400 200" fill="transparent"
									stroke="var(--tblr-border-color, #b8cef1)">
									<line x1="0" y1="0" x2="400" y2="200"></line>
									<line x1="0" y1="200" x2="400" y2="0"></line>
								</svg>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Third card</h3>
							</div>
							<div class="card-body p-0">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
									width="400" height="200" viewBox="0 0 400 200" fill="transparent"
									stroke="var(--tblr-border-color, #b8cef1)">
									<line x1="0" y1="0" x2="400" y2="200"></line>
									<line x1="0" y1="200" x2="400" y2="0"></line>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row row-cards row-deck">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Card title</h3>
								</div>
								<div class="card-body">This is a wider card with supporting text below as a
									natural lead-in to additional content. This content is a little bit longer.
								</div>
								<div class="card-footer">
									Last updated 3 mins ago
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Card title</h3>
								</div>
								<div class="card-body">This card has supporting text below as a natural lead-in
									to additional content.</div>
								<div class="card-footer">
									Last updated 3 mins ago
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Card with very long content</h3>
								</div>
								<div class="card-body">This is a wider card with supporting text below as a
									natural lead-in to additional content. This card has even longer content
									than the first to show that equal height action.</div>
								<div class="card-footer">
									Last updated 3 mins ago
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="empty">
							<div class="empty-img">
							</div>
							<p class="empty-title">No results found</p>
							<p class="empty-subtitle text-secondary">
								Try adjusting your search or filter to find what you're looking for.
							</p>
							<div class="empty-action">
								<a href="/." class="btn btn-primary btn-4">
									<!-- Download SVG icon from http://tabler.io/icons/icon/search -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
										<path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
										<path d="M21 21l-6 -6" />
									</svg>
									Search again
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="mb-3">
								<div class="form-label">Card number</div>
								<input type="text" name="input-mask" class="form-control"
									data-mask="0000 0000 0000 0000" data-mask-visible="true"
									placeholder="0000 0000 0000 0000" autocomplete="off" />
							</div>
							<div class="mb-3">
								<div class="form-label">Card name</div>
								<input type="text" class="form-control">
							</div>
							<div class="row">
								<div class="col-8">
									<div class="mb-3">
										<label class="form-label">Expiration date</label>
										<div class="row g-2">
											<div class="col">
												<select class="form-select">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
											</div>
											<div class="col">
												<select class="form-select">
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
													<option value="2026">2026</option>
													<option value="2027">2027</option>
													<option value="2028">2028</option>
													<option value="2029">2029</option>
													<option value="2030">2030</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-3">
										<div class="form-label">CVV</div>
										<input type="number" class="form-control">
									</div>
								</div>
							</div>
							<div class="mt-2">
								<a href="#" class="btn btn-primary btn-3 w-100">
									Pay now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Card actions -->
	<div class="page-header d-print-none">
		<div class="container-xl">
			<div class="row g-2 align-items-center">
				<div class="col">
					<h2 class="page-title">
						Card actions
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
						<div class="card-header">
							<h3 class="card-title">Sample card</h3>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Card with action</h3>
							<div class="card-actions">
								<a href="#" class="btn btn-primary btn-3">
									<!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
										<path d="M12 5l0 14" />
										<path d="M5 12l14 0" />
									</svg>
									Add new
								</a>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Cart title</h3>
							<div class="card-actions">
								<a href="#" class="btn btn-2">
									<!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
										<path
											d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
									</svg>
									Phone
								</a>
								<a href="#" class="btn btn-2">
									<!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
										<path
											d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
										<path d="M3 7l9 6l9 -6" />
									</svg>
									Email
								</a>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div>
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="avatar avatar-1"
											style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
									</div>
									<div class="col">
										<div class="card-title">Paweł Kuna</div>
										<div class="card-subtitle">UI Designer</div>
									</div>
								</div>
							</div>
							<div class="card-actions">
								<a href="#" class="btn btn-2">
									<!-- Download SVG icon from http://tabler.io/icons/icon/phone -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
										<path
											d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
									</svg>
									Phone
								</a>
								<a href="#" class="btn btn-2">
									<!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
										<path
											d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
										<path d="M3 7l9 6l9 -6" />
									</svg>
									Email
								</a>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div>
								<h3 class="card-title">
									With description
								</h3>
								<p class="card-subtitle">
									Lorem ipsum dolor sit amet consectetur adipisicing.
								</p>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div>
								<h3 class="card-title">
									With description and action
								</h3>
								<p class="card-subtitle">
									Lorem ipsum dolor sit amet consectetur adipisicing.
								</p>
							</div>
							<div class="card-actions">
								<a href="#" class="btn btn-primary btn-2">
									Create new job
								</a>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<div>
								<div class="row align-items-center">
									<div class="col-auto">
										<span class="avatar avatar-1"
											style="background-image: url({{ asset('assets/static/avatars/000m.jpg') }})"></span>
									</div>
									<div class="col">
										<div class="card-title">Dunn Slane</div>
										<div class="card-subtitle">Research Nurse</div>
									</div>
								</div>
							</div>
							<div class="card-actions">
								<div class="dropdown">
									<a href="#" class="btn-action dropdown-toggle" data-bs-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										<!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
											class="icon icon-1">
											<path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
											<path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
											<path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
										</svg>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="#">Edit user</a>
										<a class="dropdown-item" href="#">Change permissions</a>
										<a class="dropdown-item text-danger" href="#">Delete user</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Card actions</h3>
							<div class="card-actions btn-actions">
								<a href="#" class="btn-action">
									<!-- Download SVG icon from http://tabler.io/icons/icon/refresh -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
										<path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
										<path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
									</svg>
								</a>
								<a href="#" class="btn-action">
									<!-- Download SVG icon from http://tabler.io/icons/icon/chevron-up -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
										<path d="M6 15l6 -6l6 6" />
									</svg>
								</a>
								<a href="#" class="btn-action">
									<!-- Download SVG icon from http://tabler.io/icons/icon/dots-vertical -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
										<path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
										<path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
										<path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
									</svg>
								</a>
								<a href="#" class="btn-action">
									<!-- Download SVG icon from http://tabler.io/icons/icon/x -->
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
										<path d="M18 6l-12 12" />
										<path d="M6 6l12 12" />
									</svg>
								</a>
							</div>
						</div>
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cards Masonry -->
	<div class="page-header d-print-none">
		<div class="container-xl">
			<div class="row g-2 align-items-center">
				<div class="col">
					<h2 class="page-title">
						Cards Masonry
					</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body">
		<div class="container-xl">
			<div class="row row-cards" data-masonry='{"percentPosition": true }'>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="150" viewBox="0 0 400 150" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="150"></line>
								<line x1="0" y1="150" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="400" viewBox="0 0 400 400" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="400"></line>
								<line x1="0" y1="400" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="300" viewBox="0 0 400 300" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="300"></line>
								<line x1="0" y1="300" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="350" viewBox="0 0 400 350" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="350"></line>
								<line x1="0" y1="350" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="600" viewBox="0 0 400 600" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="600"></line>
								<line x1="0" y1="600" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="700" viewBox="0 0 400 700" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="700"></line>
								<line x1="0" y1="700" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="150" viewBox="0 0 400 150" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="150"></line>
								<line x1="0" y1="150" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="250" viewBox="0 0 400 250" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="250"></line>
								<line x1="0" y1="250" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="50" viewBox="0 0 400 50" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="50"></line>
								<line x1="0" y1="50" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="400" viewBox="0 0 400 400" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="400"></line>
								<line x1="0" y1="400" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="300" viewBox="0 0 400 300" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="300"></line>
								<line x1="0" y1="300" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<div class="card-body p-0">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-100" preserveAspectRatio="none"
								width="400" height="200" viewBox="0 0 400 200" fill="transparent"
								stroke="var(--tblr-border-color, #b8cef1)">
								<line x1="0" y1="0" x2="400" y2="200"></line>
								<line x1="0" y1="200" x2="400" y2="0"></line>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
