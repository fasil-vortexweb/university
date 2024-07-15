<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>University | Manage Courses</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        #sidebar {
            height: 100vh;
            position: fixed;
        }

        .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        .main-content {
            margin-left: 250px;
        }

        .course-card {
            transition: transform 0.2s;
        }

        .course-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Include Sidebar -->
            <?php include './inc/sidebar.php'; ?>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Include Navbar -->
                <?php include './inc/navbar.php'; ?>

                <!-- Dummy Data Content -->
                <div class="container mt-4">
                    <div class="d-flex w-full align-items-center justify-content-between">

                        <h1>
                            <?php
                            require_once 'utils.php';
                            $page_url = basename($_SERVER['REQUEST_URI']);
                            $title = get_title($page_url);
                            echo $title;
                            ?>
                        </h1>

                        <a href='add_course.php' class="btn btn-primary">Add</a>

                    </div>
                    <hr>

                    <div class="row">
                        <?php
                        $courses = [
                            [
                                'id' => 1,
                                'title' => 'Introduction to Computer Science',
                                'description' => 'An overview of the fundamental concepts of computer science.',
                                'youtube_link' => 'https://www.youtube.com/embed/your-video-id-1'
                            ],
                            [
                                'id' => 2,
                                'title' => 'Data Structures and Algorithms',
                                'description' => 'Learn about the basics of data structures and algorithms.',
                                'youtube_link' => 'https://www.youtube.com/embed/your-video-id-2'
                            ],
                            [
                                'id' => 3,
                                'title' => 'Web Development',
                                'description' => 'A comprehensive guide to modern web development.',
                                'youtube_link' => 'https://www.youtube.com/embed/your-video-id-3'
                            ]
                        ];

                        foreach ($courses as $course) {
                            echo '
                            <div class="col-md-4">
                                <div class="card mb-4 course-card">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $course['title'] . '</h5>
                                        <p class="card-text">' . $course['description'] . '</p>
                                        <a href="course_details.php?id=' . $course['id'] . '" class="btn btn-primary">View Course</a>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>