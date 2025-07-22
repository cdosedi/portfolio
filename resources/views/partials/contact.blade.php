{{-- views/layouts/contact.blade.php --}}
{{-- Contact Section --}}
<section id="contact" class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-montserrat font-bold text-white mb-4">
                Get in <span class="text-blue-400">Touch</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto mb-8"></div>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Have a project in mind or just want to say hello? Feel free to reach out!
            </p>
        </div>

        <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-xl p-8 md:p-10">
            {{-- Success/Error Messages - Moved to top of card --}}
            <div id="message-container">
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-500/20 border border-green-500/50 rounded-lg text-green-100">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-6 p-4 bg-red-500/20 border border-red-500/50 rounded-lg text-red-100">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            </div>

            <form id="contact-form" action="/contact" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-gray-300 text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        placeholder="Your Name" required>
                    @error('name')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-300 text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                        placeholder="your@example.com" required>
                    @error('email')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="subject" class="block text-gray-300 text-sm font-medium mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subject') border-red-500 @enderror"
                        placeholder="Project Inquiry, Collaboration, etc.">
                    @error('subject')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-gray-300 text-sm font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="5"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none overflow-hidden @error('message') border-red-500 @enderror"
                        placeholder="Your message..." required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900 disabled:opacity-50 disabled:cursor-not-allowed">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        const messageContainer = document.getElementById('message-container');
        const messageTextarea = document.getElementById('message'); // Get the textarea element

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Clear old messages
            clearMessages();

            const formData = new FormData(form);
            submitBtn.disabled = true;
            submitBtn.innerText = 'Sending...';

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const result = await response.json();
                if (response.ok) {
                    // Success
                    form.reset();
                    showMessage(result.message, 'success');
                    // Reset textarea height to its original state after successful submission
                    messageTextarea.style.height = 'auto'; // Or whatever its default height is
                } else {
                    // Validation or server error
                    if (result.errors) {
                        Object.values(result.errors).forEach(error => {
                            showMessage(error[0], 'error');
                        });
                    } else {
                        showMessage(result.message || 'Something went wrong.', 'error');
                    }
                }
            } catch (error) {
                showMessage('An unexpected error occurred.', 'error');
                console.error(error);
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });

        function clearMessages() {
            messageContainer.innerHTML = '';
        }

        function showMessage(msg, type = 'success') {
            const isSuccess = type === 'success';
            const bgColor = isSuccess ? 'bg-green-500/20' : 'bg-red-500/20';
            const borderColor = isSuccess ? 'border-green-500/50' : 'border-red-500/50';
            const textColor = isSuccess ? 'text-green-100' : 'text-red-100';
            const iconPath = isSuccess ?
                'M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z' :
                'M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z';

            const messageDiv = document.createElement('div');
            messageDiv.className = `mb-6 p-4 ${bgColor} border ${borderColor} rounded-lg ${textColor}`;
            messageDiv.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="${iconPath}" clip-rule="evenodd"></path>
                </svg>
                ${msg}
            </div>
        `;

            messageContainer.appendChild(messageDiv);

            // Scroll to top of the card to show the message
            messageContainer.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Auto-resize textarea
        function autoResizeTextarea(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
        }

        // Initialize textarea auto-resize
        messageTextarea.addEventListener('input', function() {
            autoResizeTextarea(this);
        });

        // Set initial height based on content
        autoResizeTextarea(messageTextarea);
    });
</script>
