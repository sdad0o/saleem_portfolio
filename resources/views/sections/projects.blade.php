    <!-- Projects Section -->
    <section id="projects">
        <div class="section-title">
            <h2>My <span>Projects</span></h2>
            <p>Explore some of my recent work and case studies</p>
        </div>

        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <div class="project-image">
                    <i class="{{ $project->icon }}"></i>
                </div>
                <div class="project-content">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>

                    <div class="project-tags">
                        @foreach($project->tags as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <div class="project-links">
                        <a href="{{ $project->demo_link }}" target="_blank"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                        <a href="{{ $project->github_link }}" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>