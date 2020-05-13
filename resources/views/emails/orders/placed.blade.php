{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StemLab Email</title>
</head>
<body>
    <h3>You are recieving this mail because you placed asn order on Stemlab</h3>
    Order Id: {{$order->id}}<br>
    Order Email: {{$order->billing_email}}<br>
    Order Billing Name: {{$order->billing_name}}<br>
    Order Total: {{$order->billing_total}}<br>
</body>
</html> --}}

@component('mail::message')
    # Order Recieved

    Thank you for your order.

    **Order Id:** {{$order->id}}
    **Order Email:** {{$order->billing_email}}
    **Order Name:** {{$order->billing_name}}
    **Order Total:** {{ $order->billing_total }}

    **Item Ordered**
    @foreach ($order->products as $product)
        Name: {{$product->name}} <br>
        Price: NGN {{$product->billing_total}} <br>
        Quantity: {{$product->pivot->quantity }} <br>
    @endforeach

    You can get further details about your order by logging into our website.

    @component('mail::button', ['url'=> config('app.url'), 'color' => 'green'])
        Go To Website
    @endcomponent

    Thank you again for choosing us.

    Regards, <br>
    {{config('app.name')}}
@endcomponent
