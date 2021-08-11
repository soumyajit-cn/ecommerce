@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add category</div>
                <div class="card-body card-block">
                    <form action="{{route('products.store')}}" method="post" class="">
                        @csrf
                        <div class="form-row">
                            <div class="col form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Type</div>
                                    <select name="parent_category" id="select" class="form-control">
                                        <option value="">Select Category</option>
                                        {{-- an<option value="0" {{ old('parent_category') === 0 ? 'selected' : '' }}>Parent</option> --}}
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" {{ old('parent_category') == $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
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
                                    <input type="text" name="category_name" class="form-control">
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
                                <div class="input-group-addon">Attributes</div>
                                <select name="parent_category" id="select" class="form-control">
                                    <option value="">Select Category</option>
                                    {{-- an<option value="0" {{ old('parent_category') === 0 ? 'selected' : '' }}>Parent</option> --}}
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{ old('parent_category') == $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
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

                        <div class="form-group">
                            <div class="input-group">
                                <div class="col col-md-2">
                                    <label for="textarea-input" class=" form-control-label text-center">Description</label>
                                </div>
                                <div class="col-12 col-md-10">
                                    <textarea name="category_desc" id="textarea-input" rows="5" placeholder="Content..." class="form-control">{{old('category_desc')}}</textarea>
                                    @error('category_desc')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <fieldset class="the-fieldset rounded">
                                <legend class="the-legend badge badge-secondary px-2 text-uppercase">Mandatory Images</legend>
                                <div class="d-flex">
                                    <div class="col-12 col-md-6">
                                        <label>Front</label>
                                        <div class="custom-file mb-3 ">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Back</label>
                                        <div class="form-group custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <fieldset class="the-fieldset rounded">
                                <legend class="the-legend badge badge-secondary px-2 text-uppercase">Optional Images</legend>
                                <div class="d-flex">
                                    <div class="col-12 col-md-4">
                                        <label>Optional 1</label>
                                        <div class="custom-file mb-3 ">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label>Optional 2</label>
                                        <div class="form-group custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <label>Optional 3</label>
                                        <div class="form-group custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
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
