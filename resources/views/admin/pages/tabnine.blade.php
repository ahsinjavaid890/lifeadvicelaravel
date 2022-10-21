<div class="tab-pane fade" id="tab9">
    <div class="row">
        <div class="col-md-12">
            @if($data->url == 'life-insurance')
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Vector</th>
                        <th>Heading</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(DB::table('section_three_elements')->where('type' , 'beautifulcards')->where('page' , $data->url)->get() as $r)
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
            <div class="form-group">
                <label>Sec Eight description</label>
                 <textarea class="summernote" name="life_seven_description"></textarea>
            </div>
            @endif
        </div>
    </div>
 </div>