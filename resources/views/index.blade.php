<link href="css/common.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width">
<div id="app">
    <nav class="navbar navbar-dark navbar-expand-md navbar-light bg-secondary shadow-sm" >
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color:#ffffff;">
                F11jikanwari
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon" style="color:#ffffff;"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color:#ffffff;">{{ __('Login') }}</a>
                        </li>

                    @else
                        <li class="nav-item dropdown pclayout">
                            <a class="nav-link" href="#" style="color:#ffffff;" >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:#ffffff;background: #6c757d;">
                                {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </li>
                    @endguest
                </ul>
            </div>

    </nav>
</div>
<div class="flex">
    <div class="uppersmall">\</div>
<?php for($i =0; $i < 6; $i++):?>
<div class="upperwide">
    <?php switch ($i){
        case 0:echo "月";break;
        case 1:echo "火";break;
        case 2:echo "水";break;
        case 3:echo "木";break;
        case 4:echo "金";break;
        case 5:echo "土";break;
        }?></div>
<?php endfor ?>

    <?php $userdatas = \App\UserCourse::All();
          $current = new SplFixedArray(42);
    foreach($userdatas as $userdata){
        if($userdata->userid==AUTH::User()->id){
            $index = $userdata->timeid;
            $current[$index] = $userdata;
        }
    }?>

    <?php for( $i = 0; $i < 42; $i++ ):?>
    <?php if($i % 6 ==0):?>
    <div class="normalsmall"><?php echo $i/6+1;?></div>
    <?php endif?>
    <?php $addcourseid = '/addcourse?id='.$i;?>

    <?php if (is_null($current[$i])):?>
    <div class="normalwide" onclick="location.href='<?php echo $addcourseid;?>';">None</div>
    <?php else: ?>
    <?php $temp=\App\Course::find($current[$i]->courseid);?>
    <?php $detailusercourseid = '/detailusercourse?id='.$current[$i]->id;?>
    <?php if ($temp->type == 0):?>
    <div class="normalwide bg-primary" style="color:white;" onclick="location.href='<?php echo $detailusercourseid;?>';"><?php echo $temp->coursename?></div>
    <?php elseif ($temp->type == 1):?>
    <div class="normalwide bg-info" style="color:white;" onclick="location.href='<?php echo $detailusercourseid;?>';"><?php echo $temp->coursename?></div>
    <?php elseif ($temp->type == 2):?>
    <div class="normalwide bg-warning" style="color:white;" onclick="location.href='<?php echo $detailusercourseid;?>';"><?php echo $temp->coursename?></div>
    <?php elseif ($temp->type == 3):?>
    <div class="normalwide bg-danger" style="color:white;" onclick="location.href='<?php echo $detailusercourseid;?>';"><?php echo $temp->coursename?></div>
    <?php endif ?>
    <?php endif ?>


    <?php endfor ?>
</div>

