$(function(){
    var fx= {
        'initModal':function(){
            if($('.modal-window').length===0){
                $('<div>').addClass('jquery-overlay').appendTo('body');
                return $('<div>').addClass('modal-window').appendTo('body');
            }else{
                return $('.modal-window');
            }
        }
    };
    $('.show-modal').click(function(){
        var id = $(this).attr('data-id');
        var modal = fx.initModal();
        $('<a>').addClass('modal-close').html('&times;').attr('href','#').click(function(){
            modal.remove();
        $('.jquery-overlay').remove();
        }).appendTo(modal);

    $.ajax({
        type:'post',
        url: '/ajax/modal',
        data: 'id=' + id,
        success:function(data){
           modal.append(data);
        },
        error:function(msg){
           console.log(msg);
        }
    });
  });
});
