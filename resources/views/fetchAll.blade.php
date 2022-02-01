@extends('template')

@section('content')

    <div>
        <br>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Unit</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Price</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $data)
                <tr class="table-danger">
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->unit }}</td>
                    <td>{{ $data->qty }}</td>
                    <td>{{ $data->price }}</td>
                    <td>
                        <form method="POST">
                            <a class="btn btn-success" href="{{ route('viewOne', $data->id) }}"> View </a> 
                            &nbsp
                            <a class="btn btn-primary" href="{{ route('openEditView', $data->id) }}"> Edit </a>
                            &nbsp
                            @csrf 
                            @method('DELETE')
                            <a class="btn btn-danger" href="{{ route('delete', $data->id) }}"> Delete </a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection