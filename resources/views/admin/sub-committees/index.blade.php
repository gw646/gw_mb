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
            <h2>All Committees & Members </h2>
            <table class="table table-centered mb-0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Date of Birth</th>
            <th>Active?</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Risa D. Pearson</td>
            <td>336-508-2157</td>
            <td>July 24, 1950</td>
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch01" checked data-switch="success"/>
                    <label for="switch01" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Ann C. Thompson</td>
            <td>646-473-2057</td>
            <td>January 25, 1959</td>
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch02" checked data-switch="success"/>
                    <label for="switch02" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Paul J. Friend</td>
            <td>281-308-0793</td>
            <td>September 1, 1939</td>
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch03" data-switch="success"/>
                    <label for="switch03" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Linda G. Smith</td>
            <td>606-253-1207</td>
            <td>May 3, 1962</td>
            <td>
                <!-- Switch-->
                <div>
                    <input type="checkbox" id="switch04" data-switch="success"/>
                    <label for="switch04" data-on-label="Yes" data-off-label="No" class="mb-0 d-block"></label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
        </div>
    </div>
</div>
@endsection
