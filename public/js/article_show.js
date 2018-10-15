$(document).ready(function(){
    $('.js-like-article').on('click', function(e){
        e.preventDefault();
        $this = $(this);
        $this.toggleClass('fa-heart-o').toggleClass('fa-heart');

        $.ajax({
            method: 'POST',
            url: $this.attr('href')
        }).done(function(data) {
            $('.js-like-article-count').html(data.hearts);
        });

    });
});