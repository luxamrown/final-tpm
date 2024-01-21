<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity=
    "sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="m-5">

        <h1 class="text-center">Contach Us</h1>

        <form action="{{ route('sendMail') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="=" name="name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Subject</label>
                <input type="text" class="form-control" id="" name="subject">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">E-mail Address</label>
                <input type="email" class="form-control" id="" name="e_mail_address">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Message</label>
                <input type="text" class="form-control" id="" name="message">
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
