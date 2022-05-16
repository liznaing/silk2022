@extends('umum_template')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Antrian Poli</h3>
            <nav class="navbar-light">
                <a class="btn btn-primary" href="tambahAntrianPoli" role="button">Tambah Antrian</a>
            </nav>
        </div>
        <table id="example2" class="table table-bordered table-hover" >
                  <thead align="center">
                  <tr>
                    <th>ID Antrian</th>
                    <th>Tanggal</th>
                    <th>ID Poli</th>
                    <th>No Rekam Medis</th>
                    </tr>
                  @foreach($antrian_poli as $ap)
		<tr>
			<td>{{ $ap->id_antrian_poli}}</td>
			<td>{{ $ap->tanggal}}</td>
      <td>{{ $ap->id_poli}}</td>
      <td>{{ $ap->no_rm}}</td>
			<td>
				<a href="/hapusAntrianPoli/{{ $ap->id_antrian_poli}}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </table>
      </div>
      <!-- /.box -->
    </div>
</div>
@endsection