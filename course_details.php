<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>University | Course Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-4">
        <?php
        $courses = [
            1 => [
                'title' => 'Introduction to Computer Science',
                'description' => 'An overview of the fundamental concepts of computer science.',
                'details' => 'This course covers the basics of programming, algorithms, and data structures. You will learn about the history of computing, binary numbers, and how to write simple programs.',
                'youtube_link' => 'https://www.youtube.com/embed/your-video-id-1'
            ],
            2 => [
                'title' => 'Data Structures and Algorithms',
                'description' => 'Learn about the basics of data structures and algorithms.',
                'details' => 'In this course, you will explore various data structures such as arrays, linked lists, and trees. You will also learn about common algorithms for sorting and searching.',
                'youtube_link' => 'https://www.youtube.com/embed/your-video-id-2'
            ],
            3 => [
                'title' => 'Web Development',
                'description' => 'A comprehensive guide to modern web development.',
                'details' => 'This course teaches you how to build websites using HTML, CSS, and JavaScript. You will also learn about responsive design, web accessibility, and web performance optimization.',
                'youtube_link' => 'https://www.youtube.com/embed/your-video-id-3'
            ]
        ];

        $course_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
        $course = $courses[$course_id];
        ?>

        <a href="courses.php" class="btn btn-secondary mb-3"><i class="bi bi-arrow-left"></i> Back to Courses</a>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><?php echo $course['title']; ?></h1>
                <p class="card-text"><?php echo $course['description']; ?></p>
                <div class="embed-responsive embed-responsive-16by9 mb-3">
                    <iframe class="embed-responsive-item" src="<?php echo $course['youtube_link']; ?>" allowfullscreen></iframe>
                </div>
                <p class="card-text"><strong>Course Details:</strong> <?php echo $course['details']; ?></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>