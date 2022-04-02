<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <x-form-header>Log In</x-form-header>
                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <!-- email -->
                    <x-div-wrapper class="mb-6">
                        <x-input-label :name="'email'">Email</x-input-label>
                        <x-input-field :type="'email'" :name="'email'" :value="old('email')" />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </x-div-wrapper>
                    <!-- password -->
                    <x-div-wrapper class="mb-6">
                        <x-input-label :name="'password'">Password</x-input-label>
                        <x-input-field :type="'password'" :name="'password'" />
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </x-div-wrapper>
                    <x-div-wrapper class="mb-6">
                        <x-submit-button>Submit</x-submit-button>
                        <!-- <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                            Submit
                        </button> -->
                    </x-div-wrapper>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>