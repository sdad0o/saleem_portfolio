<!-- Testimonials Section -->
    <section id="testimonials">
        <div class="section-title">
            <h2>Client <span>Testimonials</span></h2>
            <p>What people say about my work</p>
        </div>

        <div class="testimonials-slider-container">
            <div class="testimonials-slider" id="testimonialsSlider">
                <!-- Sample testimonials - replace with your PHP loop -->
                @forelse ($testimonials as $testimonial)
                    <div class="testimonial-card">
                        <p class="message">“{{ $testimonial->message }}”</p>
                        <h4 class="name">{{ $testimonial->name }}</h4>
                        @if($testimonial->position)
                            <p class="position">{{ $testimonial->position }}</p>
                        @endif
                    </div>
                @empty
                    <p style="text-align:center; color:gray;">No testimonials yet.</p>
                @endforelse
            </div>

            <!-- Navigation Arrows -->
            <div class="slider-nav">
                <button class="slider-arrow" id="prevBtn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="18 15 12 9 6 15"></polyline>
                    </svg>
                </button>
                <button class="slider-arrow" id="nextBtn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Pagination Dots -->
        <div class="slider-dots" id="sliderDots"></div>

        <!-- Button to open modal -->
        <div style="text-align:center; margin-top:3rem;">
            <button id="openModalBtn" class="btn btn-primary">Add Your Testimonial</button>
        </div>

        <!-- Modal -->
        <div id="testimonialModal" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Submit a Testimonial</h3>
                <form id="testimonialForm">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email (optional)">
                    <input type="text" name="position" placeholder="Your Position">
                    <textarea name="message" placeholder="Your message..." required></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div id="testimonialStatus"></div>
                </form>
            </div>
        </div>
    </section>

<script>
        // Vertical Slider Logic
        const slider = document.getElementById('testimonialsSlider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('sliderDots');
        const cards = slider.querySelectorAll('.testimonial-card');
        
        let currentIndex = 0;
        const totalCards = cards.length;
        
        // Create pagination dots
        for (let i = 0; i < totalCards; i++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }
        
        const dots = dotsContainer.querySelectorAll('.dot');
        
        function updateSlider() {
            const cardHeight = cards[0].offsetHeight;
            const gap = 32; // 2rem gap
            const offset = currentIndex * (cardHeight + gap);
            slider.style.transform = `translateY(-${offset}px)`;
            
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
            
            // Update button states
            prevBtn.classList.toggle('disabled', currentIndex === 0);
            nextBtn.classList.toggle('disabled', currentIndex === totalCards - 1);
        }
        
        function goToSlide(index) {
            currentIndex = index;
            updateSlider();
        }
        
        function nextSlide() {
            if (currentIndex < totalCards - 1) {
                currentIndex++;
                updateSlider();
            }
        }
        
        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        }
        
        prevBtn.addEventListener('click', prevSlide);
        nextBtn.addEventListener('click', nextSlide);
        
        // Auto-slide (optional)
        let autoSlideInterval = setInterval(() => {
            if (currentIndex < totalCards - 1) {
                nextSlide();
            } else {
                currentIndex = 0;
                updateSlider();
            }
        }, 5000);
        
        // Pause auto-slide on hover
        slider.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
        slider.addEventListener('mouseleave', () => {
            autoSlideInterval = setInterval(() => {
                if (currentIndex < totalCards - 1) {
                    nextSlide();
                } else {
                    currentIndex = 0;
                    updateSlider();
                }
            }, 5000);
        });
        
        // Initial update
        updateSlider();

        // Modal logic
        const modal = document.getElementById('testimonialModal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.querySelector('.close-btn');

        openModalBtn.onclick = () => modal.style.display = 'flex';
        closeModalBtn.onclick = () => modal.style.display = 'none';
        window.onclick = (e) => { if (e.target === modal) modal.style.display = 'none'; };

        // Handle form submission (for demo only)
        const form = document.getElementById('testimonialForm');
        const statusDiv = document.getElementById('testimonialStatus');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            statusDiv.textContent = 'Submitting...';

            // Simulate submission delay
            setTimeout(() => {
                statusDiv.textContent = 'Thank you! Your testimonial has been submitted and is awaiting approval.';
                form.reset();
                setTimeout(() => modal.style.display = 'none', 2000);
            }, 1000);
        });
</script>
<!-- End of Testimonials Section -->