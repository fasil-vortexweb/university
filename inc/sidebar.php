<!-- sidebar.php -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <h1 class="text-center pt-2">University 
                <i class="bi bi-mortarboard-fill"></i>
            </h1>
            <hr>
            <?php
            $sidebar_items = [
                ['label' => "Dashboard", 'url' => 'index.php', 'icon' => 'bi bi-mortarboard-fill'],
                ['label' => "Stream", 'url' => 'stream.php', 'icon' => 'bi bi-bell-fill'],
                ['label' => "Profile", 'url' => 'profile.php', 'icon' => 'bi bi-person-fill'],
                ['label' => "My Rating", 'url' => 'rating.php', 'icon' => 'bi bi-star-fill'],
                ['label' => "My Tests", 'url' => 'tests.php', 'icon' => 'bi bi-clipboard-fill'],
                ['label' => "My Courses", 'url' => 'courses.php', 'icon' => 'bi bi-book-fill'],
                ['label' => "My Groups", 'url' => 'groups.php', 'icon' => 'bi bi-people-fill'],
                ['label' => "My Grades", 'url' => 'grades.php', 'icon' => 'bi bi-clipboard-check-fill'] ,
                ['label' => "My Checks", 'url' => 'checks.php', 'icon' => 'bi bi-check-all'],
                ['label' => "My Certificates", 'url' => 'certificates.php', 'icon' => 'bi bi-mortarboard-fill'],
                ['label' => "My Competencies", 'url' => 'competencies.php', 'icon' => 'bi bi-person-badge'],
                ['label' => "My Events", 'url' => 'events.php', 'icon' => 'bi bi-calendar-event-fill'],
                ['label' => "My Programs", 'url' => 'programs.php', 'icon' => 'bi bi-megaphone-fill'],
                ['label' => "Individual Development Plan", 'url' => 'development_plan.php', 'icon' => 'bi bi-signpost'],
                ['label' => "Reports", 'url' => 'reports.php', 'icon' => 'bi bi-flag-fill'],
            ];
            $page_url = basename($_SERVER['REQUEST_URI']);

            foreach ($sidebar_items as $item) {
                $active_class = $page_url == $item['url'] ? 'active pl-4' : '';
                echo "<li class='nav-item'>
                        <a class='nav-link $active_class' href='{$item['url']}'>
                        <i class='{$item['icon']} mr-2'></i>
                        {$item['label']}
                        </a>
                      </li>";
            }
            ?>
        </ul>
    </div>
</nav>
