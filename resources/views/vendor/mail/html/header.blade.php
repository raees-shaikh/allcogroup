<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('frontend/images/allco-group.png') }}" class="logo" alt="Logo" style="width:150px !important;max-height: none !important;">
            @endif
        </a>
    </td>
</tr>
