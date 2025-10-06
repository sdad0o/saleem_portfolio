    <!-- Experience Section -->
    <section id="experience">
        <div class="section-title">
            <h2>My <span>Journey</span></h2>
            <p>Professional experience and education timeline</p>
        </div>

        <div class="timeline">
            @foreach($experiences as $experience)
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date"><i class="{{ $experience->icon }}"></i> {{ $experience->date }}</div>
                    <h3>{{ $experience->title }}</h3>
                    <h4>{{ $experience->company }}</h4>
                    <p>{{ $experience->description }}</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
            @endforeach
        </div>
    </section>