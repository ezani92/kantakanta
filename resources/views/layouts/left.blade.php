		<div class="be-left-sidebar">
                <div class="left-sidebar-wrapper">
                    <a href="#" class="left-sidebar-toggle">Menu</a>
                    <div class="left-sidebar-spacer">
                        <div class="left-sidebar-scroll">
                            <div class="left-sidebar-content">
                                <ul class="sidebar-elements">
                                    <li class="﻿"><a href="{{ url('/admin') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-face"></i><span>User Management</span></a>
                                        <ul class="sub-menu">
	                                        <li><a href="{{ url('/admin/user') }}">User List</a>
                                            </li>
                                            <li><a href="{{ url('/admin/user/add') }}">Add New User</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-shopping-cart"></i><span>Order</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/admin/order') }}">Order List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent">
                                        <a href="#"><i class="icon mdi mdi-apps"></i><span>Product</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/admin/product') }}">Product List</a>
                                            </li>
                                            <li><a href="{{ url('/admin/product/add') }}">Add New Product</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{ url('/admin/settings') }}"><i class="icon mdi mdi-wrench"></i><span>Settings</span></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="progress-widget">
                        <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
                        <div class="progress">
                            <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </div>
                </div>
            </div>