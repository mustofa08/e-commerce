@extends('layouts.admin')
@section('content')
<div class="main-content-inner">

<div class="main-content-wrap">
    <div class="tf-section-2 mb-30">
        <div class="flex gap20 flex-wrap-mobile">
            <div class="w-half">

                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Total Orders</div>
                                <h4>{{$dashbordDatas[0]->Total}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Total Amount</div>
                                <h4>{{$dashbordDatas[0]->TotalAmount}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Pending Orders</div>
                                <h4>{{$dashbordDatas[0]->TotalOrdered}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Pending Orders Amount</div>
                                <h4>{{$dashbordDatas[0]->TotalOrderedAmount}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-half">

                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Delivered Orders</div>
                                <h4>{{$dashbordDatas[0]->TotalDelivered}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Delivered Orders Amount</div>
                                <h4>{{$dashbordDatas[0]->TotalDeliveredAmount}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Canceled Orders</div>
                                <h4>{{$dashbordDatas[0]->TotalCanceled}}</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="wg-chart-default">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap14">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Canceled Orders Amount</div>
                                <h4>{{$dashbordDatas[0]->TotalCanceledAmount}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Monthly Revenue</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                    </button>
                </div>
            </div>
            <div class="flex flex-wrap gap40">
                <div>
                    <div class="mb-2">
                        <div class="block-legend">
                            <div class="dot t1"></div>
                            <div class="text-tiny">Total</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>${{$TotalAmount}}</h4>
                    </div>
                </div>
                <div>
                    <div class="mb-2">
                        <div class="block-legend">
                            <div class="dot t2"></div>
                            <div class="text-tiny">Pending</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>${{$TotalOrderedAmount}}</h4>
                    </div>
                </div>
                <div>
                    <div class="mb-2">
                        <div class="block-legend">
                            <div class="dot t2"></div>
                            <div class="text-tiny">Delivered</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>${{$TotalDeliveredAmount}}</h4>
                    </div>
                </div>
                <div>
                    <div class="mb-2">
                        <div class="block-legend">
                            <div class="dot t2"></div>
                            <div class="text-tiny">Cancelede</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>${{$TotalCanceledAmount}}</h4>
                    </div>
                </div>
            </div>
            <div id="line-chart-8"></div>
        </div>

    </div>
    <div class="tf-section mb-30">

        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Recent orders</h5>
                <div class="dropdown default">
                    <a class="btn btn-secondary dropdown-toggle" href="{{route('admin.orders')}}">
                        <span class="view-all">View all</span>
                    </a>
                </div>
            </div>
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 80px">OrderNo</th>
                                <th>Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Subtotal</th>
                                <th class="text-center">Tax</th>
                                <th class="text-center">Total</th>

                                <th class="text-center">Status</th>
                                <th class="text-center">Order Date</th>
                                <th class="text-center">Items</th>
                                <th class="text-center">Delivered On</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="text-center">{{$order->id}}</td>
                                <td class="text-center">{{$order->name}}</td>
                                <td class="text-center">{{$order->phone}}</td>
                                <td class="text-center">${{$order->subtotal}}</td>
                                <td class="text-center">${{$order->tax}}</td>
                                <td class="text-center">${{$order->total}}</td>
                                <td class="text-center">
                                    @if ($order->status == 'delivered')
                                        <span class="badge bg-success">Delivered</span>
                                    @elseif($order->status == 'canceled')
                                        <span class="badge bg-danger">Canceled</span>
                                    @else
                                        <span class="badge bg-warning">Ordered</span>
                                    @endif
                                </td>
                                <td class="text-center">{{$order->created_at}}</td>
                                <td class="text-center">{{$order->orderitems->count()}}</td>
                                <td class="text-center">{{$order->delivered_date}}</td>
                                <td class="text-center">
                                    <a href="{{route('user.order.details',['order_id'=>$order->id])}}">
                                        <div class="list-icon-function view-icon">
                                            <div class="item eye">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection

@push('scripts')

<script> 
    $(function(){
        $("#search-input").on("keyup",function(){
            var searchQuery = $(this).val();
            if(searchQuery.length > 2)
            {
              $.ajax({
                type: "GET",
                url: "{{route('admin.search')}}",
                data: {query: searchQuery},
                dataType: 'json',
                success: function(data){
                  $("#box-content-search").html('');
                  $.each(data,function(index,item){
                    var url = "{{route('admin.product.edit',['id'=>'product_id'])}}";
                    var link = url.replace('product_id',item.id);

                    $("#box-content-search").append(`
                        <li>
                            <ul>
                                <li class="product-item gap14 mb-10">
                                    <div class="image no-bg">
                                      <img src="${'{{ asset('uploads/products/thumbnails') }}'}/${item.image}" alt="${item.name}">
                                    </div>
                                  <div class="flex items-center justify-between gap20 flex-grow">
                                      <div class="name">
                                        <a href="${link}" class="body-text">${item.name}</a>
                                      </div>
                                  </div>
                                </li>
                                <li class="mb-10">
                                    <div class="divider"></div>
                                </li>
                            </ul>
                        </li>
                    `);
                  });
                }

              });
            }
        });
    });
  </script>

<script>
    (function ($) {

        var tfLineChart = (function () {

            var chartBar = function () {

                var options = {
                    series: [{
                        name: 'Total',
                        data: [{{$AmountM}}]
                    }, {
                        name: 'Pending',
                        data: [{{$OrderedAmountM}}]
                    },
                    {
                        name: 'Delivered',
                        data: [{{$DeliveredAmountM}}]
                    }, {
                        name: 'Canceled',
                        data: [{{$CanceledAmountM}}]
                    }],
                    chart: {
                        type: 'bar',
                        height: 325,
                        toolbar: {
                            show: false,
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '10px',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: false,
                    },
                    colors: ['#2377FC', '#FFA500', '#078407', '#FF0000'],
                    stroke: {
                        show: false,
                    },
                    xaxis: {
                        labels: {
                            style: {
                                colors: '#212529',
                            },
                        },
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    },
                    yaxis: {
                        show: false,
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return "$ " + val + ""
                            }
                        }
                    }
                };

                chart = new ApexCharts(
                    document.querySelector("#line-chart-8"),
                    options
                );
                if ($("#line-chart-8").length > 0) {
                    chart.render();
                }
            };

            /* Function ============ */
            return {
                init: function () { },

                load: function () {
                    chartBar();
                },
                resize: function () { },
            };
        })();

        jQuery(document).ready(function () { });

        jQuery(window).on("load", function () {
            tfLineChart.load();
        });

        jQuery(window).on("resize", function () { });
    })(jQuery);
</script>
    
@endpush