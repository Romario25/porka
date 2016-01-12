<div class="subscription opensans">
    <form action="#" method="post" class="c-c x3d5--d x3d4--t x1--m sub-main">
        <p class="c title x1d2--m">Хотите <span class="fw600">свеженькое и лучшее?</span></p>
        <p class="c fs18 white">Получайте <span class="fw600">эксклюзивные фото</span> и видео <span class="fw600">самых горячих девушек</span> в <span class="fw600">лучшем качестве</span> первыми!</p>
        <div class="g">
            <div class="c x2d3--d x1d2--t x1--m"><input class="c email-subscribe" type="text" placeholder="Ваш e-mail"></div>
            <div class="c x1d3--d x1d2--t x1--m"><button class="c">Подписаться</button></div>
        </div>
    </form>

</div>
<script>
    $(function(){
        $("form.sub-main button.c").click(function(){

            var email = $(".email-subscribe").val();

            $.ajax({
                url: '/site/subscribe',
                type: 'POST',
                data: 'email='+email,
                success: function(sucess){
                    alert(sucess);
                    $(".email-subscribe").val("");
                }
            });
           return false;
        });
    })
</script>