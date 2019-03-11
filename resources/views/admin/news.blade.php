@extends('admin.master')

@section('page-title')
{{ $title }}
@endsection

@section('dashboard-name')
{{ $title }}
@endsection

@section('content')
<div class="content" style="position:absolute; top:55px">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <a href="{{ route('addnews') }}" class="btnNewNews"> <img src="{{ asset('img/plus.png') }}" alt="" class="icon-plus"> Add News </a>
    <h3>All News</h3>

    <div class="sub-content">
        <table class="tbl-message" id="Tbl-Message">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>News</th>
                    <th>Edit/Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($newses as $news)
                <tr>
                    <td width="8%">{{ $news->date }}</td>
                    <td width="15%" style="word-wrap:break-word">{{ $news->title }}</td>
                    <td width="15%">
                        @if($news->image !== null)
                        <img src="{{ asset( 'images/'.$news->image ) }}" alt="{{ $news->image }}" width="100%" height="auto">
                        @endif
                    </td>
                    <td width="52%" style="word-wrap:break-word">{{ $news->news }}</td>
                    <td width="10%">
                        <a href="{{ asset('admin/editNews?id='.$news->id) }}" class="btnEdit"> Edit </a>
                        <a href="{{ asset('admin/deleteNews?id='.$news->id) }}" onclick="return confirm('Are you sure?')" class="btnDelete"> Delete </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 