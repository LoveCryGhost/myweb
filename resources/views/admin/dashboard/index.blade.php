@extends('layouts.admin.admin_template')

@section("user-title", "Admin-title")

@section('user-content')

    <div class="page-header">
        <div class="page-header-content container header-elements-md-inline">
            <div class="d-flex">
                <div class="page-title">
                    <h4 class="font-weight-semibold">Dashboard</h4>
                    <div class="text-muted">Welcome back, Eugene!</div>
                </div>
                <a href="#" class="header-elements-toggle text-body d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none py-0 mb-3 mb-md-0">
                <button type="button" class="btn btn-light"><i class="icon-printer mr-2"></i> Print</button>
                <button type="button" class="btn btn-pink ml-3"> <i class="icon-file-presentation mr-2"></i> Generate report</button>
            </div>
        </div>
    </div>


    <div class="content container pt-0">

        <!-- Blocks with chart -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header d-flex pb-1">
                        <div>
                            <span class="card-title font-weight-semibold">Total visitors</span>
                            <h2 class="font-weight-bold mb-0">5,274 <small class="text-success font-size-base ml-2">+ 3.6%</small></h2>
                        </div>

                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill"><i class="icon-more2"></i></a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                            </div>
                        </div>
                    </div>

                    <div class="chart-container">
                        <div class="chart" id="area_gradient_blue" style="height: 100px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1660911262805"><div style="position: relative; width: 411px; height: 100px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="411" height="100" style="position: absolute; left: 0px; top: 0px; width: 411px; height: 100px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header d-flex pb-1">
                        <div>
                            <span class="card-title font-weight-semibold">New opportunities</span>
                            <h2 class="font-weight-bold mb-0">2,785 <small class="text-success font-size-base ml-2">+ 5.9%</small></h2>
                        </div>

                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill"><i class="icon-more2"></i></a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                            </div>
                        </div>
                    </div>

                    <div class="chart-container">
                        <div class="chart" id="area_gradient_orange" style="height: 100px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1660911262806"><div style="position: relative; width: 411px; height: 100px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="411" height="100" style="position: absolute; left: 0px; top: 0px; width: 411px; height: 100px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header d-flex pb-1">
                        <div>
                            <span class="card-title font-weight-semibold">New leads</span>
                            <h2 class="font-weight-bold mb-0">1,589 <small class="text-danger font-size-base ml-2">- 1.8%</small></h2>
                        </div>

                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill"><i class="icon-more2"></i></a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                            </div>
                        </div>
                    </div>

                    <div class="chart-container">
                        <div class="chart" id="area_gradient_green" style="height: 100px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1660911262807"><div style="position: relative; width: 411px; height: 100px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="411" height="100" style="position: absolute; left: 0px; top: 0px; width: 411px; height: 100px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /blocks with chart -->


        <!-- Sales by country -->
        <div class="card">
            <div class="card-header">
                <h6 class="card-title font-weight-semibold">Daily sales by country</h6>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="map overflow-hidden rounded mb-3 mb-xl-0" id="map_europe_effect" style="height: 400px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1660911262808"><div style="position: relative; width: 609px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="609" height="400" style="position: absolute; left: 0px; top: 0px; width: 609px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas><canvas data-zr-dom-id="zr_1" width="609" height="400" style="position: absolute; left: 0px; top: 0px; width: 609px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                    </div>

                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-pink-100 text-pink line-height-1 rounded p-2 mr-3">
													<i class="icon-cart top-0"></i>
												</span>
                                    <div>
                                        <h6 class="font-weight-bold mb-0">1,890</h6>
                                        <span class="text-muted">Total sales</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-teal-100 text-teal line-height-1 rounded p-2 mr-3">
													<i class="icon-cash3 top-0"></i>
												</span>
                                    <div>
                                        <h6 class="font-weight-bold mb-0">€11,781</h6>
                                        <span class="text-muted">Total revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart-container">
                            <div class="chart" id="progress_bar_sorted" style="height: 333px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1660911262809"><div style="position: relative; width: 609px; height: 333px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="609" height="333" style="position: absolute; left: 0px; top: 0px; width: 609px; height: 333px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /sales by country -->


        <!-- Latest orders -->
        <div class="card">
            <div class="card-header d-flex py-0">
                <h6 class="card-title font-weight-semibold py-3">Latest orders</h6>

                <div class="d-inline-flex align-items-center ml-auto">
                    <span class="badge badge-pink font-weight-semibold">+ 29 new</span>
                    <div class="dropdown ml-2">
                        <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                            <i class="icon-more2"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                            <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive border-top-0">
                <table class="table text-nowrap">
                    <thead>
                    <tr>
                        <th>Company</th>
                        <th>Delivery date</th>
                        <th>Delivery method</th>
                        <th>Status</th>
                        <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/klm.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">KLM Royal Dutch Airlines</a>
                                    <div class="text-muted font-size-sm">May 21st</div>
                                </div>
                            </div>
                        </td>
                        <td>June 12th</td>
                        <td><img src="../../../../global_assets/images/brands/ups.svg" class="mr-1" width="20" alt=""> UPS Express</td>
                        <td><span class="badge badge-success-100 text-success">Delivered</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/amazon.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Amazon Inc.</a>
                                    <div class="text-muted font-size-sm">May 22nd</div>
                                </div>
                            </div>
                        </td>
                        <td>June 13th</td>
                        <td><img src="../../../../global_assets/images/brands/deutsche-post.svg" class="rounded-sm mr-1" width="20" alt=""> Deutsche post</td>
                        <td><span class="badge badge-danger-100 text-danger">Delayed</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/honda.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Honda Motor Company</a>
                                    <div class="text-muted font-size-sm">May 22nd</div>
                                </div>
                            </div>
                        </td>
                        <td>June 14th</td>
                        <td><img src="../../../../global_assets/images/brands/postnl.svg" class="mr-1" width="20" alt=""> PostNL</td>
                        <td><span class="badge badge-secondary-100 text-secondary">Processing</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/holiday-inn.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Holiday Inn Hotels</a>
                                    <div class="text-muted font-size-sm">May 23rd</div>
                                </div>
                            </div>
                        </td>
                        <td>June 15th</td>
                        <td><img src="../../../../global_assets/images/brands/fedex.svg" class="rounded-sm mr-1" width="20" alt=""> Fedex Express</td>
                        <td><span class="badge badge-success-100 text-success">Delivered</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/apple.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Apple Inc.</a>
                                    <div class="text-muted font-size-sm">May 23rd</div>
                                </div>
                            </div>
                        </td>
                        <td>June 16th</td>
                        <td><img src="../../../../global_assets/images/brands/deutsche-post.svg" class="rounded-sm mr-1" width="20" alt=""> Deutsche post</td>
                        <td><span class="badge badge-indigo-100 text-indigo">Dispatched</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/debijenkorf.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">de Bijenkorf</a>
                                    <div class="text-muted font-size-sm">May 23rd</div>
                                </div>
                            </div>
                        </td>
                        <td>June 17th</td>
                        <td><img src="../../../../global_assets/images/brands/tnt.svg" class="rounded-sm mr-1" width="20" alt=""> TNT</td>
                        <td><span class="badge badge-indigo-100 text-indigo">Dispatched</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/texaco.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Texaco Inc.</a>
                                    <div class="text-muted font-size-sm">May 24th</div>
                                </div>
                            </div>
                        </td>
                        <td>June 18th</td>
                        <td><img src="../../../../global_assets/images/brands/dpd.svg" class="mr-1" width="20" alt=""> DPD</td>
                        <td><span class="badge badge-danger-100 text-danger">Delayed</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/shell.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Royal Dutch Shell</a>
                                    <div class="text-muted font-size-sm">May 25th</div>
                                </div>
                            </div>
                        </td>
                        <td>June 19th</td>
                        <td><img src="../../../../global_assets/images/brands/ups.svg" class="mr-1" width="20" alt=""> UPS Express</td>
                        <td><span class="badge badge-success-100 text-success">Delivered</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="#" class="mr-3">
                                    <img src="../../../../global_assets/images/brands/tesla.svg" class="rounded-circle" width="32" height="32" alt="">
                                </a>

                                <div>
                                    <a href="#" class="text-body font-weight-semibold">Tesla Inc.</a>
                                    <div class="text-muted font-size-sm">May 26th</div>
                                </div>
                            </div>
                        </td>
                        <td>June 21st</td>
                        <td><img src="../../../../global_assets/images/brands/dpd.svg" class="mr-1" width="20" alt=""> DPD</td>
                        <td><span class="badge badge-secondary-100 text-secondary">Processing</span></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <a href="#" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill" data-toggle="dropdown">
                                    <i class="icon-menu7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> Order details</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Download invoice</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /latest orders -->


        <!-- Reports -->
        <div class="row">
            <div class="col-xl-6">

                <!-- Annual sales report -->
                <div class="card">
                    <div class="card-header d-flex py-0">
                        <h6 class="card-title font-weight-semibold py-3">Annual sales report</h6>

                        <div class="dropdown align-self-center ml-auto">
                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill">
                                <i class="icon-more2"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-primary-100 text-primary line-height-1 rounded p-2 mr-3">
													<i class="icon-stack3 top-0"></i>
												</span>
                                    <div>
                                        <h6 class="font-weight-bold mb-0">4,485</h6>
                                        <span class="text-muted">Campaigns</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-success-100 text-success line-height-1 rounded p-2 mr-3">
													<i class="icon-spinner11 top-0"></i>
												</span>
                                    <div>
                                        <h6 class="font-weight-bold mb-0">1,255</h6>
                                        <span class="text-muted">Leads</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart-container">
                            <div class="chart" id="bars_grouped" style="height: 333px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1660911262810"><div style="position: relative; width: 588px; height: 333px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="588" height="333" style="position: absolute; left: 0px; top: 0px; width: 588px; height: 333px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Campaign</th>
                                <th>Leads</th>
                                <th>Rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        April campaign
                                        <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                    </div>
                                </td>
                                <td>4,890</td>
                                <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 0.25%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        Flash sale
                                        <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                    </div>
                                </td>
                                <td>1,896</td>
                                <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 1.2%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        Up to 40% off
                                        <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                    </div>
                                </td>
                                <td>2,880</td>
                                <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 0.59%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        Extended trial version
                                        <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                    </div>
                                </td>
                                <td>982</td>
                                <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 1.05%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        50% off second license
                                        <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                    </div>
                                </td>
                                <td>3,780</td>
                                <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 0.58%</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        50% off second license
                                        <a href="#" class="text-muted ml-auto"><i class="icon-new-tab2"></i></a>
                                    </div>
                                </td>
                                <td>4,551</td>
                                <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 1.04%</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /annual sales report -->

            </div>

            <div class="col-xl-6">

                <!-- Daily visitors report -->
                <div class="card">
                    <div class="card-header d-flex py-0">
                        <h6 class="card-title font-weight-semibold py-3">Daily visitors report</h6>

                        <div class="dropdown align-self-center ml-auto">
                            <a href="#" data-toggle="dropdown" class="btn btn-outline-light btn-icon btn-sm text-body border-transparent rounded-pill">
                                <i class="icon-more2"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View report</a>
                                <a href="#" class="dropdown-item"><i class="icon-printer"></i> Print report</a>
                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export report</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-cog3"></i> Configure</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-indigo-100 text-indigo line-height-1 rounded p-2 mr-3">
													<i class="icon-user-plus top-0"></i>
												</span>
                                    <div>
                                        <h6 class="font-weight-bold mb-0">4,782</h6>
                                        <span class="text-muted">New users</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center justify-content-sm-center mb-3">
												<span class="bg-indigo-100 text-indigo line-height-1 rounded p-2 mr-3">
													<i class="icon-user-check top-0"></i>
												</span>
                                    <div>
                                        <h6 class="font-weight-bold mb-0">6,478</h6>
                                        <span class="text-muted">Returned</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chart-container">
                            <div class="chart" id="line_label_marks" style="height: 333px; -webkit-tap-highlight-color: transparent; user-select: none;" _echarts_instance_="ec_1660911262811"><div style="position: relative; width: 588px; height: 333px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="588" height="333" style="position: absolute; left: 0px; top: 0px; width: 588px; height: 333px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div></div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Browser</th>
                                <th>Diff</th>
                                <th>Count</th>
                                <th>Share</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../../../../global_assets/images/browsers/chrome.svg" class="mr-2" alt="" style="height: 32px;">
                                        Chrome
                                    </div>
                                </td>
                                <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 4.84%</span>
                                </td>
                                <td>728</td>
                                <td>34.6%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../../../../global_assets/images/browsers/firefox.svg" class="mr-2" alt="" style="height: 32px;">
                                        Firefox
                                    </div>
                                </td>
                                <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 0.89%</span>
                                </td>
                                <td>550</td>
                                <td>20.4%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../../../../global_assets/images/browsers/edge.svg" class="mr-2" alt="" style="height: 32px;">
                                        Edge
                                    </div>
                                </td>
                                <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 2.86%</span>
                                </td>
                                <td>458</td>
                                <td>15.5%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../../../../global_assets/images/browsers/safari.svg" class="mr-2" alt="" style="height: 32px;">
                                        Safari
                                    </div>
                                </td>
                                <td><span class="text-success"><i class="icon-arrow-up8 top-0 font-size-sm mr-1"></i> 1.5%</span>
                                </td>
                                <td>690</td>
                                <td>12.5%</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="../../../../global_assets/images/browsers/opera.svg" class="mr-2" alt="" style="height: 32px;">
                                        Opera
                                    </div>
                                </td>
                                <td><span class="text-danger"><i class="icon-arrow-down8 top-0 font-size-sm mr-1"></i> 2.45%</span>
                                </td>
                                <td>886</td>
                                <td>10.2%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /daily visitors report -->

            </div>
        </div>
        <!-- /reports -->

    </div>




@endsection
