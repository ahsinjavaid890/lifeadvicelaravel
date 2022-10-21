<div class="tab-pane fade" id="tab4">
    <div class="row">
        <div class="col-md-12">
           @if($data->url == 'resp')
        <div class="form-group">
            <label>Claim Description</label>
            <textarea class="summernote" name="resp_four_description"></textarea>
        </div>
        <div class="form-group">
            <label>Claim Vector</label>
            <input type="file" style="height:45px;" class="form-control" name="resp_four_vector">
        </div>
       @endif
            @if($data->url == 'claim')
            <div class="form-group">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#questions"><i class="fa fa-plus"></i>Add New Questions</a>
            </div>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(DB::table('section_three_elements')->where('type' , 'claimproducts')->where('page' , $data->url)->get() as $r)
                <tr>
                    <td>
                        <img width="120" src="{{ url('public/images') }}/{{ $r->vector }}">
                    </td>
                    <td>{!! $r->heading !!}</td>
                    <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#section_three_elements{{ $r->id }}"><i class="fa fa-edit"></i>Edit 1</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
            @endif
             @if($data->url == 'health-insurance')
                <div class="form-group">
                    <label>Sec Four Heading</label>
                    <input class="form-control" name="health_four_heading">
                </div> 
                <div class="form-group">
                    <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                    <input type="text" class="form-control" name="health_four_lists">
                </div>
                <div class="form-group">
                    <label>Section Four Vector</label>
                    <input type="file" style="height:45px;" class="form-control" name="health_four_vector">
                </div>
             @endif
             @if($data->url == 'critical-illness')
                <div class="form-group">
                    <label>Sec Four Heading</label>
                    <input class="form-control" name="desability_four_critical">
                </div>   
                <div class="form-group">
                    <label>Sec Four Description</label>
                    <textarea class="summernote" name="critical_four_description"></textarea>
                </div>  
                <div class="form-group">
                    <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                    <input type="text" class="form-control" name="desability_four_lists">
                </div>
                <div class="form-group">
                    <label>Section Four Vector</label>
                    <input type="file" style="height:45px;" class="form-control" name="desability_four_vector">
                </div>
               @endif
             @if($data->url == 'desability')
                <div class="form-group">
                    <label>Sec Four Heading</label>
                    <input class="form-control" name="desability_four_heading">
                </div>   
                <div class="form-group">
                    <label>Section Lists<small class="text-danger">Add Comma <b>,</b> for Seprator</small></label>
                    <input type="text" class="form-control" name="desability_four_lists">
                </div>
                <div class="form-group">
                    <label>Section Four Vector</label>
                    <input type="file" style="height:45px;" class="form-control" name="desability_four_vector">
                </div>
               @endif
             @if($data->url == 'life-insurance')
                <div class="form-group">
                    <label>Sec Four Heading</label>
                    <textarea class="summernote" name="life_four_description"></textarea>
                </div>
                <div class="form-group">
                    <label>Section Four Vector</label>
                    <input type="file" style="height:45px;" class="form-control" name="life_four_vector">
                </div>
               @endif
            @if($data->url == 'aboutus')
                <div class="form-group">
                    <label>About Vector Image </label>
                    <input type="file" style="height:45px;" class="form-control" name="about_four_vector">
                </div>
                <div class="form-group">
                    <label>Center Image </label>
                    <input type="file" style="height:45px;" class="form-control" name="center_card_image">
                </div>
                <div class="row mb-2">
                    <div class="col-md-12 text-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary"data-toggle="modal" data-target="#aboutcard"><i class="fa fa-plus"></i>Add New Questions</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>About Heading</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                            <td><a href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
                        </tr> 
                    </tbody>
                </table>
            @endif
            @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')                                   
            <div class="form-group">
                <label>Vector Image</label>
                <input type="file" style="height:45px;" class="form-control" name="section_four_vector">
            </div>
            <div class="form-group">
                <label>Heading</label>
                <textarea class="summernote-heading" name="section_four_heading">{{ $data->section_four_heading }}</textarea>
            </div>
            @endif
            <div class="form-group">
                <label>Sec four Description</label>
                <textarea class="summernote" name="section_four_description">{{ $data->section_four_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Sec four Notice</label>
                <input type="text" class="form-control" value="{{ $data->section_four_notice }}" name="section_four_notice">
            </div>
            @if($data->url == 'super-visa-insurance' || $data->url == 'visitor-insurance' || $data->url == 'travel-insurance' || $data->url == 'student-insurance')   
            <div class="form-group">
                <label>Section Lists<small class="text-danger"> Add Comma <b>,</b> for Seprator</small></label>
                <textarea class="form-control" name="section_four_lists">{{ $data->section_four_lists }}</textarea>
            </div>
            @endif
        </div>
    </div>
</div>