    <!-- Contact Section -->
    <section id="contact">
        <div class="section-title">
            <h2>Get In <span>Touch</span></h2>
            <p>Let's discuss your next project</p>
        </div>

        <div class="contact-content">
            <div class="contact-info">
                <h3>Let's work together!</h3>
                <p>I'm always open to discussing new projects, creative ideas, or opportunities to collaborate.</p>

                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email</strong>
                            <p>{{ $profile->email ?? 'mohammed.salem@example.com' }}</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone</strong>
                            <p>{{ $profile->phone ?? '+962 7X XXX XXXX' }}</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Location</strong>
                            <p>{{ $profile->location ?? 'Amman, Jordan' }}</p>
                        </div>
                    </div>
                </div>

                <div class="social-links">
                    @foreach($socials as $social)
                    <a href="{{ $social->url }}" target="_blank"><i class="{{ $social->icon }}"></i></a>
                    @endforeach
                </div>
            </div>

            <div class="contact-form">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </section>