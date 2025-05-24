<?php get_header(); ?>

<section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-20 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold">Riyadh Al-Narjis Dental Clinic</h1>
        <p class="text-xl mt-4">Experience the Future of Patient Interaction</p>
        <button class="mt-6 bg-white text-blue-600 px-6 py-3 rounded shadow hover:bg-gray-100">Book an Appointment</button>
    </div>
</section>

<section class="py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-8">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-100 p-6 rounded shadow">
                <h3 class="text-xl font-semibold mb-2">General Dentistry</h3>
                <p>Comprehensive dental care for patients of all ages.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded shadow">
                <h3 class="text-xl font-semibold mb-2">Cosmetic Dentistry</h3>
                <p>Enhance your smile with veneers, whitening, and more.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded shadow">
                <h3 class="text-xl font-semibold mb-2">Orthodontics</h3>
                <p>Braces, aligners, and other treatments for straight teeth.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-6">Talk to Our AI Assistant</h2>
        <iframe
            src="https://your-flowtix-chat-url.com/embed "
            width="100%"
            height="400"
            frameborder="0"
            title="FlowTix Chat - Clinic Demo"
            class="rounded shadow"
        ></iframe>
    </div>
</section>

<?php get_footer(); ?>
