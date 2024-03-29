@extends('admin.layouts.main')


@section('content')

<!-- MAIN -->
<main>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show</h3>
                <a class="create__btn" href="{{ route('admin.infos.index') }}"></i>Back</a>
            </div>
            <table>
                <tr>
                    <td>ID</td>
                    <td>{{ $info->id }}</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $info->title }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $info->description }}</td>
                </tr>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
