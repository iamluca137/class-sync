@extends('layouts.app')

@section('contents')
<div class="page-header d-print-none">
	<div class="container-xl">
		<div class="row g-2 align-items-center">
			<div class="col">
				<h2 class="page-title">
					Cookie banner
				</h2>
			</div>
		</div>
	</div>
</div> 
<div class="page-body">
	<div class="container-xl">
		<div class="offcanvas offcanvas-bottom h-auto show" tabindex="-1" id="offcanvasBottom"
			aria-modal="true" role="dialog">
			<div class="offcanvas-body">
				<div class="container">
					<div class="row align-items-center">
						<div class="col">
							<strong>Do you like cookies?</strong> 🍪 We use cookies to ensure you get the
							best experience on our website. <a href="{{ route('terms-of-service') }}"
								target="_blank">Learn more</a>
						</div>
						<div class="col-auto">
							<button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas">
								Essential Cookies Only
							</button>
						</div>
						<div class="col-auto">
							<button type="button" class="btn btn-primary" data-bs-dismiss="offcanvas">
								Allow All Cookies
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection