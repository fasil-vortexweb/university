<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php

            $nav_items = [
                ['label' => "Courses", 'url' => 'manage_courses.php', 'icon' => 'bi bi-book-fill'],
                ['label' => "Tests", 'url' => 'manage_tests.php', 'icon' => 'bi bi-card-checklist'],
                ['label' => "Events", 'url' => 'manage_events.php', 'icon' => 'bi bi-calendar-event-fill'],
                ['label' => "Help", 'url' => 'help.php', 'icon' => 'bi bi-question-circle-fill'],
            ];

            $page_url = basename($_SERVER['REQUEST_URI']);

            foreach ($nav_items as $item) {
                $active_class = $page_url == $item['url'] ? 'active text-white' : '';
                echo "<li class='nav-item mr-2'>
                        <a class='nav-link $active_class' href='{$item['url']}'>
                            {$item['label']}
                            <i class='{$item['icon']} ml-2'></i>
                        </a>
                      </li>";
            }


            ?>
            <!-- <li class="nav-item">
                <a class="nav-link" href="manage_courses.php">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage_tests.php">Tests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage_events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="help.php">Help</a>
            </li> -->
        </ul>
    </div>
</nav>