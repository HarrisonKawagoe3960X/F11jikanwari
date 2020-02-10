@extends('layouts.app')

@section('content')
    <?php $usercourse = \App\UserCourse::find($_GET['id']);
    $course = \App\Course::find($usercourse->courseid);?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <?php
                        switch ($course->timeid){
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
                        ?>

                    </div>

                    <div class="card-body">
                            @csrf

                            <input id="id" name="id" value="<?php echo $_GET['id'];?>" style="display: none;">
                            <div class="form-group row">
                                <label for="coursename" class="col-md-4 col-form-label text-md-right">授業名:</label>

                                <label for="coursename" class="col-md-4 col-form-label text-md-right"><?php echo $course->coursename;?></label>
                            </div>

                            <div class="form-group row">
                                <label for="place" class="col-md-4 col-form-label text-md-right">教室:</label>

                                <label for="place" class="col-md-4 col-form-label text-md-right"><?php echo $course->place;?></label>
                            </div>

                            <div class="form-group row">
                                <label for="teachername" class="col-md-4 col-form-label text-md-right">教員:</label>

                                <label for="teachername" class="col-md-4 col-form-label text-md-right"><?php echo $course->teachername;?></label>

                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">種類</label>

                                <?php
                                if($course->type==0){
                                    echo'<div class="btn btn-primary" style="margin-left:10px;">必修</div>';
                                }else if($course->type==1){
                                    echo '<div class="btn btn-info" style="margin-left:10px;">選択必修</div>';
                                }else if($course->type==2){
                                    echo '<div class="btn btn-warning" style="margin-left:10px;">選択</div>';
                                }else{
                                    echo'<div class="btn btn-danger" style="margin-left:10px;">その他</div>';
                                }
                                ?>

                                </div>

                        <div class="form-group row">
                            <label for="teachername" class="col-md-4 col-form-label text-md-right">出席:</label>

                            <label for="teachername" class="col-md-4 col-form-label text-md-right text-primary"><?php echo $usercourse->correct;?></label>

                        </div>

                        <div class="form-group row">
                            <label for="teachername" class="col-md-4 col-form-label text-md-right">遅刻:</label>

                            <label for="teachername" class="col-md-4 col-form-label text-md-right text-secondary"><?php echo $usercourse->delay;?></label>

                        </div>

                        <div class="form-group row">
                            <label for="teachername" class="col-md-4 col-form-label text-md-right">欠席:</label>

                            <label for="teachername" class="col-md-4 col-form-label text-md-right text-danger"><?php echo $usercourse->absent;?></label>

                        </div>

                        <?php
                        $attend ='/addattend?id='.$_GET['id'];
                        $delay ='/adddelay?id='.$_GET['id'];
                        $absent ='/addabsent?id='.$_GET['id'];
                        $delete ='/deleteusercourse?id='.$_GET['id'];
                        ?>


                        <div class="form-group row mb-0">
                            <label for="type" class="col-md-4 col-form-label text-md-right"></label>
                            <button type="submit" class="btn btn-primary" onclick="location.href='<?php echo $attend;?>';">
                                出席＋１
                            </button>
                            <button type="submit" class="btn btn-secondary" style="margin-left:10px;" onclick="location.href='<?php echo $delay;?>';">
                                遅刻＋１
                            </button>
                            <button type="submit" class="btn btn-warning" style="margin-left:10px;" onclick="location.href='<?php echo $absent;?>';">
                                欠席＋１
                            </button>

                        </div>

                        <div class="form-group row" style="margin-top:20px;">
                            <label for="type" class="col-md-4 col-form-label text-md-right"></label>
                            <button type="submit" class="btn btn-danger"  onclick="location.href='<?php echo $delete;?>';">
                                授業をコマから外す
                            </button>
                        </div>
                            </div>




                    </div>
                </div>
            </div>
        </div>

@endsection
