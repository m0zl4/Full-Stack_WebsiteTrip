@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="trip_packages_id">Paket Pulang</label>
                    <select name="trip_packages_id" required class="form-control">
                        <option value="{{ $item->trip_packages_id }}">Jangan Ubah</option>
                        @foreach ($trip_packages as $trip_package)
                            <option value="{{ $trip_package->id }}">
                                {{ $trip_package->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="Image">
                </div>

                <button type="sumbit" class="btn btn-primary btn-block">Ubah</button>
                </form>
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection