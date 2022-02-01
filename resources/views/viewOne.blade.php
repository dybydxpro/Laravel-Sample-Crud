@extends('template')

@section('content')
    <div>
        <br>

        <table class="table table-danger">
            <tbody class="table-danger">
                <tr>
                    <td scope="col">
                        <td><h2>ID :</h2></td>
                    </td>
                    <td scope="col">
                        <td><h2>{{ $items->id }}</h2></td>
                    </td>
                </tr>    
                <tr>
                    <td scope="col">
                        <td><h2>Name :</h2></td>
                    </td>
                    <td scope="col">
                        <td><h2>{{ $items->title  }}</h2></td>
                    </td>
                </tr>
                <tr>
                    <td scope="col">
                        <td><h2>Unit :</h2></td>
                    </td>
                    <td scope="col">
                        <td><h2>{{ $items->unit  }}</h2></td>
                    </td>
                </tr>
                <tr>
                    <td scope="col">
                        <td><h2>Qty :</h2></td>
                    </td>
                    <td scope="col">
                        <td><h2>{{ $items->qty  }}</h2></td>
                    </td>
                </tr>
                <tr>
                    <td scope="col">
                        <td><h2>Price :</h2></td>
                    </td>
                    <td scope="col">
                        <td><h2>{{ $items->price  }}</h2></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection