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
            <table style="width:100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px; background-color: #f2f2f2;">Committee Name</th>
                        <th style="border: 1px solid black; padding: 8px; background-color: #f2f2f2;">Members</th>
                        <th style="border: 1px solid black; padding: 8px; background-color: #f2f2f2;">Place of Practice</th>
                        <th style="border: 1px solid black; padding: 8px; background-color: #f2f2f2;">Profession</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border: 1px solid black; padding: 8px;">Health and Safety</td>
                        <td style="border: 1px solid black; padding: 8px;">John Doe</td>
                        <td style="border: 1px solid black; padding: 8px;">Trinidad</td>
                        <td style="border: 1px solid black; padding: 8px;">Doctor</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; padding: 8px;">Finance</td>
                        <td style="border: 1px solid black; padding: 8px;">James Smith</td>
                        <td style="border: 1px solid black; padding: 8px;">Los Angeles</td>
                        <td style="border: 1px solid black; padding: 8px;">Doctor</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
