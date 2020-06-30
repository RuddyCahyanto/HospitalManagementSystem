 <div class="panel-body">
  <div class="row">
    <div class="col-md-4">
      {{-- return error while validation failed --}}
      @if (count($errors))
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="form-group">
        <label for="kelurahan">Kelurahan</label>
        {!! Form::text('nama_kelurahan', null, ['class' => 'form-control', 'id' => 'kelurahan', 'placeholder' => 'Nama kelurahan']) !!}
      </div>
      <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        {!! Form::text('nama_kecamatan', null, ['class' => 'form-control', 'id' => 'kecamatan', 'placeholder' => 'Nama kecamatan']) !!}
      </div>
      <div class="form-group">
        <label for="kabupaten">Kabupaten/Kota</label>
        {!! Form::text('nama_kota', null, ['class' => 'form-control', 'id' => 'kabupaten', 'placeholder' => 'Nama kabupaten/kota']) !!}
      </div>
      <button type="submit" class="btn btn-primary">{{ ! empty($kelurahan->id) ? "Update" : "Submit" }}</button>
    </div>
  </div>
</div>
