@extends('layouts.admin_layout')
@section('title', 'Site Configuration')
@section('admin_content')
<div class="app-title">
    <div>
        <h1><i class="fa fa-user"></i> Site Configuration</h1>
        <p>Add basic informations of this website</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{url('users/create')}}">Site Configuration</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="row">
                <div class="col-lg-5">
                    <form>
                        <h3>Website Information</h3>
                        <div class="form-group">
                            <label for="websiteName">Website Name</label>
                            <input class="form-control" name="website_name" id="websiteName" type="text" placeholder="Enter website name">
                        </div>
                        <div class="form-group">
                            <label for="websiteEmail">Website Email</label>
                            <input class="form-control" name="website_email" id="websiteEmail" type="text" placeholder="Enter website email">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Branding Message</label>
                            <textarea class="form-control" name="message" id="exampleTextarea" rows="2" placeholder="Enter a message that brand your website"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Website Logo</label>
                            <input class="form-control" name="logo" type="file" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Favicon</label>
                            <input class="form-control" name="favicon"  type="file">
                        </div>
                        <hr>
                        <h3>Company Information</h3>
                        <div class="form-group">
                            <label for="companyName">Company Name</label>
                            <input class="form-control" name="company_name" id="companyName" type="text" placeholder="Enter company name">
                        </div>
                        <div class="form-group">
                            <label for="licence">Licence No.</label>
                            <input class="form-control" name="licence_number" id="licence" type="text" placeholder="Enter Licence No.">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" name="address" id="address" type="text" placeholder="Enter Address">
                        </div>

                </div>
                <div class="col-lg-5 offset-lg-1">
                    <h3>Social Links</h3>
                        <div class="form-group">
                            <label class="control-label">Enter Social Profile Links</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-facebook"></i></span></div>
                                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Enter Facebook timeline/page link">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-twitter"></i></span></div>
                                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Enter Twitter profile link">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-youtube"></i></span></div>
                                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Enter youtube channel link">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-flickr"></i></span></div>
                                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Enter Flicker profile link">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-linkedin"></i></span></div>
                                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Enter Linkdin profile link">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-google-plus"></i></span></div>
                                    <input class="form-control" id="exampleInputAmount" type="text" placeholder="Enter google+ profile link">
                                </div>
                            </div>
                            <hr>
                            <h3>Owners Information</h3>
                            <div class="form-group">
                                <label for="websiteName">Owners Name</label>
                                <input class="form-control" id="owner_name" type="text" placeholder="Enter owner name">
                            </div>
                            <div class="form-group">
                                <label for="websiteName">Phone Number</label>
                                <input class="form-control" id="owner_phone" type="text" placeholder="Enter phone number">
                            </div>
                            <div class="form-group">
                                <label for="websiteName">Email</label>
                                <input class="form-control" id="owner_email" type="text" placeholder="Enter email">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </div>
    </div>
</div>

@endsection