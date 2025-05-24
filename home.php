<?php get_header(); ?>

<section id="hero" class="bg-cover bg-center h-screen flex items-center justify-center text-white text-center relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg')">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 max-w-xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Transform Your Business with Voice AI Assistant</h1>
        <p class="text-lg md:text-xl mb-8">24/7 customer support, appointment scheduling, lead capture — all through natural voice conversations.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded shadow">Try a Demo</a>
            <a href="#" class="bg-white hover:bg-gray-100 text-blue-600 border border-blue-600 px-6 py-3 rounded">Start Free Trial</a>
            <a href="https://www.linkedin.com/in/mohammed-maaz-seo-analyst/ " target="_blank" rel="noopener noreferrer" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded shadow">Request a Demo</a>
        </div>
    </div>
</section>

<section id="features" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded shadow text-center">
                <span class="text-3xl text-blue-500">🤖</span>
                <h3 class="text-xl font-semibold mt-4">24/7 Customer Support</h3>
                <p class="mt-2 text-gray-600">Provide instant assistance without human intervention.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <span class="text-3xl text-blue-500">📅</span>
                <h3 class="text-xl font-semibold mt-4">Appointment Scheduling</h3>
                <p class="mt-2 text-gray-600">Automate booking and reduce no-shows.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <span class="text-3xl text-blue-500">📥</span>
                <h3 class="text-xl font-semibold mt-4">Lead Capture & Qualification</h3>
                <p class="mt-2 text-gray-600">Capture leads efficiently and qualify them automatically.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <span class="text-3xl text-blue-500">💬</span>
                <h3 class="text-xl font-semibold mt-4">Natural Language Understanding</h3>
                <p class="mt-2 text-gray-600">Support multiple languages with advanced NLU capabilities.</p>
            </div>
        </div>
    </div>
</section>

<section id="benefits" class="py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Business Impact</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold">Reduce Costs</h3>
                <p class="mt-2 text-gray-600">Lower operational expenses by up to 40%.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold">Customer Satisfaction</h3>
                <p class="mt-2 text-gray-600">Improve satisfaction scores by +35%.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold">Save Time</h3>
                <p class="mt-2 text-gray-600">Save hundreds of hours monthly.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="text-xl font-semibold">Conversion Rates</h3>
                <p class="mt-2 text-gray-600">Increase conversion rates by +28%.</p>
            </div>
        </div>
    </div>
</section>

<section id="integrations" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">Trusted Integrations</h2>
        <div class="flex flex-wrap justify-center gap-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-calendar.png" alt="Google Calendar" width="80">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hubspot.png" alt="HubSpot" width="80">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/salesforce.png" alt="Salesforce" width="80">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stripe.png" alt="Stripe" width="80">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zapier.png" alt="Zapier" width="80">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twilio.png" alt="Twilio" width="80">
        </div>
    </div>
</section>

<section class="py-16 bg-blue-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Transform Your Business?</h2>
        <p class="text-lg mb-6 max-w-xl mx-auto">
            Speak to our team and see how FlowTix Chat can automate your customer interactions.
        </p>
        <a
            href="https://www.linkedin.com/in/mohammed-maaz-seo-analyst/ "
            target="_blank"
            rel="noopener noreferrer"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded shadow"
        >
            Request a Demo
        </a>
    </div>
</section>

<?php get_footer(); ?>
