@extends('layouts.app')

@section('content')
<h1><?php
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
?>の授業リスト</h1>
<div class="courseitems">
<?php
$courses = App\Course::all();
foreach($courses as $course){
    if($course->timeid==$_GET['id']){
        $typed = "";
        $editcourseid="location.href='/editcourse?id={$course->id}';";
        $addusercourseid="location.href='/addusercourse?id={$course->id}';";
        if($course->type==0){
            $typed = '<div class="btn btn-primary" style="margin-left:10px;">必修</div>';
        }else if($course->type==1){
            $typed = '<div class="btn btn-info" style="margin-left:10px;">選択必修</div>';
        }else if($course->type==2){
            $typed = '<div class="btn btn-warning" style="margin-left:10px;">選択</div>';
        }else{
            $typed = '<div class="btn btn-danger" style="margin-left:10px;">その他</div>';
        }
        echo '<div class="courseitem"><div class="coursename">授業名:'.$course->coursename.'</div>
                                      <div class="place">教室:'.$course->place.'</div>
                                      <div class="teachername">教員:'.$course->teachername.'</div>
                                      '.$typed.'<div style="margin-top:10px;margin-left:10px;margin-bottom: 10px;"><button class="btn btn-success" onclick='.$addusercourseid.'>＋追加</button><button class="btn btn-secondary" style="margin-left:10px;margin-right:10px;" onclick='.$editcourseid.'>編集</button></div></div>';
    }
}
?>
</div>
<?php $newcourseid = '/newcourse?id='.$_GET['id'];?>
<button class="newcourse" onclick="location.href='<?php echo $newcourseid;?>';">+</button>
@endsection
