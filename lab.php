<?php get_header(); ?>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl font-bold text-center mb-12">Voice AI Lab</h1>
        <p class="text-center max-w-2xl mx-auto mb-12">Test live demos of custom voice assistants built for different clients.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded shadow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clinic-demo-thumb.jpg" alt="Riyadh Dent Clinic" class="w-full h-48 object-cover mb-4">
                <h3 class="text-xl font-bold">Riyadh Al-Narjis Dental Clinic</h3>
                <p class="text-gray-600 mb-4">AI Voice Assistant for Appointment Booking</p>
                <a href="/riyadh-al_narjis-clinic" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Test Demo</a>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-bold">Client 2 Placeholder</h3>
                <p class="text-gray-600 mb-4">Coming Soon</p>
                <button disabled class="opacity-50 cursor-not-allowed inline-block bg-gray-400 text-white px-4 py-2 rounded">Test Demo</button>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-bold">Client 3 Placeholder</h3>
                <p class="text-gray-600 mb-4">Coming Soon</p>
                <button disabled class="opacity-50 cursor-not-allowed inline-block bg-gray-400 text-white px-4 py-2 rounded">Test Demo</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
