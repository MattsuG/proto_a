
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | ユーザー詳細</title>

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
                                    <strong class="font-bold">松澤隼人</strong>
                                </span> 
                                <span class="text-muted text-xs block">スポーツメーカーを退職後、大阪にて教育系ウェブサービスの立ち上げ準備中。2016年4月から6月までセブ島留学をしてプログラミングを学び、その時のルームメートと個人間で進路情報をシェアできるサービスを構築中。</span>
                            </span>
                        </a>                        
                    </div>                    
                    <div class="logo-element">
                        <a href="/"><img alt="image" class="img" src="{{{asset('/assets/img/plus.png')}}}" width="25px" height="50px" /></a>
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
                        <span class="m-r-sm text-muted welcome-message">ユーザー詳細ページへようこそ</span>
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
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>ユーザー詳細</h2>
                <ol class="breadcrumb">                  
                    <li class="active">
                        <strong>ユーザー詳細</strong>
                    </li>
                </ol>
            </div>
        </div>
        <!-- <div class="row white-bg animated fadeInRight">
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Hayato Matsuzawaさんのプロフィール</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            <img alt="image" class="img-circle" src="{{{asset('/assets/img/backgrounds/3.jpg')}}}">
                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>Hayato Matsuzawa</strong></h4>
                            <p><i class="fa fa-map-marker"></i> Seoul, S.Korea</p>
                            <h5>
                                自己紹介
                            </h5>
                            <p>
                                スポーツアパレルメーカー、デサントにて機能性の高いスポーツウエア、ライフスタイルウエアの欧州営業を担当。２０１５年から新規リテール事業の立ち上げメンバーとして海外出向中。大学卒業までアルペンスキーに熱中し、その後アメリカコロラド州の大学院でスポーツ経営学を学ぶ。帰国後現在の会社へ入る。
                            </p>

                            <div class="user-button">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i> メッセージを送る</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>プロフィール詳細</h5>
                    </div>
                    <div class="ibox-content">

                        <div>
                            <div class="feed-activity-list">
                                <div class="feed-element">
                                    <h6>やってみたいこと</h6>
                                    元々教育分野に興味がある。学生が多様な進路を選択できる仕組み作りに取り組みたい。受験、就活などが現在関心のあるトピック。
                                </div>
                                <div class="feed-element">
                                    <h6>現職</h6>
                                    Descente Global Retail Ltd.
                                    <h6>ポジション</h6>
                                        International Sales, HR, Buying MD
                                    <h6>業務内容</h6>
                                        DESCENTE ALLTERRAIN Whole sale business 
                                        -Whole sale business operation guideline set-up, business term revision
                                        -Account management: order management, collecting payments, participation in multiple sales activities
                                        -Business develop plan establishment

                                        HR: UK Store Launching Preparation
                                        -Recruitment agency contact, Employment candidate search, Employment process handling 
                                        -UK specific employment related issues research, payroll, labor law, benefit etc. 

                                        Product preparation: UK Store Launching Preparation 
                                        -Product buying, attending conventions, order placement,, reorder, pricing, size assortment
                                        -Product education to sales staff 
                                </div>
                                <div class="feed-element">
                                    <h6>前職</h6>
                                    株式会社デサント
                                    <h6>ポジション</h6>
                                        Global Marketing, International Sales
                                    <h6>業務内容</h6>
                                        In charge of Descente brand distribution sales in European and western/central Asian markets with three collections; Ski, Run&Cycling, and Allterrain. 

                                        -Communication and development marketing strategy with 15 distributors in respective market
                                        -Pricing strategy for the collections cooperating merchandisers and designers
                                        -Financial analysis of potential distributors
                                        -Contract negotiation 
                                        -Promotional uniform supply to the teams in Europe
                                </div>
                                <div class="feed-element">
                                    <h6>最終学歴</h6>
                                    University of Northern Colorado
                                    <h6>学部・学科</h6>
                                        Sport Administration
                                    <h6>在籍期間</h6>
                                        2011-2012
                                </div>
                                  <div class="feed-element">
                                    <h6>その他学歴</h6>
                                    北海道教育大学旭川校
                                    <h6>学部・学科</h6>
                                    保健体育科
                                    <h6>在籍期間</h6>
                                        2005-2009
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div> -->
        <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="m-b-md">
                                        <a href="#" class="btn btn-white btn-xs pull-right">Edit project</a>
                                        <h2>Contract with Zender Company</h2>
                                    </div>
                                    <dl class="dl-horizontal">
                                        <dt>Status:</dt> <dd><span class="label label-primary">Active</span></dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <dl class="dl-horizontal">

                                        <dt>Created by:</dt> <dd>Alex Smith</dd>
                                        <dt>Messages:</dt> <dd>  162</dd>
                                        <dt>Client:</dt> <dd><a href="#" class="text-navy"> Zender Company</a> </dd>
                                        <dt>Version:</dt> <dd>  v1.4.2 </dd>
                                    </dl>
                                </div>
                                <div class="col-lg-7" id="cluster_info">
                                    <dl class="dl-horizontal" >

                                        <dt>Last Updated:</dt> <dd>16.08.2014 12:15:57</dd>
                                        <dt>Created:</dt> <dd>  10.07.2014 23:36:57 </dd>
                                        <dt>Participants:</dt>
                                        <dd class="project-people">
                                        <a href=""><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                        <a href=""><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <dl class="dl-horizontal">
                                        <dt>Completed:</dt>
                                        <dd>
                                            <div class="progress progress-striped active m-b-sm">
                                                <div style="width: 60%;" class="progress-bar"></div>
                                            </div>
                                            <small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="row m-t-sm">
                                <div class="col-lg-12">
                                <div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Users messages</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Last activity</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="feed-activity-list">
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a2.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                <div class="well">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a3.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">2 days ago at 8:30am</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a4.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right text-navy">5h ago</small>
                                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                                <div class="actions">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a5.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                                <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                                <div class="well">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                    Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/profile.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">23h ago</small>
                                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a7.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">46h ago</small>
                                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="tab-2">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Title</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Comments</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                            </td>
                                            <td>
                                               Create project in webapp
                                            </td>
                                            <td>
                                               12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                            <p class="small">
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                            </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                            </td>
                                            <td>
                                                Various versions
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                            </td>
                                            <td>
                                                There are many variations
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                            </td>
                                            <td>
                                                Latin words
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    Latin words, combined with a handful of model sentence structures
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Accepted</span>
                                            </td>
                                            <td>
                                                The generated Lorem
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                            </td>
                                            <td>
                                                The first line
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Reported</span>
                                            </td>
                                            <td>
                                                The standard chunk
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Completed</span>
                                            </td>
                                            <td>
                                                Lorem Ipsum is that
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable.
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary"><i class="fa fa-check"></i> Sent</span>
                                            </td>
                                            <td>
                                                Contrary to popular
                                            </td>
                                            <td>
                                                12.07.2014 10:10:1
                                            </td>
                                            <td>
                                                14.07.2014 10:16:36
                                            </td>
                                            <td>
                                                <p class="small">
                                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                                </p>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                                </div>

                                </div>

                                </div>
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
