<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('menu') }}'><i class='nav-icon la la-bars'></i> Menus</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('course') }}'><i class='nav-icon la la-graduation-cap'></i> Courses</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('fee-type') }}'><i class='nav-icon la la-plus'></i> Fee types</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('about-us') }}'><i class='nav-icon la la-address-card'></i> About us</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('mst-department-type') }}'><i class='nav-icon la la-building'></i> Department type</a></li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-user"></i> User Management</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-users"></i> <span>Users</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-renren"></i> <span>Roles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('gallery') }}'><i class='nav-icon la la-question'></i> Galleries</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contact-us') }}'><i class='nav-icon la la-question'></i> Contact us</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('news-notice') }}'><i class='nav-icon la la-question'></i> News Notice</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('scholarship') }}'><i class='nav-icon la la-question'></i> Scholarships</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('agent-detail') }}'><i class='nav-icon la la-question'></i> Agent details</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('faq') }}'><i class='nav-icon la la-question'></i> Faqs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('slider') }}'><i class='nav-icon la la-question'></i> Sliders</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('human-resource') }}'><i class='nav-icon la la-question'></i> Human resources</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('event') }}'><i class='nav-icon la la-question'></i> Events</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('mst-class') }}'><i class='nav-icon la la-question'></i> Mst classes</a></li>