// iineボタン押した時のアクション
$('.btn-iine').on('click',function(){

    //ユーザーと企業（admin）のidをlaravelに
    //送りたいので、まずはプログラム上で取得して
    //変数に保存する
    const user_id = $('#favorite-script').data('userid');
    const admin_id = $(this).data('admin_id');

    const clickedButton = $(this);

    //laravelに送る→結果が帰って来た時の
    //プログラムも書く
    //
    $.ajax({
        url:'api/favorites/admins/'+ admin_id + '/update',
        method:'POST',
        dataType:'JSON',
        data:{
            'user_id':user_id,
            'admin_id':admin_id

        }

    }).done(function(data){

        console.log(data.message);

        if(data.message === 'add'){
            clickedButton.find('img').attr('src','images/parts/iine2.jpeg');
        }else{
            clickedButton.find('img').attr('src','images/parts/iine.png');
        }


    }).fail();


});

$('.btn-iine-a').on('click',function(){

    //ユーザーと企業（admin）のidをlaravelに
    //送りたいので、まずはプログラム上で取得して
    //変数に保存する
    const admin_id = $('#favorite-script').data('admini_d');
    const user_id = $(this).data('user_id');

    const clickedButton = $(this);

    //laravelに送る→結果が帰って来た時の
    //プログラムも書く
    //
    $.ajax({
        url:'api/favorites/users/'+ user_id + '/update',
        method:'POST',
        dataType:'JSON',
        data:{
            'user_id':user_id,
            'admin_id':admin_id

        }

    }).done(function(data){

        console.log(data.message);

        if(data.message === 'add'){
            clickedButton.find('img').attr('src','images/parts/iine2.jpeg');
        }else{
            clickedButton.find('img').attr('src','images/parts/iine.png');
        }


    }).fail();


});
