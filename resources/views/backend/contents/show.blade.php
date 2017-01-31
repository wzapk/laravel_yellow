@extends('layouts.backend')
@section('page_title', '分部')
@section('page_description', '详细资料')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h2 class="box-title">分部数据</h2>
            </div>
            <div class="box-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>名称</th>
                            <td>{{ $content->name }}</td>
                        </tr>
                        <tr>
                            <th>负责人</th>
                            <td>{{ $content->manager }}</td>
                        </tr>
                        <tr>
                            <th>所在城市</th>
                            <td>{{ $content->location }}</td>
                        </tr>
                        <tr>
                            <th>联系方式</th>
                            <td>{{ $content->phone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection