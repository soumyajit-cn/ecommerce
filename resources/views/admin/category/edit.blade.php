@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Edit category</div>
            <div class="card-body card-block">
                <form action="{{route('categories.update',$categorydata->id)}}" method="post" class="">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Type</div>
                                <select name="parent_category" id="select" class="form-control">
                                    <option value="">Select Category</option>
                                    <option value="0" {{ $categorydata->parent_id === 0 ? 'selected' : '' }}>Parent</option>
                                    @foreach ($categories as $category )
                                        <option value="{{$category->id}}" {{ $categorydata->parent_id === $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            @error('parent_category')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class=" col form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Name</div>
                                <input type="text" name="category_name" value="{{$categorydata->category_name}}" class="form-control">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            @error('category_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="col col-md-2">
                                <label for="textarea-input" class=" form-control-label text-center">Description</label>
                            </div>
                            <div class="col-12 col-md-10">
                                <textarea name="category_desc" id="textarea-input" rows="5" placeholder="Content..." class="form-control">{{$categorydata->category_description}}</textarea>
                                @error('category_desc')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
