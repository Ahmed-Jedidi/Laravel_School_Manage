@extends('layout')
@section('content')
<!-- Content here ! -->
<div class="class=" card shadow mb-4">
    <div class="card shadow mb-4">
        <table class="table table-striped">
            <thead style="height: 5px;">
                <tr>
                    <th> ID </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Section</th>
                    <th>Image</th>

                    <th>Update </th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td colspan="7"></td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td style="color:brown; font-weight: bold;">{{$student->section}}</td>
                    <td><img src="/image/{{ $student->image }}" width="64" height="64"></td>



                    <td style="vertical-align:middle; ">
                        <form method="POST" align="left">
                            <a class="btn btn-primary" href="{{ route('students.edit' , $student->id)  }}">Edit</a>
                        </form>
                    </td>

                    <!--<td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                        <a class="btn btn-danger" href="{{ url('students.destroy' ,$student->id) }}">Delete</a>
                    </form>
                </td>-->
                    <td style="vertical-align:middle; ">
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                            @csrf

                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>
</div>



@endsection