@extends('users.share.sidebar.')

@section('content')
<!-- サイドバー -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">

            <!-- メニューヘッダ -->
            <li class="header">管理機能一覧</li>

                       <!-- メニュー項目 -->
            <li class="active"><a href="">メッセージ</a></li>
            <li class="active"><a href="">お気に入りブランド一覧</a></li>
            <li class="active"><a href="">データ納品</a></li>
            <li class="active"><a href="">売上</a></li>
            <li class="active"><a href="">プロフィール編集</a></li>
            <li class="active"><a href="">登録情報編集</a></li>
            <!--  <li class="treeview">-->
            <!--    <a href=""><i class="fa fa-cogs"></i>その他<i class="fa fa-angle-left pull-right"></i></a>-->
            <!--    <ul class="treeview-menu">-->
            <!--        <li><a href=""><i class="fa fa-circle-o"></i>その他１</a></li>-->
            <!--        <li><a href=""><i class="fa fa-circle-o"></i>その他２</a></li>-->
            <!--    </ul>-->
            <!--</li>-->
        </ul>
    </section>
</aside><!-- end sidebar -->