<html>
    <head>
        <title>Test</title>
    </head>
    <body>

        <form method="POST" action="{{ action('paymentController@acceptpayment') }}">
        {{ csrf_field() }}
            <input type="text" name="price" placeholder="price">
            <input type="text" name="email" placeholder="email">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">SUBMIT</button>

        </form>


    </body>
</html>