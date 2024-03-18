@extends('layouts.main')
@section('content')
        <div class="col-md-12" style="margin-top: 5%">
      <form action="{{URL::to('/')}}/product/import_product" method="post" enctype="multipart/form-data">
      @csrf
        <h3 class="text-center mb-4">Unesi CSV</h3>
        <div class="profile text-center mb-4">
          <div class="drag">
             <div class="upload-drop-zone" id="drop-zone">
                <label class="btn-bs-file brow">
                  <input type="file" name="csv_file" id="csv_file" />
                </label>
             </div>
          </div>
       </div>
        
        <div class="innerryt_linkbtn text-center">
          <button class="btn btn-primary" type="submit">Unesi</button>
        </div>
        </form>

        <div class="text-center mt-4">
          <a href="{{ route('index') }}">NAZAD</a>
      </div>
     </div>
@stop