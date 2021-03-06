@extends('admin.layouts.main')
@section('content')
<div class="row">
    @if (Session::has('success'))
        <div class= "alert alert-block alert-success">{{Session::get('success')}} </div>
    @endif
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">product table</h3>
        <div class="table-data__tool">

            <div class="table-data__tool-right">
                <a href="{{ route('products.create') }}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add product</button></a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>company</th>
                        <th>category</th>
                        <th>color</th>
                        <th>variants</th>
                        <th>status</th>
                        <th>price</th>
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
                            @if(!empty($product->attribute) && array_key_exists('color',$product->attribute))
                                <ul class="list-unstyled">
                                    @foreach ($product->attribute['color'] as $color)
                                        <li class="text-capitalize">{{$color}},</li>
                                    @endforeach
                                </ul>
                            @endif
                        </td>
                        <td></td>
                        <td></td>
                        <td class="code"><s class="text-faded">{{$product->product_price_before_discount}}</s>&nbsp; {{$product->product_price}} </td>

                        <td>
                            <div class="table-data-feature">
                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button> --}}

                                <a class="item" href="{{route('products.edit',$product->id)}}" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>

                                <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>

                                </form>
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
