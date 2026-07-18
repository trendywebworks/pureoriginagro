<?php 
/* Template Name: Contact */
get_header(); 
?>

<section class="contact-hero">
    <div class="hero-media"></div>
    <div class="wrap contact-hero-copy reveal">
    <div class="micro">Contact Pure Origin Agro</div>
    <h1>Let's start a clear<br><em>export conversation.</em></h1>
    <p>Share your ingredient requirement, target market, and expected volume. Our team will respond with practical
        next steps and export-ready support.</p>
    </div>
</section>
<section class="contact-main" id="contact-form">
    <div class="wrap contact-layout">
    <div class="contact-panel reveal">
        <div class="label">Send an enquiry</div>
        <h2 class="heading">Tell us what<br><em>you need.</em></h2>
        <form class="contact-form" onsubmit="event.preventDefault()">
        <div class="field-grid"><label>Full name<input type="text" name="name"
                placeholder="Your name"></label><label>Company<input type="text" name="company"
                placeholder="Company name"></label></div>
        <div class="field-grid"><label>Email<input type="email" name="email"
                placeholder="name@example.com"></label><label>Phone<input type="tel" name="phone"
                placeholder="+91 98765 43210"></label></div>
        <label>Product interest<select name="product">
            <option>Onion Powder</option>
            <option>Beetroot Powder</option>
            <option>Amla Powder</option>
            <option>Bulk / custom enquiry</option>
            </select></label>
        <label>Message<textarea name="message" rows="5"
            placeholder="Share quantity, destination country, packaging needs, or timeline."></textarea></label>
        <button class="btn" type="submit">Submit enquiry <b>↗</b></button>
        </form>
    </div>
    <aside class="contact-details reveal">
        <div class="label">Dummy contact details</div>
        <h2>We are ready when your details are.</h2>
        <p>These placeholders can be replaced once the final business address, phone number, and social links are
        confirmed.</p>
        <div class="detail-list">
        <div><span>Email</span><a href="mailto:info@pureoriginagro.com">info@pureoriginagro.com</a></div>
        <div><span>Phone</span><a href="tel:+919876543210">+91 98765 43210</a></div>
        <div><span>Office</span>
            <p>123 Export Avenue, Ahmedabad, Gujarat, India</p>
        </div>
        <div><span>Hours</span>
            <p>Monday to Saturday · 10:00 AM - 6:00 PM IST</p>
        </div>
        </div>
    </aside>
    </div>
</section>
<section class="contact-strip">
    <div class="wrap reveal">
    <div>
        <div class="label">Fast route</div>
        <h2>Need a bulk quote?</h2>
    </div><a class="btn btn-outline" href="mailto:info@pureoriginagro.com">Email us now <b>↗</b></a>
    </div>
</section>

<?php get_footer(); ?>
