<template>
    <div>

        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
            <!--begin::Logo-->
            <a href="index.html">
                <img alt="Logo" src="/assets/media/logos/logo-light.png" />
            </a>
            <!--end::Logo-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Aside Mobile Toggle-->
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Aside Mobile Toggle-->
                <!--begin::Header Menu Mobile Toggle-->
                <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Header Menu Mobile Toggle-->
                <!--begin::Topbar Mobile Toggle-->
                <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
                </button>
                <!--end::Topbar Mobile Toggle-->
            </div>
            <!--end::Toolbar-->
        </div>
                <!--end::Header Mobile-->
                <div class="d-flex flex-column flex-root">
                    <!--begin::Page-->
                    <div class="d-flex flex-row flex-column-fluid page">
                        <!--begin::Aside-->
                        <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                            <!--begin::Brand-->
                            <div class="brand flex-column-auto" id="kt_brand">
                                <!--begin::Logo-->
                                <a href="index.html" class="brand-logo">
                                    <img alt="Logo" src="/assets/media/logos/logo-light.png" />
                                </a>
                                <!--end::Logo-->
                                <!--begin::Toggle-->
                                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
        							<span class="svg-icon svg-icon svg-icon-xl">
        								<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Angle-double-left.svg-->
        								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        										<polygon points="0 0 24 0 24 24 0 24" />
        										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
        										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
        									</g>
        								</svg>
                                        <!--end::Svg Icon-->
        							</span>
                                </button>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Brand-->
                            <!--begin::Aside Menu-->
                            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                                <!--begin::Menu Container-->
                                <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                                    <!--begin::Menu Nav-->
                                    <ul class="menu-nav">
                                        <li class="menu-item menu-item-active" aria-haspopup="true">
                                            <a href="index.html" class="menu-link">
        										<span class="svg-icon menu-icon">
        											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
        											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        													<polygon points="0 0 24 0 24 24 0 24" />
        													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
        													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
        												</g>
        											</svg>
                                                    <!--end::Svg Icon-->
        										</span>
                                                <span class="menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Menu Nav-->
                                </div>
                                <!--end::Menu Container-->
                            </div>
                            <!--end::Aside Menu-->
                        </div>
                        <!--end::Aside-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                            <!--begin::Header-->
                            <div id="kt_header" class="header header-fixed">
                                <!--begin::Container-->
                                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                                    <!--begin::Header Menu Wrapper-->
                                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                        <!--begin::Header Menu-->
                                    </div>
                                    <!--end::Header Menu Wrapper-->
                                    <!--begin::Topbar-->
                                    <div class="topbar">
                                        <!--begin::User-->
                                        <div class="topbar-item">
                                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ user.name }}</span>
                                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
        											<span class="symbol-label font-size-h5 font-weight-bold">{{ user.name.charAt(0) }}</span>
        										</span>
                                            </div>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Topbar-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Content-->
                            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                                <!--begin::Subheader-->
                                <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                                    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center flex-wrap mr-2">
                                            <!--begin::Page Title-->
                                            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                                            <!--end::Page Title-->
                                            <!--begin::Actions-->
                                            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                                            <a href="" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Toolbar-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Daterange-->
                                            <a href="index.html#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                                                <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                                                <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                                            </a>
                                            <!--end::Daterange-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                </div>
                                <!--end::Subheader-->
                                <!--begin::Entry-->
                                <div class="d-flex flex-column-fluid">
                                    <!--begin::Container-->
                                    <div class="container">

                                        <!--begin::Dashboard-->
                                        <!--begin::Row-->
                                        <div class="row">
                                            <div class="col-xxl-12 order-2 order-xxl-1">
                                                <!--begin::Advance Table Widget 2-->
                                                <div class="card card-custom card-stretch gutter-b">
                                                    <!--begin::Header-->
                                                    <div class="card-header border-0 pt-5">
                                                        <h3 class="card-title align-items-start flex-column">
                                                            <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
                                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                                        </h3>
                                                        <div class="card-toolbar">
                                                            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                                <li class="nav-item">
                                                                    <a class="nav-link py-2 px-4" data-toggle="tab" href="index.html#kt_tab_pane_11_1">Month</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link py-2 px-4" data-toggle="tab" href="index.html#kt_tab_pane_11_2">Week</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link py-2 px-4 active" data-toggle="tab" href="index.html#kt_tab_pane_11_3">Day</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Body-->
                                                    <div class="card-body pt-2 pb-0 mt-n3">
                                                        <div class="tab-content mt-5" id="myTabTables11">
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                                                                <!--begin::Table-->
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless table-vertical-center">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="p-0 w-40px"></th>
                                                                            <th class="p-0 min-w-200px"></th>
                                                                            <th class="p-0 min-w-100px"></th>
                                                                            <th class="p-0 min-w-125px"></th>
                                                                            <th class="p-0 min-w-110px"></th>
                                                                            <th class="p-0 min-w-150px"></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">company@dev.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">Laravel, Metronic</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-success label-inline">Success</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">hr@demo.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">ktr@demo.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light mr-1">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">bprow@bnc.cc</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">app@dev.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">Python, MySQL</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!--end::Table-->
                                                            </div>
                                                            <!--end::Tap pane-->
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
                                                                <!--begin::Table-->
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless table-vertical-center">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="p-0 w-40px"></th>
                                                                            <th class="p-0 min-w-200px"></th>
                                                                            <th class="p-0 min-w-100px"></th>
                                                                            <th class="p-0 min-w-125px"></th>
                                                                            <th class="p-0 min-w-110px"></th>
                                                                            <th class="p-0 min-w-150px"></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">app@dev.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">Python, MySQL</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">company@dev.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">Laravel, Metronic</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-success label-inline">Success</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">hr@demo.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light mr-1">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">bprow@bnc.cc</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">ktr@demo.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!--end::Table-->
                                                            </div>
                                                            <!--end::Tap pane-->
                                                            <!--begin::Tap pane-->
                                                            <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                                                <!--begin::Table-->
                                                                <div class="table-responsive">
                                                                    <table class="table table-borderless table-vertical-center">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="p-0 w-40px"></th>
                                                                            <th class="p-0 min-w-200px"></th>
                                                                            <th class="p-0 min-w-100px"></th>
                                                                            <th class="p-0 min-w-125px"></th>
                                                                            <th class="p-0 min-w-110px"></th>
                                                                            <th class="p-0 min-w-150px"></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light mr-1">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">bprow@bnc.cc</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">app@dev.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">Python, MySQL</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">company@dev.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">Laravel, Metronic</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-success label-inline">Success</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">hr@demo.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pl-0 py-4">
                                                                                <div class="symbol symbol-50 symbol-light">
        																				<span class="symbol-label">
        																					<img src="/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
        																				</span>
                                                                                </div>
                                                                            </td>
                                                                            <td class="pl-0">
                                                                                <a href="index.html#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                                                                                <div>
                                                                                    <span class="font-weight-bolder">Email:</span>
                                                                                    <a class="text-muted font-weight-bold text-hover-primary" href="index.html#">ktr@demo.com</a>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                                <span class="text-muted font-weight-bold">Paid</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                            </td>
                                                                            <td class="text-right pr-0">
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Settings-1.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
        																							<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Write.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
        																							<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                                <a href="index.html#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
        																				<span class="svg-icon svg-icon-md svg-icon-primary">
        																					<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Trash.svg-->
        																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        																							<rect x="0" y="0" width="24" height="24" />
        																							<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
        																							<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
        																						</g>
        																					</svg>
                                                                                            <!--end::Svg Icon-->
        																				</span>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <!--end::Table-->
                                                            </div>
                                                            <!--end::Tap pane-->
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Advance Table Widget 2-->
                                            </div>
                                        </div>
                                        <!--end::Dashboard-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Entry-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Footer-->
                            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                                <!--begin::Container-->
                                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                                    <!--begin::Copyright-->
                                    <div class="text-dark order-2 order-md-1">
                                        <span class="text-muted font-weight-bold mr-2">2020©</span>
                                        <a href="" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                                    </div>
                                    <!--end::Copyright-->
                                    <!--begin::Nav-->
                                    <div class="nav nav-dark">
                                        <a href="" target="_blank" class="nav-link pl-0 pr-5">About</a>
                                        <a href="" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                                        <a href="" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Page-->
                </div>
                <!--end::Main-->





        <!-- begin::User Panel-->
        <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
            <!--begin::Header-->
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                <h3 class="font-weight-bold m-0">User Profile
                    <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
                <a href="index.html#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="offcanvas-content pr-5 mr-n5">
                <!--begin::Header-->
                <div class="d-flex align-items-center mt-5">
                    <div class="symbol symbol-100 mr-5">
                        <div class="symbol-label" style="background-image:url('/assets/media/users/300_21.jpg')"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="index.html#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"> {{ user.name }} </a>
                        <div class="text-muted mt-1">Enthusiast</div>
                        <div class="navi mt-2">
                            <a href="index.html#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{ user.email }}</span>
								</span>
                            </a>
                            <a href="#" @click="logout()" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                        </div>
                    </div>
                </div>
                <!--end::Header-->

            </div>
            <!--end::Content-->
        </div>
        <!-- end::User Panel-->







                <!--begin::Scrolltop-->
                <div id="kt_scrolltop" class="scrolltop">
        			<span class="svg-icon">
        				<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Up-2.svg-->
        				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
        					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        						<polygon points="0 0 24 0 24 24 0 24" />
        						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
        						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
        					</g>
        				</svg>
                        <!--end::Svg Icon-->
        			</span>
                </div>
                <!--end::Scrolltop-->
    </div>
</template>

<script>
    export default {
        name: "DashboardComponent",
        data: function() {
          return {
              user: null,
          }
        },
        created: function() {
            this.user = this.$parent.user.user
            console.log(this.user);
        },
        methods: {
            logout() {
                localStorage.removeItem('user');
                localStorage.removeItem('authExpireTime');

                window.location = "/#/auth";
            }
        }
    }
</script>

<style scoped>

</style>
