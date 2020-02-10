@extends('layouts.app')

@section('content')
    <?php $course = \App\Course::find($_GET['id']);?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Course</div>

                <div class="card-body">
                    <form method="POST" action="/updatecourse ">
                        @csrf

                        <input id="id" name="id" value="<?php echo $_GET['id'];?>" style="display: none;">
                        <div class="form-group row">
                            <label for="coursename" class="col-md-4 col-form-label text-md-right">授業名</label>

                            <div class="col-md-6">
                                <input id="coursename" name="coursename" type="text" value=<?php echo $course->coursename; ?> class="form-control @error('name') is-invalid @enderror"   autofocus>

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
                                <input id="place" name="place" type="text" class="form-control @error('name') is-invalid @enderror" value=<?php echo $course->place; ?> autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="teachername" class="col-md-4 col-form-label text-md-right">教員</label>

                            <div class="col-md-6">
                                <input id="teachername" name="teachername" type="text" class="form-control @error('name') is-invalid @enderror" value=<?php echo $course->teachername; ?>   autofocus>

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
                                <select name="type" id="type" class="form-control" value=<?php echo $course->type; ?>>
                                    <?php
                                    if($course->type==0){
                                        echo '<option value="0" selected="selected">必修</option>
                                    <option value="1">選択必修</option>
                                    <option value="2">選択</option>
                                    <option value="3">その他</option>';
                                    }else if($course->type==1){
                                        echo '<option value="0">必修</option>
                                    <option value="1" selected="selected">選択必修</option>
                                    <option value="2">選択</option>
                                    <option value="3">その他</option>';
                                    }else if($course->type==2){
                                        echo '<option value="0">必修</option>
                                    <option value="1">選択必修</option>
                                    <option value="2" selected="selected">選択</option>
                                    <option value="3">その他</option>';
                                    }else if($course->type==3){
                                        echo '<option value="0">必修</option>
                                    <option value="1">選択必修</option>
                                    <option value="2">選択</option>
                                    <option value="3" selected="selected">その他</option>';
                                    }

                                    ?>
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
                                    更新
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
