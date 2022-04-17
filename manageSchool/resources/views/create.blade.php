@extends('layout')
@section('content')

<div>
    <h2 style="color:Green;">Add New Student </h2>
</div>

<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" />
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" />
    </div>

    <div class="form-group">
        <label for="section">Section :</label>

        <select name="section" style="width: 100%;">
            <!-- Les options -->
            <option value="Math">Math</option>
            <option value="Svt">SVT</option>
            <option value="Physique">Physique</option>
            <option value="Informatique">Informatique</option>
        </select>
    </div>

    <div class="form-group">
        <label for="image">Image :</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="mt-2">
        <button type="submit" class="btn btn-success" style="float:right; width:300px;">Add Student</button>
    </div>
</form>


@endsection