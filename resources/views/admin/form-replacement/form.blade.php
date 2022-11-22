<div class="form-group {{ $errors->has('namaLengkap') ? 'has-error' : ''}}">
    <label for="namaLengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="namaLengkap" type="text" id="namaLengkap" value="{{ isset($formreplacement->namaLengkap) ? $formreplacement->namaLengkap : ''}}" >
    {!! $errors->first('namaLengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mataKuliah') ? 'has-error' : ''}}">
    <label for="mataKuliah" class="control-label">{{ 'Mata Kuliah' }}</label>
    <input class="form-control" name="mataKuliah" type="text" id="mataKuliah" value="{{ isset($formreplacement->mataKuliah) ? $formreplacement->mataKuliah : ''}}" >
    {!! $errors->first('mataKuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label for="kelas" class="control-label">{{ 'Kelas' }}</label>
    <input class="form-control" name="kelas" type="text" id="kelas" value="{{ isset($formreplacement->kelas) ? $formreplacement->kelas : ''}}" >
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('programStudi') ? 'has-error' : ''}}">
    <label for="programStudi" class="control-label">{{ 'Program Studi' }}</label>
    <input class="form-control" name="programStudi" type="text" id="programStudi" value="{{ isset($formreplacement->programStudi) ? $formreplacement->programStudi : ''}}" >
    {!! $errors->first('programStudi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('semester') ? 'has-error' : ''}}">
    <label for="semester" class="control-label">{{ 'Semester' }}</label>
    <input class="form-control" name="semester" type="text" id="semester" value="{{ isset($formreplacement->semester) ? $formreplacement->semester : ''}}" >
    {!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahunAkademik') ? 'has-error' : ''}}">
    <label for="tahunAkademik" class="control-label">{{ 'Tahun Akademik' }}</label>
    <input class="form-control" name="tahunAkademik" type="text" id="tahunAkademik" value="{{ isset($formreplacement->tahunAkademik) ? $formreplacement->tahunAkademik : ''}}" >
    {!! $errors->first('tahunAkademik', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggalReplacement') ? 'has-error' : ''}}">
    <label for="tanggalReplacement" class="control-label">{{ 'Tanggal Replacement' }}</label>
    <input class="form-control" name="tanggalReplacement" type="date" id="tanggalReplacement" value="{{ isset($formreplacement->tanggalReplacement) ? $formreplacement->tanggalReplacement : ''}}" >
    {!! $errors->first('tanggalReplacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jamKuliah') ? 'has-error' : ''}}">
    <label for="jamKuliah" class="control-label">{{ 'Jam Kuliah' }}</label>
    <input class="form-control" name="jamKuliah" type="date" id="jamKuliah" value="{{ isset($formreplacement->jamKuliah) ? $formreplacement->jamKuliah : ''}}" >
    {!! $errors->first('jamKuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggalReplacement') ? 'has-error' : ''}}">
    <label for="tanggalReplacement" class="control-label">{{ 'Tanggal Replacement' }}</label>
    <input class="form-control" name="tanggalReplacement" type="date" id="tanggalReplacement" value="{{ isset($formreplacement->tanggalReplacement) ? $formreplacement->tanggalReplacement : ''}}" >
    {!! $errors->first('tanggalReplacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jamreplacement') ? 'has-error' : ''}}">
    <label for="jamreplacement" class="control-label">{{ 'Jam Replacement' }}</label>
    <input class="form-control" name="jamreplacement" type="time" id="jamreplacement" value="{{ isset($formreplacement->jamreplacement) ? $formreplacement->jamreplacement : ''}}" >
    {!! $errors->first('jamreplacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan') ? 'has-error' : ''}}">
    <label for="alasan" class="control-label">{{ 'Alasan' }}</label>
    <input class="form-control" name="alasan" type="text" id="alasan" value="{{ isset($formreplacement->alasan) ? $formreplacement->alasan : ''}}" >
    {!! $errors->first('alasan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Submit' }}">
</div>
