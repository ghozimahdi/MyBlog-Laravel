<x-layout>
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            @error('failed')
            <p class="error mb-4">{{$message}}</p>
            @enderror

            <p class="text-2xl">Login MyBlogs</p>
            <form method="POST" action="{{route('login')}}">
                @csrf

                <div class="flex flex-col mt-4">
                    <input placeholder="Email" type="text" name="email" value="{{old('email')}}"/>

                    @error('email')
                    <p class="error">{{$message}}</p>
                    @enderror

                    <input placeholder="Password" class="mt-4" type="password" name="password"/>

                    @error('password')
                    <p class="error">{{$message}}</p>
                    @enderror

                    <div class="mt-4">
                        <input
                            type="checkbox"
                            name="remember"
                            value="{{old('remember')}}"
                        />
                        <label for="remember" class="text-white">Remember me</label>
                    </div>
                </div>
                <button
                    class="mt-4 "
                    type="submit"
                >Login
                </button>
            </form>
        </div>
    </div>
</x-layout>
