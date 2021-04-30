@component('mail::message')
# Invoice {{ $data['invoice'] }} at {{ config('app.name') }}

Thank you for your subscription renewal. We have received your payment. Below is the details of your payment:

Description: {{ $data['description'] }}  
Amount: RM {{ number_format($data['amount'],2) }}  
Payment Method: BillPlz  
Payment Date/Time: {{ $data['updated_at'] }}  
Start: {{ $data['starts_at'] }}  
End: {{ $data['ends_at'] }}

@component('mail::button', ['url' => $data['url']])
View Invoice
@endcomponent

If you have any issue, please contact the administrator at {{ env('MAIL_FROM_ADDRESS') }}  

Thanks,<br>
{{ config('app.name') }}
@endcomponent