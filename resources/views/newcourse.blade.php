@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Course at <?php
                    switch ($_GET['id']){
                        case 0:echo "月曜1限";break;
                        case 1:echo "火曜1限";break;
                        case 2:echo "水曜1限";break;
                        case 3:echo "木曜1限";break;
                        case 4:echo "金曜1限";break;
                        case 5:echo "土曜1限";break;
                        case 6:echo "月曜2限";break;
                        case 7:echo "火曜2限";break;
                        case 8:echo "水曜2限";break;
                        case 9:echo "木曜2限";break;
                        case 10:echo "金曜2限";break;
                        case 11:echo "土曜2限";break;
                        case 12:echo "月曜3限";break;
                        case 13:echo "火曜3限";break;
                        case 14:echo "水曜3限";break;
                        case 15:echo "木曜3限";break;
                        case 16:echo "金曜3限";break;
                        case 17:echo "土曜3限";break;
                        case 18:echo "月曜4限";break;
                        case 19:echo "火曜4限";break;
                        case 20:echo "水曜4限";break;
                        case 21:echo "木曜4限";break;
                        case 22:echo "金曜4限";break;
                        case 23:echo "土曜4限";break;
                        case 24:echo "月曜5限";break;
                        case 25:echo "火曜5限";break;
                        case 26:echo "水曜5限";break;
                        case 27:echo "木曜5限";break;
                        case 28:echo "金曜5限";break;
                        case 29:echo "土曜5限";break;
                        case 30:echo "月曜6限";break;
                        case 31:echo "火曜6限";break;
                        case 32:echo "水曜6限";break;
                        case 33:echo "木曜6限";break;
                        case 34:echo "金曜6限";break;
                        case 35:echo "土曜6限";break;
                        case 36:echo "月曜7限";break;
                        case 37:echo "火曜7限";break;
                        case 38:echo "水曜7限";break;
                        case 39:echo "木曜7限";break;
                        case 40:echo "金曜7限";break;
                        case 41:echo "土曜7限";break;
                    }
                    ?></div>

                <div class="card-body">
                    <form method="POST" action="/createcourse ">
                        @csrf

                        <input id="timeid" name="timeid" value="<?php echo $_GET['id'];?>" style="display: none;">
                        <div class="form-group row">
                            <label for="coursename" class="col-md-4 col-form-label text-md-right">授業名</label>

                            <div class="col-md-6">
                                <input id="coursename" name="coursename" type="text" class="form-control @error('name') is-invalid @enderror"   autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="place" class="col-md-4 col-form-label text-md-right">教室</label>

                            <div class="col-md-6">
                                <input id="place" name="place" type="text" class="form-control @error('name') is-invalid @enderror"  autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teachername" class="col-md-4 col-form-label text-md-right">先生</label>

                            <div class="col-md-6">
                                <input id="teachername" name="teachername" type="text" class="form-control @error('name') is-invalid @enderror"   autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">種類</label>

                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control">
                                    <option value="0">必修</option>
                                    <option value="1">選択必修</option>
                                    <option value="2">選択</option>
                                    <option value="3">その他</option>
                                </select>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    作成
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
