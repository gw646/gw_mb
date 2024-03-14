@extends('admin.layouts.app')
@section('title','Access User Group')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user-group.index')}}">User Groups</a></li>
                        <li class="breadcrumb-item active">Access</li>
                    </ol>
                </div>
                <h4 class="page-title">Grand Access with this Group</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body permission">
                    <div class="all_check">
                        <div class="form-check">
                            <input  type="checkbox" class="form-check-input checkedAll" />
                            <label class="form-check-label">
                                Mark All Access Key - for <strong class="text-success">{{$role->name}}</strong> Group
                            </label>
                        </div>
                    </div>
                    <form action="{{route('user-group.access',['id'=>$role->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        @if($permissionGroups)
                            @foreach($permissionGroups as $permissionGroup)
                                <div class="head">
                                    {{$permissionGroup->group_name}}
                                </div>
                                <ul class="checkbox-grid">
                                    @foreach($permissions as $permission)
                                        @if($permission->group_name === $permissionGroup->group_name)
                                            <li class="form-check">
                                                <div class="">
                                                    <input value="{{$permission->id}}" name="permission[]" {{$role->hasPermissionTo($permission->id) ? 'checked':''}} type="checkbox" class="form-check-input checkSingle" />
                                                    <label class="form-check-label">
                                                        {{$permission->preview}}
                                                    </label>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endforeach

                            <div class="form-group mt-3">
                                <a href="{{route('user-group.index')}}" class="btn btn-dark">Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <style>
        /*.permission ul{*/
        /*    padding: 20px 30px;*/
        /*    display: table;*/
        /*    width: 100%;*/
        /*    clear: both;*/
        /*    background: #fbfbfb;*/
        /*    margin-bottom: 0;*/
        /*}*/
        /*.permission ul li{*/
        /*    list-style: none;*/
        /*    width: 33%;*/
        /*    float: left;*/
        /*}*/
        .permission .head {
            background: #f2f2f2;
            padding: 8px 15px;
            font-size: 10.5pt;
            font-weight: bold;
        }
        .all_check{
            margin-bottom: 10px;
            padding-left: 5px;
        }

        .checkbox-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            padding: 20px 30px;
            margin-bottom: 0;
            background: #fbfbfb;
        }

        .form-check {
            margin-right: 10px; /* Adjust margin as needed */
            margin-bottom: 10px; /* Adjust margin as needed */
            flex-basis: calc(100% / 6 - 10px); /* 6 items per line with margin */
        }

        @media screen and (max-width: 768px) {
            .form-check {
                flex-basis: calc(100% / 3 - 10px); /* 3 items per line on smaller screens */
            }
        }

        @media screen and (max-width: 576px) {
            .form-check {
                flex-basis: calc(100% / 2 - 10px); /* 2 items per line on even smaller screens */
            }
        }
    </style>
@endpush
@push('script')
    <script>
        $(".checkedAll").change(function () {
            if (this.checked) {
                $(".checkSingle").each(function () {
                    this.checked = true;
                })
            } else {
                $(".checkSingle").each(function () {
                    this.checked = false;
                })
            }
        });
    </script>
@endpush
