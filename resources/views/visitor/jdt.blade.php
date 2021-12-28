@extends('layout.app')

@section('content')
    <section style="margin-top: 7em">
        <h2>La jounrnée du TROYEN</h2>
        <h3>Edition 2022</h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12"><span class="image fit"><img src="assets/images/pic13.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic01.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic02.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic03.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic03.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic01.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic02.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic02.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic03.jpg" alt="" /></span></div>
                <div class="col-4"><span class="image fit"><img src="assets/images/pic01.jpg" alt="" /></span></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!--h3>Left &amp; Right</h3-->
                    <p><span class="image left"><img src="assets/images/pic14.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                    <p><span class="image right"><img src="assets/images/pic15.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        * Image */

.image {
    border-radius: 4px;
    border: 0;
    display: inline-block;
    position: relative;
}

    .image img {
        border-radius: 4px;
        display: block;
    }

    .image.left, .image.right {
        max-width: 40%;
    }

        .image.left img, .image.right img {
            width: 100%;
        }

    .image.left {
        float: left;
        padding: 0 1.5em 1em 0;
        top: 0.25em;
    }

    .image.right {
        float: right;
        padding: 0 0 1em 1.5em;
        top: 0.25em;
    }

    .image.fit {
        display: block;
        margin: 0 0 2em 0;
        width: 100%;
    }

        .image.fit img {
            width: 100%;
        }

    .image.main {
        display: block;
        margin: 0 0 3em 0;
        width: 100%;
    }

        .image.main img {
            width: 100%;
        }

        @media screen and (max-width: 736px) {

            .image.main {
                margin: 0 0 2em 0;
            }

        }
    </style>
@endsection
