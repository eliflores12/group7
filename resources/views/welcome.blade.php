<x-layout>

<div class="text-center mt-32 ml-96 mr-96 bg-gray-400 rounded-lg">
    <h1 class="text-3xl mb-8 font-semibold">
        Sign in
    </h1>

    <div class="mb-8">
    <div>
        <label for="" class="font-medium">Username
        <input type="text" class="w-full border-2 to-black rounded-full p-2" 
        placeholder="Enter your username">
        </label>
    </div>
    <div>
        <label for="" class="font-medium">Password
        <input type="password" class="w-full border-2 to-black rounded-full p-2"
        placeholder="Enter your password">
        </label>
    </div>
    <div>
        <button class="border-2 to-black rounded-lg font-medium p-2 mt-8">SIGN IN

        </button>
    </div>
    </div>

    <div>
        <div>
            <input type="checkbox" id='remember'>
            <label for="remember">Remember for 30 days</label>
        </div>
        <button>Forgot password</button>
    </div>

</div>       
</x-layout>