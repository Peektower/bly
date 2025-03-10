@extends('layouts.admin')
@section('content')
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        @include('partials.admin.header')

        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Orders List</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row g-3 mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Payment Info</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $or)
                                    <tr>
                                        <td><a href="{{route('order.edit', $or->id)}}"><strong>#{{$or->order_number}}</strong></a></td>
                                        <td>{{$or->user->name}}</td>
                                        <td>{{$or->payment_method}}</td>
                                        <td>
                                            NLe{{$or->grand_total}}
                                        </td>
                                        <td><span class="badge bg-warning">Progress</span></td>
                                    </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->
            </div>
        </div>


    </div>
@endsection
