@extends('layouts.app')

@section('content')

<section class="form">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header text-center">
            Data Vaksin
            </div>
            <div class="card-body">
                <form action="{{  route('store.form')  }}" method="post">
                  
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No Whatsapp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                        @endphp
                       
                            
                        
                        <tbody>
                         @foreach ($data as $d)
                            <tr>
                             <td>{{ $i++ }}</td>
                             <td>{{ $d->nama }}</td>
                             <td>{{ $d->nik }}</td>
                             <td>{{ $d->no }}</td>
                             <td>
                                 <a href="{{ url('edit',$d->id) }}">
                                     <i class="fas fa-edit"></i>
                                 </a>|
                                 <a href="{{ url('delete',$d->id) }}" class="badge-danger">
                                     <i class="fas fa-trash-alt"></i>
                                 </a>
                             </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('create.form') }}" class="mx-2 btn btn-primary">Tambah</a>
                </form>
            </div>
        </div>
    </div>


</section>
@endsection
