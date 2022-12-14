@extends('layouts.template_guru')
@section('contents')
<div>
    <div class="card card-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                                    {{-- <form action="{{ route('cari_ujian_filter', encrypt($jadwal->id)) }}" method="get" class="site-block-top-search" > --}}
                                        @csrf
                                        
                                        {{-- <input type="hidden" value="{{ $jadwal->id }}" name='jadwal_id'>  --}}
                                        <div class="row">
                                            <div class="col-3">
                                                <label>pilih tahun ajaran</label>
                                                <select class="form-control" name="tahun_ajaran" id="tahun_ajaran">
                                                    <option class="form-control" value="2020">2020</option>
                                                    <option class="form-control" value="2021">2021</option>
                                                    <option class="form-control" value="2022">2022</option>
                                                    <option class="form-control" value="2023">2023</option>
                                                    <option class="form-control" value="2024">2024</option>
                                                    <option class="form-control" value="2025">2025</option>
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <label>pilih semester</label>
                                                <select class="form-control" name="semester" id="semester">
                                                    {{-- @foreach($semester as $p)
                                                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                            
                                            <div class="col-3 mt-4">
                                                <input type="submit" class="btn btn-primary mt-2 mb-2" value="cari">
                                            </div>
                                            <div class="col-3 text-right mt-4">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    create
                                                </button>
                                            </div>
                                        </div>
                                        {{-- <a href="{{ route('kelas-masuk' ,encrypt($jadwal->id))}}" class="btn btn-success">Kembali</a> --}}
                                    </form>
                                       <div class="table-responsive">    
                                           <table class="table table-hover">
                                               <thead>
                                                   <td>Guru</td>
                                                   <td>mata pelajaran</td>
                                                   <td>bobot</td>
                                                   <td>file</td>
                                                   <td>tipe_file</td>
                                                   <td>soal</td>
                                                   <td>opsi a</td>
                                                   <td>opsi b</td>
                                                   <td>opsi c</td>
                                                   <td>opsi d</td>
                                                   <td>file a</td>
                                                   <td>file b</td>
                                                   <td>file c</td>
                                                   <td>file d</td>
                                                   <td>jawaban</td>
                                                   <td>action</td>
                                                </thead>
                                                <tbody>
                                                    <h3>Data Soal</h3>
                                                    @foreach($soal as $p)
                                                    <tr>
                                                        <td>{{ $p->guru->name }}</td>
                                                        <td>{{ $p->mata_pelajaran_id }}</td>
                                                        <td>{{ $p->bobot }}</td>
                                                        <td>{{ $p->file }}</td>
                                                        <td>{{ $p->type_file }}</td>
                                                        <td>{{ $p->soal }}</td>
                                                        <td>{{ $p->opsi_a }}</td>
                                                        <td>{{ $p->opsi_b }}</td>
                                                        <td>{{ $p->opsi_c }}</td>
                                                        <td>{{ $p->opsi_d }}</td>
                                                        <td>{{ $p->file_a }}</td>
                                                        <td>{{ $p->file_b }}</td>
                                                        <td>{{ $p->file_c }}</td>
                                                        <td>{{ $p->file_d }}</td>
                                                        <td>{{ $p->jawaban }}</td>
                                                        <td>edit</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Soal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" value="{{ Auth::guard('guru')->user()->id }}" name="guru_id">
        <div class="mt-2">
            <select name="mata_pelajaran_id" id="mata_pelajaran_id" class="form-control">
                @foreach($mata_pelajaran as $p)
                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-2">
            <select name="kelas_id" id="kelas_id" class="form-control">
                @foreach($kelas as $p)
                    <option value="{{ $p->id }}">{{ $p->kelas }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class="mt-2">
            <input type="text" class="form-control" name="bobot" placeholder="masukan bobot">
        </div> --}}
{{-- 
        <div class="mt-2">
            <input type="text" class="form-control" name="file" placeholder="masukan file">
        </div>

        <div class="mt-2">
            <input type="text" class="form-control" name="type_file" placeholder="masukan type_file">
        </div> --}}

        <div class="mt-2">
            <label for="soal">soal</label>
            <textarea type="text" class="form-control" name="soal" placeholder="masukan soal"></textarea>
        </div>

        <div class="mt-2">
            <label for="opsi a">opsi a</label>
            <input type="text" class="form-control" name="opsi_a" placeholder="masukan opsi_a">
        </div>

        <div class="mt-2">
            <label for="opsi b">opsi b</label>
            <input type="text" class="form-control" name="opsi_b" placeholder="masukan opsi_b">
        </div>

        <div class="mt-2">
            <label for="opsi c">opsi c</label>
            <input type="text" class="form-control" name="opsi_c" placeholder="masukan opsi_c">
        </div>

        <div class="mt-2">
            <label for="opsi d">opsi d</label>
            <input type="text" class="form-control" name="opsi_d" placeholder="masukan opsi_d">
        </div>

        {{-- <div class="mt-2">
            <input type="text" class="form-control" name="file_a" placeholder="masukan file_a">
        </div>

        <div class="mt-2">
            <input type="text" class="form-control" name="file_b" placeholder="masukan file_b">
        </div>

        <div class="mt-2">
            <input type="text" class="form-control" name="file_c" placeholder="masukan file_c">
        </div>

        <div class="mt-2">
            <input type="text" class="form-control" name="file_d" placeholder="masukan file_d">
        </div> --}}

        <div class="mt-2">
            <label for="jawaban">jawaban</label>
            {{-- <input type="text" class="form-control" name="jawaban" placeholder="masukan jawaban"> --}}
            <select class="form-control" name="jawaban" id="jawaban">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
            </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    </div>
        @endsection