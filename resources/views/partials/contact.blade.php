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
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-gray-300 text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Your Name" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-300 text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="your@example.com" required>
                </div>
                <div>
                    <label for="subject" class="block text-gray-300 text-sm font-medium mb-2">Subject</label>
                    <input type="text" id="subject" name="subject"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Project Inquiry, Collaboration, etc.">
                </div>
                <div>
                    <label for="message" class="block text-gray-300 text-sm font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="5"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Your message..." required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
