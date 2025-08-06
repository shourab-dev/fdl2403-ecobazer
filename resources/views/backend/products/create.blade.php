@extends('layouts.app')
@section('backend')
@push('styles')
<link rel="stylesheet" href="{{ asset('backend/dist/css/rte_theme_default.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('backend/dist/js/rte.js') }}"></script>
<script src="{{ asset('backend/dist/js/all_plugins.js') }}"></script>
@endpush



<div class="card">
    <div class="card-header">
        Add Product
    </div>
    <div class="card-body">
        <form action="{{ route('backend.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="">Product Title <b class="text-theme-6">*</b></label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Product Price <b class="text-theme-6">*</b></label>
                                <input type="number" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Product Discount Price </label>
                                <input type="number" name="selling_price" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Product SKU </label>
                                <input type="text" name="sku" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="">Short Details</label>
                        <textarea name="short_details" id="short_detail"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Long Details</label>
                        <textarea name="long_details" id="long_detail"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Additional Info</label>
                        <textarea name="additional_info" id="additional_info"></textarea>
                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Featured <b class="text-theme-6">*</b></label>
                        <input type="file" class="featuredImage" name="featured_img">
                        @error('featured_img')
                            <span class="text-theme-6">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Gallery </label>
                        <input type="file" class="gallImage" name="gallImage[]" multiple>
                        @error('gallImage.*')
                        <span class="text-theme-6">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Category </label>
                        <select name="category" class="form-control">
                            <option disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    

                </div>
            </div>
            <button class="btn btn-primary w-full">Submit</button>
        </form>
    </div>
</div>


@push('scripts')

<script>
    $(document).ready(function(){
        $('#category_name').keyup(function(){
          let value = $(this).val()
          value = value.replaceAll(' ', '-').toLowerCase()
          $('#category_url').val(value)
        })
        FilePond.registerPlugin(FilePondPluginImagePreview);
        $('.featuredImage').filepond({
            storeAsFile: true
        });
        $('.gallImage').filepond({
            storeAsFile: true,
            multiple: true,
        });

        new RichTextEditor("#short_detail");
        new RichTextEditor("#long_detail");
        new RichTextEditor("#additional_info");
        

       })

</script>
@endpush
@endsection