$(function(){
    function quiz(e) {
        var correct=0;
        var questions=$('.questions input[data-correct=yes]').length;
        var answered=$('.questions input[type=radio]:checked')
        $(answered).each(function(idx, elem){
            if ($(elem).data('correct') == 'yes') correct++;
        });
        var klass = 'success';
        var message = 'Felicitari! Ati raspuns corect la toate intrebarile.';
        var show_tips = true;
        if ( answered.length < questions ) {
            klass = 'fail';
            message = 'Nu ati raspuns la toate intrebarile.';
            show_tips = false;
        } else if ( correct < questions ) {
            klass = 'fail';
            message = 'Ati raspuns corect la '+ correct +' intrebari din '+ questions + '.';
        } else {

        }
        $('#answers')
            .removeClass('fail')
            .removeClass('success')
            .addClass(klass)
            .html(message);

        if ( show_tips ) {
            $('.questions .tip').show();
        } else {
            $('.questions .tip').hide();
        }

        e.preventDefault();
        return false;
    }
    $('#quiz').on('submit', quiz);
});
