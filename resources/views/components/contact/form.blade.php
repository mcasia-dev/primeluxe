<section class="w-full bg-white py-20 sm:py-24 lg:py-28">
    <div class="max-w-4xl mx-auto px-6">
        <div class="transition-all duration-1000 ease-out" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-light text-gray-900 mb-12 text-center">Get In Touch With Us</h2>

            <form class="bg-white rounded-2xl border border-black/10 shadow-[0_20px_50px_rgba(18,18,18,0.12)] p-8 sm:p-10 lg:p-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name <span class="text-red-500">*</span></label>
                        <input type="text" id="first_name" name="first_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all"
                            required>
                    </div>
                    <div>
                        <label for="middle_name" class="block text-gray-700 font-medium mb-2">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all">
                    </div>
                    <div>
                        <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" id="last_name" name="last_name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all"
                            required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all"
                        required>
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number <span class="text-red-500">*</span></label>
                    <input type="tel" id="phone" name="phone" placeholder="+63 9XXXXXXXXX"
                        pattern="^(\+63|0)9\d{9}$"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all"
                        required>
                </div>

                <div class="mb-6">
                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject <span class="text-red-500">*</span></label>
                    <select id="subject" name="subject"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all"
                        required>
                        <option value="">Select a subject...</option>
                        <option value="consultation">Design Consultation</option>
                        <option value="quote">Request a Quote</option>
                        <option value="project">Discuss a Project</option>
                        <option value="support">Customer Support</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Message <span class="text-red-500">*</span></label>
                    <textarea id="message" name="message" rows="5"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500/50 focus:border-yellow-500 focus:outline-none transition-all resize-none"
                        placeholder="Tell us about your project or inquiry..." required></textarea>
                </div>

                <div class="flex justify-center pt-4">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-10 py-3 rounded-lg border border-yellow-500 bg-yellow-500 text-white font-medium hover:bg-yellow-600 hover:border-yellow-600 transition-all duration-300 shadow-lg">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
