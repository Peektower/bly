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
                            <h3 class="fw-bold mb-0">Products Add</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-12 mb-12">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Product information</h6>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('admin.products-store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-6">
                                            <label  class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <select id="optgroup" class="ms w-100" name="category_id">
                                                @forelse($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Price</label>
                                            <input type="number" name="price" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Discount</label>
                                            <div class="input-group mb-3">
                                                <input type="number" name="discount" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Quantity</label>
                                            <div class="input-group mb-3">
                                                <input type="number" name="quantity" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Product Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->

            </div>
        </div>

    </div>
@endsection
