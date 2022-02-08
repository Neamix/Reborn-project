<footer class="footer w-100">
   <div class="container">
        <div class="footer-brand w-100 d-flex justify-content-center">
                <div class="row w-100">
                    <div class="col-md-4">
                        <div class="social-networks mt-3">
                        @if(config('siteSettings.youtube_url'))
                            <a href="{{ config('siteSettings.youtube_url') }}" rel="noopener"
                            class="youtube text-white" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
                        @if(config('siteSettings.facebook_url'))
                            <a href="{{ config('siteSettings.facebook_url') }}" rel="noopener"
                            class="facebook text-white" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        @endif
                        @if(config('siteSettings.discord_id'))
                            <a href="{{ config('siteSettings.discord_id') }}" rel="noopener"
                            class="facebook text-white" target="_blank">
                            <i class="fab fa-discord"></i>
                            </a>
                        @endif
                        @if(config('siteSettings.contact_email'))
                            <a href="{{ config('siteSettings.contact_email') }}" rel="noopener"
                            class="facebook text-white" target="_blank">
                            <i class="fas fa-envelope-open"></i>
                            </a>
                        @endif
                    </div>
                    </div>
                    <div class="col-md-4 logo-area text-center">
                        <img src="{{ asset('image/logo.png') }}" alt="logo" class="">
                    </div>
                    <div class="col-md-4 paypal text-end">
                        <img src="{{ asset('image/paypal.png') }}" alt="paypal" class="">
                    </div>
                </div>
            </div>
            <div class="row lower-footer">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p>Copyright reserved to Reborn team</p>
                    </div>
                </div>
            </div>
    </div>
</footer>

<!-- @forelse($BacklinksProvider as $backlink)
                        <li>
                            <a href="{{ $backlink->url }}" target="_blank" rel="noopener">
                                @if($backlink->image)
                                    <img src="{{ route('images.image', ['image'=> $backlink->image->filename]) }}"
                                         loading="lazy"
                                         class="img-fluid d-none d-sm-inline"
                                         width="24" height="24" alt="{{ $backlink->name }}">
                                @endif
                                {{ $backlink->name }}
                            </a>
                        </li>
                    @empty
                        <span class="small">
                            {{ __('footer.backlinks.no-backlink') }}
                        </span>
                    @endforelse -->
