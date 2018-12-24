@extends('layouts.front_layout')
@section('title', 'Article')
@section('content')

<div class="main-body">
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog">
                        <span class="left-shadow"></span>
                        <h3 class="blog-head">Order</h3>
                        <span class="right-shadow"></span>
                    </div>

                    <div class="row">
                        <div class="col-md-12 blog-list">
                                <div class="blog-post-small">
                                    <ul class="blog-post-info">
                                        <div class="col-lg-12">
                                            <?php
                                            $message=Session::get('message');
                                            if ($message) {
                                                echo '<div class="alert alert-success alert-dismissable">'.$message.'</div>';
                                                Session::put('message', null);
                                            }
                                            ?>
                                        </div>
                                    </ul>

                                    <div class="post-content">
                                        <form class="" action="{{route('orders.store')}}" method="post">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">

                                                    <!-- First name -->
                                                    <div class="form-group">
                                                        <label for="customer_first_name">First name*</label>
                                                        <input type="text" @if($errors->has('first_name')) class="invalid-block"  @endif name="first_name" id="customer_first_name" value="{{old('first_name')}}" class="form-control" />
                                                        @if($errors->has('first_name'))
                                                            <div class="text-danger">
                                                                {{$errors->first('first_name')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- Last name -->
                                                    <div class="form-group">
                                                        <label for="customer_last_name">Last name*</label>
                                                        <input type="text" name="last_name" id="customer_last_name" value="{{old('last_name')}}" class="form-control" @if($errors->has('last_name')) class="invalid-block"  @endif/>
                                                        @if($errors->has('last_name'))
                                                            <div class="text-danger">
                                                                {{$errors->first('last_name')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div> <!-- / .row -->

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!-- Email -->
                                                    <div class="form-group">
                                                        <label for="customer_email">Email*</label>
                                                        <input type="email" name="email" id="customer_email" value="{{old('email')}}"class="form-control"/>
                                                        @if($errors->has('email'))
                                                            <div class="text-danger">
                                                                {{$errors->first('email')}}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!-- Services -->
                                                    <div class="form-group">
                                                        <label>Choose one or more services*</label>
                                                        <p class="text-danger d-none" id="select_service">Please select at least one service.</p>

                                                        <div class="row" id ="service_checkboxes">
                                                            <div class="col-md-6">
                                                                <div class="custom-controls-stacked">
                                                                    <div class="col-lg-12 custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="clipping_path_radio" value="Clipping path" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="clipping_path_radio">
                                                                            Clipping path
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Hand-drawn digital photo cut-out; used for background removal; also known as deep etching service, photo cut-out, closed vector path or shape"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-lg-12 custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="multi_clipping_radio" value="Multi-clipping path" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="multi_clipping_radio">
                                                                            Multi-clipping path
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Select individual areas within an image; helpful if you need color correction applied to your image"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-lg-12 custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="image_masking_radio" value="Image masking" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="image_masking_radio">
                                                                            Image masking
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Remove the background from images that have subjects with hair or fur"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-lg-12 custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="ghost_mannequin_radio" value="Mirroring Effect" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="ghost_mannequin_radio">
                                                                            Mirroring Effect
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Make clothing and accessories appear more lifelike"></i>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-6">

                                                                <div class="col-lg-12 custom-controls-stacked">
                                                                    <div class="custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="drop_shadow_radio" value="Drop shadow" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="drop_shadow_radio">
                                                                            Drop shadow
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Add depth and texture; drop shadow, natural shadow, existing/cast shadow or floating shadow and reflections"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="photo_retouching_radio" value="Photo retouching" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="photo_retouching_radio">
                                                                            Photo retouching
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Makes your images sharper and more refined"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="color_variants_radio" value="Photo manipulation" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="color_variants_radio">
                                                                            Photo manipulation
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Create product images for all color variations of a single product"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox mb-2">
                                                                        <input type="checkbox" name="service[]" id="vector_conversion_radio" value=" Vector conversion" class="custom-control-input" />
                                                                        <label class="custom-control-label" for="vector_conversion_radio">
                                                                            Vector conversion
                                                                            <i class="icon-info-with-circle" data-toggle="tooltip" title="Raster to vector file conversion done by hand"></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="quotation_quantity">Optional Service Name</label>
                                                        <input type="text" name="optional_service" id="quotation_quantity" value="" class="form-control"/>
                                                    </div>
                                                </div>

                                            </div> <!-- / .row -->

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <!-- Images to quote -->
                                                    <div class="form-group">
                                                        <label for="quotation_quantity">How many images do you need?*</label>
                                                        <input type="number" name="image_quantity" id="quotation_quantity" value="" class="form-control" required="required" min="1" max="99999" />
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">

                                                    <!-- Images to edit -->
                                                    <div class="form-group">
                                                        <label for="quotation_yearly_quantity_id">How many images do you need edited annually?*</label>
                                                        <select class="custom-select" required="required" name="yearly_quantity" id="quotation_yearly_quantity_id"><option value="">Select</option>
                                                            <option value="Just this one">Just this one</option>
                                                            <option value="1-100">1-100</option>
                                                            <option value="101-1,000">101-1,000</option>
                                                            <option value="1,001-10,000">1,001-10,000</option>
                                                            <option value="10,000">&gt;10,000</option></select>
                                                    </div>

                                                </div>

                                            </div> <!-- / .row -->

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div id ="col-lg-12 return_file_format_dropdown_menu">
                                                            <label for="quotation_return_file_format">Return file format*</label>
                                                            <select name="return_file_format" id="quotation_return_file_format" class="custom-select return_file_format_dropdown_menu" required="required" data-return-file-format-url="/a/portal/get_return_file_formats"><option value="">Select</option><option value="Illustrator (AI)">Illustrator (AI)</option>
                                                                <option value="Illustrator (EPS)">Illustrator (EPS)</option>
                                                                <option value="Illustrator (SVG)">Illustrator (SVG)</option>
                                                                <option value="JPEG–custom background">JPEG–custom background</option>
                                                                <option value="JPEG–original background">JPEG–original background</option>
                                                                <option value="JPEG–white background">JPEG–white background</option>
                                                                <option value="PDF">PDF</option>
                                                                <option value="PNG–custom background">PNG–custom background</option>
                                                                <option value="PNG–transparent background">PNG–transparent background</option>
                                                                <option value="PNG–white background">PNG–white background</option>
                                                                <option value="PSD–custom background">PSD–custom background</option>
                                                                <option value="PSD–layer mask">PSD–layer mask</option>
                                                                <option value="PSD–original background">PSD–original background</option>
                                                                <option value="PSD–transparent background">PSD–transparent background</option>
                                                                <option value="PSD–white background">PSD–white background</option>
                                                                <option value="TIFF–custom background">TIFF–custom background</option>
                                                                <option value="TIFF–layer mask">TIFF–layer mask</option>
                                                                <option value="TIFF–original background">TIFF–original background</option>
                                                                <option value="TIFF–transparent background">TIFF–transparent background</option>
                                                                <option value="TIFF–white background">TIFF–white background</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--<div class="col-md-6">--}}

                                                    {{--<!-- Image size -->--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label>--}}
                                                            {{--Do you need your images resized?*--}}
                                                        {{--</label>--}}
                                                        {{--<div class="custom-control custom-radio">--}}
                                                            {{--<input type="radio" name="resize_image" id="quotation_resize_image_true" value="true" class="custom-control-input" />--}}
                                                            {{--<label class="custom-control-label" for="quotation_resize_image_true">Yes</label>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="custom-control custom-radio">--}}
                                                            {{--<input type="radio" name="resize_image" id="quotation_resize_image_false" value="false" class="custom-control-input" required="required" />--}}
                                                            {{--<label class="custom-control-label" for="quotation_resize_image_false">No</label>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 ">

                                                    <!-- Comments -->
                                                    <div class="form-group">
                                                        <label for="quotation_additional_comment">Additional comments (optional)</label>
                                                        <textarea name="additional_comment" id="quotation_additional_comment" class="form-control"  rows="4">{{old('additional_comment')}}</textarea>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <!-- Submit button -->
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success quote_submit_button" data-disable-with="" >SUBMIT ORDER REQUEST</button>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="section section_main mb-5">
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</main>
@endsection