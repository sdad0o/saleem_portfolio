    <!-- About Section -->
    <section id="about">
        <div class="section-title">
            <h2>About <span>Me</span></h2>
            <p>Get to know more about my background and skills</p>
        </div>

        <div class="about-content">
            <div class="about-text">
                <p>Hello! I'm {{ $profile->name }}, a passionate {{ strtolower($profile->title) }} who loves creating seamless user experiences.</p>
                <p>{{ $profile->description }}</p>

                <div class="about-stats">
                    <div class="stat-item">
                        <h3>50+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <h3>5+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3>30+</h3>
                        <p>Happy Clients</p>
                    </div>
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p>Technologies</p>
                    </div>
                </div>
            </div>

            <div class="skills-grid">
                @foreach($skills as $skill)
                <div class="skill-item">
                    <i class="{{ $skill->icon_class }}"></i>
                    <h4>{{ $skill->name }}</h4>
                </div>
                @endforeach
            </div>
        </div>
    </section>