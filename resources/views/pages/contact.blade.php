<x-page-layout>
    <x-slot name="page_title">
        <title>Contact Page</title>
    </x-slot>


    <h1>
        Contact Us
    </h1>

    <form method="POST" action="{{ route('submit_contact') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="name" class="block">Name</label>
            <input type="text" id="name" name="client_name">
        </div>
        <div>
            <label for="email" class="block">Email</label>
            <input type="text" name="client_email">
        </div>
        <div>
            <label for="subject" class="block">Subject</label>
            <input type="text" id="subject" name="subject">
        </div>
        <div>
            <label for="msg" class="block">Enter Message</label>
            <textarea type="text" id="msg" name="msg"></textarea>
        </div>
        <div>
            <button class="bg-blue-700 text-white py-1 px-6">
                Submit
            </button>
        </div>

    </form>
</x-page-layout>