    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
            </div>
            <div class="col-md-4 footer-col">
            <div class="footer_detail">
                @foreach ($datafooter as $df)
                <a href="" class="footer-logo">
                    {{ $df-> detail }}
                </a>
                @endforeach
        </div>
        <div class="footer-info">
            <p>
                <br>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a><br><br>
            &copy; <span id="displayYear"></span> Distributed By
            <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
            </p>
        </div>
        </div>
    </footer>
    <!-- footer section -->