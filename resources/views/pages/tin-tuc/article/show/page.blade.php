<div class=" content-article ">
    <div class="justify-content-center align-content-center mt-4 d-none d-md-flex">
        <img src="{{$article->image}}" alt="" style="width: 62.5vw;
        margin-bottom: 2rem; " class="img-fluid">
    </div>
    <div class="d-flex justify-content-center align-content-center mt-4 d-md-none">
        <img src="{{$article->image}}" alt="" style=" scale: 100%;
        margin-bottom: 2rem; " class="img-fluid">
    </div>
    <h2 align="center" class="tilte-text">{{$article->title}}</h2>
    <div class="d-flex justify-content-center align-content-center">
        <p class="datetime_text p-2 text-center pb-3"> Ngày đăng: {{$article->created_at}} </p>
    </div>

    <div class="content p-3 pb-5">
        {!! $article->content!!}
    </div>
    <div class="d-flex align-content-center justify-content-start">
        <a href="{{route('tin-tuc.index')}}" class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium super-long shadow-test button-shake">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
              <style>svg{fill:#ffffff}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            Xem nhiều bài hơn...</a>
    </div>
</div>
<style>
    body{
    }
    .super-long{
      width: 250px
    }
    .datetime_text{
        font-family: Mulish-SemiBold, sans-serif;
        color: #F79421;
    }
    .content-article {
      margin: 1rem 20rem 5rem 20rem;
        background-color: white;
    }
    .tilte-text {
        color: #59843d;
        font-family: "Mulish Black", sans-serif;
    }
    .figure-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media only screen and (max-width: 1300px) {
        .content-article {
            margin: 3rem 10rem 10rem 10rem ;
        }
    }
    @media only screen and (max-width: 1000px) {
        .content-article {
            margin: 3rem 5rem 10rem 5rem;
        }
    }

    @media only screen and (max-width: 800px) {
        .content-article {
            margin: 3rem 1rem 3rem 1rem;
        }
        .tilte-text {
            color: #59843d;
            font-family: "Mulish Black", sans-serif;
            margin-bottom: 1rem;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('.image img').addClass('img-fluid');
        $('.image ').addClass('figure-image');
    });
</script>
