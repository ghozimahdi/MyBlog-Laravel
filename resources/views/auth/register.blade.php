<x-layout>
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            <p class="text-2xl">Register MyBlogs</p>
            <form method="POST" action="{{route('register')}}">
                @csrf

                <div class="flex flex-col mt-4">
                    <input placeholder="Username" type="text" name="username" value="{{old('username')}}"/>
                    @error('username')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-4">
                    <input placeholder="Email" type="text" name="email" value="{{old('email')}}"/>

                    @error('email')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-4">
                    <input placeholder="Password" type="password" name="password"/>

                    @error('password')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-4">
                    <input placeholder="Confirm Password" type="password" name="password_confirmation"/>

                    @error('password')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <button class="mt-4" type="submit">Register</button>
            </form>
        </div>
    </div>
</x-layout>
