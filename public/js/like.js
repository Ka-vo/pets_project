$(function () {

    $('[data-item=likes]').each(function () {
        const $container = $(this);

        $container.on('click', function (e) {
            e.preventDefault();

            $.ajax({
                url: '/dogAndCats/like/like',
                method: 'POST'
            }).then(function (data) {
                $container.find('.fa-heart').toggleClass('far fas');
                $container.find('[data-item=likesCount]').text(data.likes);
            });
        });
    });
});
