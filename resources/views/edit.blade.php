@extends('template')

@section ('content')
    <div>
        <br>

        <form method="POST" action="{{ route('edit',$items->id) }}">
            @csrf
            @method('PUT')
            <table class="table table-danger">
                <tbody class="table-danger">   
                    <tr>
                        <td scope="col">
                            <td><h2>Title :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="title" value="{{ $items->title }}" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2>Unit :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="unit" value="{{ $items->unit }}" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2>Qty :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="qty" value="{{ $items->qty }}" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2>Price :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="price" value="{{ $items->price }}" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2></h2></td>
                        </td>
                        <td scope="col">
                            <td><button type="submit" class="btn btn-primary">Update</button></td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        
    </div>
@endsection