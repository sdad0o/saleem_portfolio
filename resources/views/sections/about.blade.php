    <!-- About Section -->
    <section id="about">
        <div class="section-title">
            <h2>About <span>Me</span></h2>
            <p>Get to know more about my background and skills</p>
        </div>

        <div class="about-content">
            <div class="about-text">
                <p>{{ $about->description ?? 'Write something about yourself here...' }}</p>

                <div class="about-stats">
                    @if($about)
                    <div class="stat-item">
                        <h3>{{ $about->stat_1_value }}</h3>
                        <p>{{ $about->stat_1_label }}</p>
                    </div>
                    <div class="stat-item">
                        <h3>{{ $about->stat_2_value }}</h3>
                        <p>{{ $about->stat_2_label }}</p>
                    </div>
                    <div class="stat-item">
                        <h3>{{ $about->stat_3_value }}</h3>
                        <p>{{ $about->stat_3_label }}</p>
                    </div>
                    <div class="stat-item">
                        <h3>{{ $about->stat_4_value }}</h3>
                        <p>{{ $about->stat_4_label }}</p>
                    </div>
                    @endif
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