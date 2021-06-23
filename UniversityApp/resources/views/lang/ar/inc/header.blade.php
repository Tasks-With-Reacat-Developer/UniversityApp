<?php
$count = 0;

$arrIndex = 0;
$titles = array();
if(!function_exists('isExists')){
function isExists($pageTitle, $check){
  $count = 0;
  for($i=0; $i<count($check); $i++){
   if($pageTitle === $check[$i])
   $count++;
  }

  if($count > 1)
  return true;

  return false;
}
}

?>
<header role="banner">
      <nav class="navbar navbar-expand-sm navbar navbar-light bg-light ">
        <div class="container">

          <a class="navbar-brand " href="/">
              <img src="{{asset('logo/University-logo.png')}}" width="120" height="72">
              
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link " href="/">الرئيسية</a>
              </li>
         <li class="nav-item">
                <a class="nav-link" href="/news"> أخر الاخبار</a>
              </li>
@foreach($pages as $page)
        @foreach($multilinks as $multilink)
        <?php $title[$arrIndex++] = $page->page_title; ?>
        @if($page->type == 'multi')
        @if($page->nav_id == $multilink->id)
        @if($page->language == 'ar')
        @if($count < 1)
        <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$multilink->title}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                <?php $count++; ?>
                @endif
                  <a class="dropdown-item" href="{{$page->link}}" >{{$page->page_title}}</a>
                 @if($count < 1)
                </div>
                </li>
                @endif
        @endif
        @endif
        @else
          @if($page->language == 'ar' && !isExists($page->page_title,$title))
              <li class="nav-item">
                <a class="nav-link" href="{{$page->link}}">{{$page->page_title}}</a>
        @endif
        @endif
        @endforeach
        @endforeach
                
              <li class="nav-item">
                <a class="nav-link" href="/contact">اتصل بنا</a>
              </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تغير اللغة</a>
      <div class="dropdown-menu" aria-labelledby="dropdown05">
 {!! Form::open(['method' => 'POST', 'action' => 'LanguageController@changeLanguage']) !!}
  <input type="hidden" name="arabic" value="ar">
  <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit();">العربية</a>
     {!! Form::close() !!} 
      {!! Form::open(['method' => 'POST', 'action' => 'LanguageController@changeLanguage']) !!}
         <input type="hidden" name="english" value="en">
    <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit();">الانجليزية</a>
      {!! Form::close() !!} 
      </div>
      </li>
            </ul>
                        <ul class="navbar-nav absolute-left">
              <li>      @guest
                          @else
                          <?php
                          $parts = explode(' ',trim(Auth::user()->name));
                          ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    مرحباً, {{ $parts[0] }} 
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="/student">
                                        {{ __('الملف الشخصي') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
              </li>
            </ul>

            

          </div>
        </div>

      </nav>
    </header>