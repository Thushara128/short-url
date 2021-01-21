@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>SHORT URL GENAERATOR APP</h1>
   
    <div class="card">
      <div class="card-header">
        <form method="POST" action="{{ route('generate.shorten.link.post') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="enter title" aria-label="Recipient's username" aria-describedby="basic-addon2">

              <input type="text" name="link" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="submit">Generate Shorten Link</button>
              </div>
            </div>
        </form>
      </div>
      <div class="card-body">
   
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
   
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Short Link</th>
                        <th>URL</th>
                        <th>Created</th>
                        <th>Delete</th>
                        <th>copy</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shortLinks as $row)
                        <tr>
                            {{-- <td>{{ $row->id }}</td> --}}
                            <td>{{ $row->title}}</td>
                            <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                            <td>{{ $row->link}}</td>
                            <td>{{ $row->created_at}}</td>
                            <td><a href="delete/{{$row->id}}"><button class='btn btn-danger'>Delete</button></a>
                            </td>
                            <td>
                              <input type="text" value={{ route('shorten.link', $row->code) }} id="myInput" style="display:none">
                          <button class="btn btn-primary" onclick="myFunction()">Copy Shorturl</button>
                                
                            </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    </div>
   
</div>
@endsection
