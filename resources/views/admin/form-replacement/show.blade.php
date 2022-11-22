@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">formReplacement {{ $formreplacement->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/form-replacement') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/form-replacement/' . $formreplacement->id . '/edit') }}" title="Edit formReplacement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/formreplacement' . '/' . $formreplacement->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete formReplacement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $formreplacement->id }}</td>
                                    </tr>
                                    <tr><th> NamaLengkap </th><td> {{ $formreplacement->namaLengkap }} </td></tr><tr><th> MataKuliah </th><td> {{ $formreplacement->mataKuliah }} </td></tr><tr><th> Kelas </th><td> {{ $formreplacement->kelas }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
