@extends('template')

@section ('content')
    <div>
        <br>

        <form method="POST" action="{{ route('create') }}">
            @csrf
            <table class="table table-danger">
                <tbody class="table-danger">   
                    <tr>
                        <td scope="col">
                            <td><h2>Title :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="title" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2>Unit :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="unit" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2>Qty :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="qty" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2>Price :</h2></td>
                        </td>
                        <td scope="col">
                            <td><input type="text" name="price" class="form-control" /></td>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">
                            <td><h2></h2></td>
                        </td>
                        <td scope="col">
                            <td><button type="submit" class="btn btn-primary">Save</button></td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        
    </div>
@endsection