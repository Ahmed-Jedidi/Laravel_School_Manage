@extends('layout')
@section('content')


<h2 style="color:blue;">Add New Student </h2>


<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}" />
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value="{{ $student->email }}" />
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" />
    </div>

    <div class="form-group">
        <label for="section">Section :</label>

        <select name="section" style="width: 100%;" value="{{ $student->section }}">

            <option value="Math">Math</option>
            <option value="Svt">SVT</option>
            <option value="Physique">Physique</option>
            <option value="Informatique">Informatique</option>
        </select>
    </div>

    <div class="form-group">
        <label for="image">Image :</label>

        <td><img src="/image/{{ $student->image }}" width="64" height="64"></td>
        <input type="file" name="image" class="form-control">
        <!--src="/image/{{ $student->image }}" value="/image/{{ $student->image }}"-->
    </div>

    <button type="submit" class="btn btn-success" style="float:right; width:300px;">Add Student</button>
</form>


@endsection