@extends('layout.app') 
{{-- Customize layout sections --}}
@section('subtitle', 'm_user')
@section('content_header_title', 'Home') 
@section('content_header_subtitle', 'm_user') 
{{-- Content body: main page content --}}
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD user</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div> 
    @endif
    <table class="table table-bordered table-success">
        <tr>
            <th width="20px" class="text-center table-header">User id</th>
            <th width="150px" class="text-center table-header">Level id</th>
            <th width="200px"class="text-center table-header">Username</th>
            <th width="200px"class="text-center table-header">Nama</th>
            <th width="150px"class="text-center table-header">Password</th>
            <th width="1000px"class="text-center table-header">Action</th>
        </tr>
        @foreach ($useri as $m_user)
            <tr>
                <td>{{ $m_user->user_id }}</td>
                <td>{{ $m_user->level_id }}</td>
                <td>{{ $m_user->username }}</td>
                <td>{{ $m_user->nama }}</td>
                <td>{{ $m_user->password }}</td>
                <td class="text-center">
                    <form action="{{ route('m_user.destroy',$m_user->user_id) }}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a> 
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr> 
        @endforeach
    </table> 
@endsection
    