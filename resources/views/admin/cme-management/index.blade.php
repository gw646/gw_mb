@extends('admin.layouts.app')

@section('title', 'Continued Medical Education')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Continued Professional Development</h2>
    <div class="card">
        <div class="card-header">
            Add Points
        </div>
        <div class="card-body">
            <form action="{{ route('cme.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="search" placeholder="Search">
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" id="group" name="group" placeholder="Group" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" id="topic" name="topic" placeholder="Topic" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" id="points" name="points" placeholder="Points" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <textarea class="form-control" id="details" name="details" rows="3" placeholder="Short Desc" required></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <select class="form-select" id="pointsType" name="points_type" required>
                            <option value="">Select Points Type</option>
                            <option value="type1">Type 1</option>
                            <option value="type2">Type 2</option>
                            <!-- Add more point types here -->
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Points</button>
            </form>
        </div>
    </div>
</div>
@endsection
