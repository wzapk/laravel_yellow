@extends('layouts.backend')
@section('page_title', '地域数据')
@section('page_description', '全国省市区县数据')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h2 class="box-title">省市区县数据</h2>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>P_ID</th>
                            <th>P_NM</th>
                            <th>C_ID</th>
                            <th>C_NM</th>
                            <th>A_ID</th>
                            <th>A_NM</th>
                            <th>full_name</th>
                            <th>disctrict_code</th>
                            <th>zip_code</th>
                            <th>phone_code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($districts as $district)
                            <tr>
                                <td>{{ $district->p_id }}</td>
                                <td>{{ $district->p_nm }}</td>
                                <td>{{ $district->c_id }}</td>
                                <td>{{ $district->c_nm }}</td>
                                <td>{{ $district->a_id }}</td>
                                <td>{{ $district->a_nm }}</td>
                                <td>{{ $district->full_name }}</td>
                                <td>{{ $district->disctrict_code }}</td>
                                <td>{{ $district->zip_code }}</td>
                                <td>{{ $district->phone_code }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="10">没有数据</td></tr>
                        @endforelse
                    </tbody>
                    
                </table>
            </div>
            <div class="box-footer">
                <div class="pull-right">{{ $districts->links() }}</div>
            </div>
        </div>
    </div>
</div>

@endsection