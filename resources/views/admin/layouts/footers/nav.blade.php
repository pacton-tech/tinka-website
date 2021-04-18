<div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ now()->year }} <a href="{{ env('APP_URL') }}" class="font-weight-bold ml-1" target="_blank">{{ env('COMPANY_NAME') }}</a>
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
                <a href="{{ env('HELP_URL') }}" class="nav-link" target="_blank">Help and Support</a>
            </li>
        </ul>
    </div>
</div>