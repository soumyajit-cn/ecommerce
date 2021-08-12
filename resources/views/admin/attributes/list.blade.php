@extends('admin.layouts.main')
@section('content')
<div class="row">
    @if (Session::has('success'))
        <div class= "alert alert-block alert-success">{{Session::get('success')}} </div>
    @endif
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">product table</h3>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>company</th>
                        <th>category</th>
                        <th>status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="tr-shadow">
                        <td><span class="block-email">{{$product->product_name}}</span></td>
                        <td class="text-wrap" >
                            <span>{{$product->product_company}}</span>
                        </td>
                        {{-- <td class="desc">{{$product->product_company}}</td> --}}
                        <td><ul class="list-unstyled">
                                @foreach ($product->categories as $category)
                                    <li class="text-capitalize">{{$category->category_name}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <span class="status--{{$product->in_stock === 0 ? 'denied' : 'process'}}">{{$product->in_stock === 0 ? 'Out of Stock' : 'In Stock'}}</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-eye"></i>
                                </button> --}}

                                <a class="item" href="{{route('attributes.add',$product->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" title="Add Attributes">
                                    <i class="zmdi zmdi-plus"></i>
                                </a>
                                @if(!empty($product->attributes))
                                    <a class="item" href="{{route('attributes.edit',$product->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" title="Edit Attributes">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection
