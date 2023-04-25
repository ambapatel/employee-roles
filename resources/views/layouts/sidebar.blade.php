<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="#">
			<span class="align-middle">{{ __('admin.app_name') }}</span>
		</a>
		<ul class="sidebar-nav">
			<li class="sidebar-item active">
				<a class="sidebar-link" href="{{route('home')}}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{ __('admin.dashboard') }}</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('employee')}}">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">{{__('admin.employees')}}</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{route('role')}}">
					<i class="align-middle" data-feather="list"></i> <span class="align-middle">{{__('admin.roles')}}</span>
				</a>
			</li>
</nav>