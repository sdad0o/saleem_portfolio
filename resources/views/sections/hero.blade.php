    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Hi, I'm <span>{{ $profile->name ?? 'Mohammed Salem' }}</span></h1>
                <h2>{{ $profile->title ?? 'Full Stack Developer & Designer' }}</h2>
                <p>{{ $profile->description ?? 'I create exceptional digital experiences...' }}</p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-image-circle">
                    <i class="fas fa-laptop-code"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->