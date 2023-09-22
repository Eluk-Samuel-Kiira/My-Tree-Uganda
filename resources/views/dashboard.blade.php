@if (auth()->user()->status==0)
    <script>
        window.location.href = "{{route('payment.modes')}}";
    </script>
@elseif (auth()->user()->deleted==1)
    <script>
        window.location.href = "{{route('account.modes')}}";
    </script>
@elseif (auth()->user()->status==1)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        @livewire("message-section")

    </x-app-layout>
@endif

<script>
    // Function to update the chat title based on the message date
    function updateChatTitle(messageDate) {
        const chatTitle = document.getElementById('chatTitle');
        chatTitle.textContent = `${messageDate}`;
    }

    // Function to handle the intersection observer callback
    function handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Get the message date from the in-focus message
                const messageDateSpan = entry.target.querySelector('.date');
                const messageDate = messageDateSpan.textContent;

                // Call the function to update the chat title
                updateChatTitle(messageDate);
            }
        });
    }

    // Create an intersection observer
    const observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.5, // Adjust the threshold as needed
    });

    // Add the observer to each message item
    const messageItems = document.querySelectorAll('.message-item');
    messageItems.forEach(item => {
        observer.observe(item);
    });
</script>


