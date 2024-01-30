<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <?php
        // Function to fetch user data from the JSONPlaceholder API
        function getUsers()
        {
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }

        // Get the list of users
        $users = getUsers();

        // Check if users are available
        if (!empty($users)) {
            echo "<h2 class='mb-4'>User Information:</h2>";

            // Display user information using Bootstrap cards
            foreach ($users as $user) {
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $user['name'] . "</h5>";
                echo "<p class='card-text'><strong>Email:</strong> " . $user['email'] . "</p>";
                echo "<p class='card-text'><strong>Username:</strong> " . $user['username'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='alert alert-info'>No users found.</p>";
        }

        echo "<pre>";
        echo print_r($users);
        echo "</pre>";
        ?>
    </div>


</body>

</html>