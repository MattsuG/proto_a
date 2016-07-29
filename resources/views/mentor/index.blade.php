@extends('common.layout')
@section('TitleAndCss')
<title>show.php | トーク一覧</title>

<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">                         
                            <a href="/mentor"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                    <div class="dropdown profile-element"> 
                        <span>
                            <img alt="image" class="img-circle" src="{{{asset('/assets/img/about/1.jpg')}}}" />
                        </span>
                        <a class="dropdown-toggle" href="#">
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold">お名前</strong>
                                </span> 
                                <span class="text-muted text-xs block">職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。</span>
                            </span>
                        </a>                        
                    </div>                    
                    <div class="logo-element">
                        <a href="/mentor"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
                    </div>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">アカウント編集</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/user/edit">プロフィール編集</a></li>
                        <li><a href="graph_morris.html">Email編集</a></li>
                        <li><a href="graph_rickshaw.html">パスワード編集</a></li>
                    </ul>
                </li>
                <li>
                    <a href="add"><i class="fa fa-bullhorn"></i> <span class="nav-label">トーク作成</span></a>
                </li>
                <li>
                    <a href="/user/mypage"><i class="fa fa-calendar"></i> <span class="nav-label">マイページ</span></a>
                </li>                 
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">トーク一覧ページへようこそ</span>
                    </li>
                    <li>
                        <a  class="dropdown-toggle count-info" href="/mentor">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> ログアウト
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading inbox-title">
            <div class="col-lg-9ƒ">
                <h2>トーク一覧</h2>
                <ol class="breadcrumb">
                    <li class="active">
                        <strong>トーク一覧</strong>
                    </li>
                </ol>
            </div>
        </div>


        <div class="row white-bg">
            <form role="search" class="navbar-form" action="search_results.html">
                <div class="form-group">
                    <select class="form-control" name="search_category">
                        <option value="0" selected>カテゴリを選択</option>
                    </select>
                    <input type="text" placeholder="検索ワード" class="form-control" name="search_word" id="top-search">
                </div>
            </form>
        </div>
        <div class="row white-bg">              
            <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price">
                    <a href="/mentor/show" style="color:#000;text-decoration:none"><img src="img/headphones.jpg" alt="">
                    </div>
                    <h3>タイトル</h3>
                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>カテゴリ</li>
                            <li>価格</li></a>
                            <li><a href="/mentor/show"><button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i>メッセージ</button></a></li>                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price">
                    <img src="img/headphones.jpg" alt="">
                    </div>
                    <h3>タイトル</h3>
                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>カテゴリ</li>
                            <li>価格</li>
                            <li><a href="/mentor/show"><button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i>メッセージ</button></a></li>                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price">
                    <img src="img/headphones.jpg" alt="">
                    </div>
                    <h3>タイトル</h3>
                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>カテゴリ</li>
                            <li>価格</li>
                            <li><a href="/mentor/show"><button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i>メッセージ</button></a></li>                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price">
                    <img src="img/headphones.jpg" alt="">
                    </div>
                    <h3>タイトル</h3>
                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>カテゴリ</li>
                            <li>価格</li>
                            <li><a href="/mentor/show"><button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i>メッセージ</button></a></li>                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                <div class="pricing-box-inner">
                    <div class="pricing-box-price">
                    <img src="img/headphones.jpg" alt="">
                    </div>
                    <h3>タイトル</h3>
                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
                    <div class="pricing-box-features">
                        <ul>
                            <li>カテゴリ</li>
                            <li>価格</li>
                            <li><a href="/mentor/show"><button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i>メッセージ</button></a></li>                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer">                       
                <div>
                    <strong>Copyright</strong> TIMELAG Inc. &copy; 2016
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
@stop
