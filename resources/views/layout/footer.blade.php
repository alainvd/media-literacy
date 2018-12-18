<!-- Footer -->
<footer id="footer" class="dark">

    <!-- Copyrights -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                <img src="{{ asset('img/mediaLiteracyLogoFooter.png')}}" alt="" class="footer-logo" style="width: 250px">
            </div>

            <div class="col_half col_last tright" style="display: flex;flex-direction: column;">
                <div class="copyrights-menu copyright-links fright clearfix">
                    <a href="{{route('home')}}">@lang('menu.home')</a>/
                    <a href="{{route('events_map')}}">@lang('menu.events')</a>/
                    <a href="/resources/">@lang('menu.resources')</a>/
                    <a href="/about/">@lang('menu.about')</a>/
                    <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/CodeWeek+Privacy+Statement+Contact+Points.pdf">@lang('menu.privacy')</a>/
                    <a href="https://ec.europa.eu/digital-single-market/en/news/74752/74752">@lang('menu.news')</a>
                </div>
                <div class="fright clearfix">
                    {{--<a href="https://www.facebook.com/codeEU" class="fright social-icon si-small si-borderless nobottommargin si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>--}}

                    {{--<a href="https://twitter.com/search?q=%23medialiteracy&amp;f=realtime" class="fright social-icon si-small si-borderless nobottommargin si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>--}}

                    {{--<a href="https://plus.google.com/+CodeweekEu/" class="fright social-icon si-small si-borderless nobottommargin si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>--}}

                    {{--<a href="https://github.com/codeeu/codeweek" class="fright social-icon si-small si-borderless nobottommargin si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>--}}
                </div>
            </div>

        </div>

    </div>
    <!-- #copyrights end -->

</footer>
<!-- #footer end -->




