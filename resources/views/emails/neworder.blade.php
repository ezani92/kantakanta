@component('mail::message')
# Hello {{ $content['user']->name }}!

Below is your new order details, You need to pay in order to receive the item.


@component('mail::table')
| Item             | Details                                                       |
| -----------------|---------------------------------------------------------------|
| Surgery Date     | {{ gmdate("d M Y",$content['order']->surgery_date) }}         |
| Surgery State    | {{ $content['order']->surgery_state }}                        |
| Surgery Hospital | {{ $content['order']->surgery_hospital }}                     |
| Surgery Eyes     | {{ $content['order']->surgery_eyes }}                         |
| Surgery Prodecure| {{ $content['order']->surgery_procedure }}                    |
@endcomponent

Click Button Below To Pay Your Order

@component('mail::button', ['url' => 'https://kantakanta.dev/pay'])
Pay Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

