// iineボタン押した時のアクション
$('.btn-iine').on('click',function(){

    //ユーザーと企業（admin）のidをlaravelに
    //送りたいので、まずはプログラム上で取得して
    //変数に保存する
    const admin_id = $('#request-script').data('adminid');
    const user_id = $(this).data('userid');

    const clickedButton = $(this);

    //laravelに送る→結果が帰って来た時の
    //プログラムも書く
    //
    $.ajax({
        url:'../api/favorites/admins/'+ user_id + '/update',
        method:'POST',
        dataType:'JSON',
        data:{
            'user_id':user_id,
            'admin_id':admin_id,
            'host':'admin'
        }

    }).done(function(data){

        console.log(data.message);

        if(data.message === 'add'){
            clickedButton.find('img').attr('src','../images/parts/iine2.jpeg');
        }else{
            clickedButton.find('img').attr('src','../images/parts/iine.png');
        }


    }).fail();



});
// /////////承諾した場合/////////////
// $('.ok_btn').on('click',function(){

//     alert("承認しました");
//     window.location.href = "/admins/message/list";
// });

// //////////拒否した場合/////////////////
// $('.no_btn').on('click',function(){

//     alert('拒否しました');
//     window.location.href = "/";
// });
