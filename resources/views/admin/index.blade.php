@extends('layouts.admin.app')

@section('dashboard')
<div class="main-container">
    @include('layouts.admin.sidebar')

    <div id="content" class="main-content">
        <div class="layout-pd">
            <div class="container-xxl p-0">
                <div class="row mt-5">
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                      <div class="widget w-first">
                          <div class="widget-heading">
                              <span>Customers</span>
                              <i data-feather="users"></i>
                          </div>
                          <div class="w-chart d-flex">
                              <div class="w-chart-section">
                                  <div class="w-detail">
                                      <p class="w-title">Total</p>
                                      <p class="w-stats">405,506</p>
                                  </div>
                                  <div class="w-chart-render">
                                      <div class="customer-chart d-flex" style="min-height: 10rem">
                                          <div style="height: 60px; width: 100%;" class="align-self-end">
                                              <canvas id="totalCustomersChart"></canvas>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr>
                          <div class="widget-sum">
                            <p> <span>13</span> this week</p>
                            <span class="badge badge-light-success">
                                + 13.6%
                                <i data-feather="trending-up"></i>
                            </span>
                          </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                      <div class="widget w-first">
                        <div class="widget-heading">
                            <span>Sales</span>
                            <i data-feather="bar-chart-2"></i>
                        </div>
                        <div class="w-chart d-flex">
                            <div class="w-chart-section">
                                <div class="w-detail">
                                    <p class="w-title">Total</p>
                                    <p class="w-stats">405,506</p>
                                </div>
                                <div class="w-chart-render">
                                    <div class="customer-chart d-flex" style="min-height: 10rem">
                                        <div style="height: 60px; width: 100%;" class="align-self-end">
                                            <canvas id="totalSalesChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget-sum">
                        <p> <span>13</span> this week</p>
                        <span class="badge badge-light-success">
                            + 13.6%
                            <i data-feather="trending-up"></i>
                        </span>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                      <div class="widget w-first">
                        <div class="widget-heading">
                            <span>Profits</span>
                            <i data-feather="dollar-sign"></i>
                        </div>
                        <div class="w-chart d-flex">
                            <div class="w-chart-section">
                                <div class="w-detail">
                                    <p class="w-title">Total</p>
                                    <p class="w-stats">405,506</p>
                                </div>
                                <div class="w-chart-render">
                                    <div class="customer-chart d-flex" style="min-height: 10rem">
                                        <div style="height: 60px; width: 100%;" class="align-self-end">
                                            <canvas id="totalProfitsChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget-sum">
                        <p> <span>13</span> this week</p>
                        <span class="badge badge-light-success">
                            + 13.6%
                            <i data-feather="trending-up"></i>
                        </span>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                      <div class="widget w-first">
                        <div class="widget-heading">
                            <span>Orders</span>
                            <i data-feather="shopping-cart"></i>
                        </div>
                        <div class="w-chart d-flex">
                            <div class="w-chart-section">
                                <div class="w-detail">
                                    <p class="w-title">Total</p>
                                    <p class="w-stats">405,506</p>
                                </div>
                                <div class="w-chart-render">
                                    <div class="customer-chart d-flex" style="min-height: 10rem">
                                        <div style="height: 60px; width: 100%;" class="align-self-end">
                                            <canvas id="totalOrdersChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget-sum">
                        <p> <span>13</span> this week</p>
                        <span class="badge badge-light-error">
                            - 13.6%
                            <i data-feather="trending-down"></i>
                        </span>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                      <div class="widget">
                        <div class="widget-heading mb-3">Revenue</div>
                        <div class="widget-content">
                          <canvas id="revenueChart"></canvas>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                      <div class="widget">
                        <div class="widget-heading mb-3">Sales by Category</div>
                        <div class="widget-content">
                          <canvas id="salesChartByCategory"></canvas>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget">
                            <div class="widget-heading d-block">
                                <div class="w-title">Daily Sales</div>
                                <div class="w-subtitle">Go to columns for details.</div>
                                <div class="widget-icon">
                                    <i class="fa-solid fa-dollar-sign" data-feather="dollar-sign"></i>
                                </div>
                            </div>
                            <div class="widget-content">
                                <canvas id="dailySalesChart" class="mt-5"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget">
                            <div class="widget-heading d-block">
                                <div class="w-title">Weekly Receipt</div>
                                <div class="widget-icon">
                                    <i class="fa-solid fa-file-text" data-feather="file-text"></i>
                                </div>
                            </div>
                            
                            <div class="widget-content">
                                <div style="height: 200px; width: 100%;" class="align-self-end">
                                    <canvas id="weeklyReceiptChart" class="mt-5"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget">
                            <div class="widget-heading d-block">
                                <div class="w-title">Inventory by Category</div>
                                <div class="widget-icon">
                                    <i class="fa-solid fa-archive" data-feather="archive"></i>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div style="height: 221px; width: 100%;" class="align-self-end">
                                    <canvas id="inventoryByCategoryChart" class="mt-3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget w-table">
                            <div class="widget-heading d-block">
                                <div class="w-title">Recent Orders</div>
                            </div>
                            <div class="widget-content">
                                <table class="table recent-orders">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="th-content">Customer</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Product</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Invoice</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Price</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Status</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name">
                                                    <img src="./assets/img/profile-13.jpeg">
                                                    <span class="ms-3">Luke Ivory</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content product-category">shoes</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-invoice">#46894</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$56.07</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-status">
                                                    <span class="badge bg-success">Paid</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name">
                                                    <img src="./assets/img/profile-13.jpeg">
                                                    <span class="ms-3">Luke Ivory</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content product-category">shirt</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-invoice">#46894</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$56.07</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-status">
                                                    <span class="badge bg-success">Paid</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name">
                                                    <img src="./assets/img/profile-13.jpeg">
                                                    <span class="ms-3">Luke Ivory</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content product-category">shirt</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-invoice">#46894</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$56.07</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-status">
                                                    <span class="badge bg-success">Paid</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name">
                                                    <img src="./assets/img/profile-13.jpeg">
                                                    <span class="ms-3">Luke Ivory</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content product-category">hoodie</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-invoice">#46894</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$56.07</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-status">
                                                    <span class="badge bg-success">Paid</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name">
                                                    <img src="./assets/img/profile-13.jpeg">
                                                    <span class="ms-3">Luke Ivory</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content product-category">sandal</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-invoice">#46894</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$56.07</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-status">
                                                    <span class="badge bg-success">Paid</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name">
                                                    <img src="./assets/img/profile-13.jpeg">
                                                    <span class="ms-3">Luke Ivory</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content product-category">hoodie</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-invoice">#46894</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$56.07</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-status">
                                                    <span class="badge bg-danger">Pending</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 pb-4">
                        <div class="widget w-table">
                            <div class="widget-heading d-block">
                                <div class="w-title">Top Selling Product</div>
                            </div>
                            <div class="widget-content">
                                <table class="table top-selling">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="th-content">Product</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Price</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Inventory</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Sold</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Action</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name d-flex">
                                                    <img src="./assets/img/DSC_0333-min.jpg">
                                                    <div class="row ms-3">
                                                        <span class="text-uppercase">sd0238</span>
                                                        <span class="sandal product-category">sandal</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$168.09</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-inventory">150</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-sold">170</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-detail">
                                                    <a href="#" class="text-decoration-none">
                                                        <i class="fa-solid fa-chevrons-right" data-feather="chevrons-right"></i>
                                                        <span>Detail</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name d-flex">
                                                    <img src="./assets/img/DSC_0333-min.jpg">
                                                    <div class="row ms-3">
                                                        <span class="text-uppercase">sd0238</span>
                                                        <span class="sandal product-category">sandal</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$168.09</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-inventory">150</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-sold">170</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-detail">
                                                    <a href="#" class="text-decoration-none">
                                                        <i class="fa-solid fa-chevrons-right" data-feather="chevrons-right"></i>
                                                        <span>Detail</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name d-flex">
                                                    <img src="./assets/img/DSC_0333-min.jpg">
                                                    <div class="row ms-3">
                                                        <span class="text-uppercase">sd0238</span>
                                                        <span class="shoes product-category">shoes</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$168.09</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-inventory">150</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-sold">170</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-detail">
                                                    <a href="#" class="text-decoration-none">
                                                        <i class="fa-solid fa-chevrons-right" data-feather="chevrons-right"></i>
                                                        <span>Detail</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name d-flex">
                                                    <img src="./assets/img/DSC_0333-min.jpg">
                                                    <div class="row ms-3">
                                                        <span class="text-uppercase">sd0238</span>
                                                        <span class="shirt product-category">shirt</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$168.09</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-inventory">150</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-sold">170</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-detail">
                                                    <a href="#" class="text-decoration-none">
                                                        <i class="fa-solid fa-chevrons-right" data-feather="chevrons-right"></i>
                                                        <span>Detail</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="td-content table-name d-flex">
                                                    <img src="./assets/img/DSC_0333-min.jpg">
                                                    <div class="row ms-3">
                                                        <span class="text-uppercase">sd0238</span>
                                                        <span class="hoodie product-category">hoodie</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content table-price">$168.09</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-inventory">150</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-sold">170</div>
                                            </td>
                                            <td>
                                                <div class="td-content table-detail">
                                                    <a href="#" class="text-decoration-none">
                                                        <i class="fa-solid fa-chevrons-right" data-feather="chevrons-right"></i>
                                                        <span>Detail</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection