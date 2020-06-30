<div class="panel-body">
 <div class="row">
   <div class="col-md-12">
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
       <label for="nama">Nama Lengkap:</label>
       {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama', 'placeholder' => 'Nama lengkap']) !!}
     </div>
     <div class="form-group">
       <label for="tgl_lahir">Tanggal Lahir:</label>
       {!! Form::date('tgl_lahir', null, ['class' => 'form-control', 'id' => 'tgl_lahir', 'placeholder' => 'Tanggal lahir']) !!}
     </div>
     <div class="form-group">
       <label for="jns_kelamin">Jenis Kelamin:</label>
       <div class="radio">
         <label>{!! Form::radio('jns_kelamin', 'Laki-laki', true) !!} Laki-laki </label>
         &nbsp
         <label>{!! Form::radio('jns_kelamin', 'Perempuan', false) !!} Perempuan </label>
       </div>
     </div>

     <div class="form-group">
       <label for="alamat">Alamat:</label>
       {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat', 'placeholder' => 'Alamat']) !!}
     </div>
     <div class="form-group">
       <label for="rt">RT:</label>
       {{ Form::number('rt', null, ['class' => 'form-control', 'placeholder' => 'Tanpa 0 di depan, contoh: 1']) }}
     </div>
     <div class="form-group">
       <label for="rw">RW:</label>
       {{ Form::number('rw', null, ['class' => 'form-control', 'placeholder' => 'Tanpa 0 di depan, contoh: 1']) }}
     </div>
     <div class="form-group">
       <label for="kelurahan">Kelurahan:</label>
       {!! Form::select('kelurahan_id', App\Model\Kelurahan::orderBy('nama_kelurahan', 'asc')->pluck('nama_kelurahan', 'id'), null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
       <label for="no_telepon">Nomor Telepon/HP</label>
       {{ Form::number('no_telepon', null, ['class' => 'form-control', 'id' => 'no_telepon', 'placeholder' => '08xxxxxxxxxx']) }}
     </div>

     <button type="submit" class="btn btn-primary">{{ ! empty($kelurahan->id) ? "Update" : "Submit" }}</button>

   </div>

 </div>
</div>
