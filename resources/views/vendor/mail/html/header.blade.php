<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://tinka.world/assets/img/tinka-logo.png" class="logo" alt="App Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
