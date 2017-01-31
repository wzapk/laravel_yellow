@extends('layouts.backend')
@section('page_title', '全国分部')
@section('page_description', '魔菇教育联盟分部数据')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h2 class="box-title">分部数据</h2>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>名称</th>
                            <th>负责人</th>
                            <th>所在地</th>
                            <th>联系方式</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($contents as $content)
                        <tr>
                            <td><a href="{{ url('admin/contents', ['id'=>$content->id]) }}">{{ $content->name }}</a></td>
                            <td>{{ $content->manager }}</td>
                            <td>{{ $content->location }}</td>
                            <td>{{ $content->phone }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="4">未找到数据</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <div class="pull-right">{{ $contents->links() }}</div>
            </div>
        </div>
    </div>
</div>

@endsection