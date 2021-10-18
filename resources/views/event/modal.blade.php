<!-- MULAI MODAL FORM TAMBAH/EDIT-->
<div class="modal fade" id="tambah-edit-event" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modal-judul"></h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="event_id" id="event_id">
                    <div class="form-group">
                        <label>Poster Event<br><small>try to upload file larger than 100 KB</small></label>


                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K" name="image" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" class="form-control" placeholder="Enter Event Name" name="event_name"
                            value="" />
                    </div>
                    <div class="form-group">
                        <label>Category Event</label>
                        <select class="form-control show-tick" name="category_event_id">
                            <option value="">Select Category</option>
                            @foreach ($category_event as $ce)
                            <option value="{{$ce->category_event_id}}">{{$ce->category_event_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Event Type</label>
                            <select class="form-control show-tick" name="event_type_id">
                                <option value="">Select Event Type</option>
                                @foreach ($event_type as $et)
                                <option value="{{$et->event_type_id}}">{{$et->event_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Price (Rp.)</label>
                            <input type="text" class="form-control" placeholder="Enter Price Venue" name="price"
                                value="" />

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Event Venue</label>
                        <input type="text" class="form-control" placeholder="Enter Event Venue" name="venue" value="" />
                    </div>
                    <div class="form-group">
                        <label>Narasumber</label>
                        <select class="form-control show-tick" name="speaker" value="">
                            <option>Select Narasumber</option>
                            @foreach ($speaker as $s)
                            <option value="{{$s->speaker_id}}">{{$s->speaker_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Reward Event</label>
                        <select class="form-control show-tick" name="reward_event_id">
                            <option>Select Reward Event</option>
                            @foreach ($reward_event as $re)
                            <option value="{{$re->reward_event_id}}">{{$re->reward_event_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Start Date</label>
                            <input type="datetime-local" class="form-control" placeholder="Enter Event Venue"
                                name="start_date" value="" />

                        </div>
                        <div class="col-lg-6">
                            <label>End Date </label>
                            <input type="datetime-local" class="form-control" placeholder="Enter Event Venue"
                                name="end_date" value="" />
                        </div>
                    </div>

                    <!-- <div class="form-group m-t-20 m-b-20">
                    <label>Poster Event</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for 
                    the above input. It's a bit lighter and easily wraps to a new line.</small> 
                    </div> -->
                    <label>Description Event</label>
                    <div class="summernote">
                        <!-- <h3 class="m-b-0">hi,</h3>
                    <h4 class="m-t-0">we are Summernote</h4> -->
                        {{-- <p></p> --}}
                    </div>
                    <button type="submit" class="btn btn-block btn-primary   m-t-20">CREATE</button>
                </form>

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- AKHIR MODAL -->

<!-- MULAI MODAL KONFIRMASI DELETE-->

<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">PERHATIAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p><b>Jika menghapus data ini maka</b></p>
                <p>*data tersebut hilang selamanya, apakah anda yakin?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus" value="delete">Hapus
                    Data</button>

            </div>
        </div>
    </div>
</div>

<!-- AKHIR MODAL -->