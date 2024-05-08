<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
    <style>
        .slider-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #picture {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="min-h-screen py-40 overflow-hidden" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE);">
        <div class="container mx-auto">
            <div class="flex w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-1/2 py-16 px-12">
                    <h2 class="text-3xl mb-4">Login</h2>
                    <p class="mb-4">
                        Welcome back! Please sign in to continue.
                    </p>
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf

                        @if($errors->has('failed'))
                        <x-alert type="danger" message="{{ $errors->first('failed') }}" />
                        @endif

                        @if(session('success'))
                        <x-alert type="success" message="{{ session('success') }}" />
                        @endif

                        <x-auth-input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" errorType="email" />

                        <x-auth-input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password" errorType="password" />

                        <div class="mt-5">
                            <input class="w-full bg-purple-500 py-3 text-center text-white" type="submit" value="Login">
                        </div>
                    </form>

                    <div class="mt-24 flex justify-end">
                        <p>Have an account? <a href="{{ route('register') }}" class="text-purple-500">Register</a></p>
                    </div>
                </div>

                <div class="w-1/2 flex items-center justify-center">
                    <div class="slider-container">
                        <div class="bg-no-repeat bg-cover bg-center shadow-xl" id="picture" style="background-image: url('');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // function to change background of the picture
            image1 = "{{ asset('assets/picture/images4.jpeg') }}";
            image2 = "{{ asset('assets/picture/images5.jpeg') }}";
            image3 = "{{ asset('assets/picture/images6.jpeg') }}";
            var images = [image1, image2, image3];

            var currentIndex = 0;

            function changeBackground() {
                $('#picture').css("background-image", "url('" + images[currentIndex] + "')");

                currentIndex = (currentIndex + 1) % images.length;
            }

            setInterval(changeBackground, 10000);

            changeBackground();
        });
    </script>
</body>

</html>