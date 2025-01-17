<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-KTP</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script>
        function confirmDelete(nik) {
            if (confirm("Are you sure you want to delete " + nik + "?")) {
                window.location.href = "delete.php?nik=" + encodeURIComponent(nik);
            }
        }
    </script>
</head>
<body>
    <div class="center" style="min-height: 100vh; margin: 0 3%;">
        <div class="app" id="index">
            <h1>E-KTP Panel</h1>
            <a href="form.php" class="button">
                <p><i class="ri-add-fill" style="color: white;" alt=""></i>Add New Data</p>
            </a>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>NIK</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                <?php
                include 'connection.php';
    
                // Using prepared statements for security
                $query = "SELECT nik, name FROM e_ktp";
                if ($stmt = $conn->prepare($query)) {
                    $stmt->execute();
                    $stmt->bind_result($nik, $name);
    
                    // Displaying data
                    while ($stmt->fetch()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($nik) . "</td>";
                        echo "<td>" . htmlspecialchars($name) . "</td>";
                        echo "<td>
                            <a href='details.php?nik=" . urlencode($nik) . "'><i class='ri-eye-line' style='font-size:1.5em;' alt='view'></i></a>
                            <span style='font-size:1.5em;'>|</span>
                            <a href='edit.php?nik=" . urlencode($nik) . "'><i class='ri-pencil-fill' style='font-size:1.5em;' alt='edit'></i></a>
                            <span style='font-size:1.5em;'>|</span>
                            <a href='#' onclick='confirmDelete(\"" . htmlspecialchars($nik) . "\")'><i class='ri-delete-bin-fill' style='font-size:1.5em;' alt='delete'></i></a>
                        </td>";
                        echo "</tr>";
                    }
    
                    $stmt->close();
                } else {
                    echo "<tr><td colspan='3'>Error fetching records.</td></tr>";
                }
    
                $conn->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>
