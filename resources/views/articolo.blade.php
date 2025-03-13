<x-layout>

    <!-- Blog Post  -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h1 class="post-title">{{ $articolo['titolo'] }}</h1>

                <p class="meta-info">di <strong>{{ $articolo['autore'] }} <i class="bi bi-file-person"></i></strong></p>

                <!-- Blog Post Content -->
                <div class="post-content">
                    <img src="{{ $articolo['url_immagine'] }}" alt="Blog Image" class="img-fluid">

                    <p class="mt-3"> {{ $articolo['corpo'] }} <br>

                    <h5>Lorem</h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, doloremque voluptatum
                    corrupti expedita explicabo nulla eaque maxime mollitia asperiores eligendi minima distinctio
                    dignissimos vitae reiciendis molestiae quasi. Quam, reprehenderit magnam!Facilis beatae, eaque
                    nostrum corrupti eligendi fugiat. Quas inventore ab commodi architecto voluptate molestiae excepturi
                    impedit ducimus dolores eveniet, tenetur voluptas et error nam aperiam autem harum vel laboriosam
                    illo! dolor, sit amet consectetur adipisicing elit. Sint quasi nesciunt harum voluptates totam quae
                    quam! Dignissimos accusamus, quod, facilis pariatur voluptates sequi, enim voluptas porro explicabo
                    quo tenetur officia.</p>
                    <div class="btn-group mb-5">
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            onclick="location.href='/blog'"> <i class="bi bi-vector-pen"></i> Torna al blog</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
