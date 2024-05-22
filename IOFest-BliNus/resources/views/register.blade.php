<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>

<body>
    <div class="min-h-screen py-40 overflow-hidden" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE);">
        <div class="container mx-auto">
            <div class="flex w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
                <div class="w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center shadow-xl" id="picture">
                </div>
                <div class="w-1/2 py-16 px-12">
                    <h2 class="text-3xl mb-4">Register</h2>
                    <p class="mb-4">
                        Create your account. It's free and only take a minute
                    </p>
                    <form action="{{ route('register.post') }}" method="post">
                        @csrf
                        @if($errors->has('failed'))
                        <x-alert type="danger" message="{{ $errors->first('failed') }}" />
                        @endif
                        <div class="grid grid-cols-2 gap-5">
                            <input class="border focus:outline-none focus:border-gray-600 border-gray-400 rounded-sm py-1 px-2" type="text" name="firstname" id="firstname" placeholder="First Name">
                            <input class="border focus:outline-none focus:border-gray-600 border-gray-400 rounded-sm py-1 px-2" type="text" name="lastname" id="lastname" placeholder="Last Name">
                        </div>
                        
                        <x-auth-input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" errorType="email" />

                        <x-auth-input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password" errorType="password" />

                        <x-auth-input type="password" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}" placeholder="Confirm Password" errorType="confirm_password" />

                        <div class="mt-5">
                            <input class="border focus:outline-none focus:border-gray-600 border-gray-400" type="checkbox" name="checkbox" id="checkbox" required>
                            <span>
                                I accept the <a href="#" class="text-purple-500 font-semibold">Terms of use</a> & <a href="#" class="text-purple-500 font-semibold">Privacy Policy</a>.
                            </span>
                        </div>

                        <div class="mt-5">
                            <input class="w-full bg-purple-500 py-3 text-center text-white" type="submit" value="Register Now!">
                        </div>
                    </form>
                    <div class="mt-10 flex justify-end">
                        <p>Already have an account? <a href="{{ route('login') }}" class="text-purple-500">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('jquery-3.7.1.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            // function to change background of the picture
            image1 = "{{ asset('assets/picture/images1.jpeg ') }}";
            image2 = "{{ asset('assets/picture/images2.jpeg ') }}";
            image3 = "{{ asset('assets/picture/images3.jpeg ') }}";
            var images = [image1, image2, image3];

            var currentIndex = 0;

            function changeBackground() {
                $('#picture').css('background-image', 'url(' + images[currentIndex] + ')');

                currentIndex = (currentIndex + 1) % images.length;
            }

            setInterval(changeBackground, 10000);

            changeBackground();
        });
    </script>
</body>

</html>