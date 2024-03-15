@extends('admin.layouts.app')

@section('title','Sub Committees')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Sub Committees</li>
                </ol>
            </div>
            <h4 class="page-title">Sub Committees</h4>
        </div>
      
        <button type="button" style="margin-bottom: 20px; background-color: #007bff; color: white; padding: 10px 24px; border: none; border-radius: 4px; cursor: pointer;">Create Committee</button>
        <div style="overflow-x:auto;">
            <h2>All Committees </h2>
            <table class="table table-centered mb-0">
    <thead>
        <tr>
            <th>Committee Name</th>
            <th>Members</th>
            <th>Purpose</th>
            <th>Active?</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Committee 1</td>
            <td>10</td>
            <td>Planning</td>
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch01" checked data-switch="success"/>
                    <label for="switch01" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Committee 2</td>
            <td>3</td>
            <td>Board Meetings</td>
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch02" checked data-switch="success"/>
                    <label for="switch02" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                </div>
            </td>
        </tr>
        
    </tbody>
</table>
        </div>
    </div>
</div>
@endsection
