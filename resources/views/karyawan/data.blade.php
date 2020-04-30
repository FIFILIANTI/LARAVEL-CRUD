@extends('layout/index')

@section('title','Daftar Karyawan')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Karyawan</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @foreach( $karyawan as $karyawan )
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"> 
                    <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>
                    <a href="/karyawan/{{ $karyawan->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                </li>
            </ul>
        </tbody>
    </table>
    @endforeach
            
        

            <a href="/karyawan/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection
   