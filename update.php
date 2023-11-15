<?php
include 'config/database.php';

// Initialize variables
$name = $username = $wits = $value = $buy = $withdraw = '';

// Check if 'updateid' is provided in the URL
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    $sql = "SELECT id, name, username, wits, value, buy, withdraw FROM member_table WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $name = $row['name'];
        $username = $row['username'];
        $wits = $row['wits'];
        $value = $row['value'];
        $withdraw = $row['withdraw'];
        $buy = $row['buy'];


        if (isset($_POST['submit'])) {
            // Retrieve updated values from the form
            $name = $_POST['name'];
            $username = $_POST['username'];
            $wits = $_POST['wits'];
            $value = $_POST['value'];
            $withdraw = $_POST['withdraw'];
            $buy = $_POST['buy'];

            // Check if 'withdraw' index is set in $_POST array before accessing it
            //$withdraw = isset($_POST['withdraw']) ? $_POST['withdraw'] : '';

            // Prepare the update statement using prepared statements
            $sql = "UPDATE member_table SET name=?, username=?, wits=?, value=?, buy=?, withdraw=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("siisssi", $name, $username, $wits, $value, $buy, $withdraw, $id);
            $stmt->execute();

            if ($stmt) {
                header('Location: updatedisplay.php');
                exit(); // Ensure script execution stops after redirection
            } else {
                die("Update failed: " . $conn->error);
            }
        }
    } else {
        echo "No records found for the given ID.";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/updatequerries.css">
    <title>Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
                <label>Wits</label>
                <input type="" name="wits" id="witsInput" class="form-control" value="<?php echo $wits; ?>">
            </div>
            <div class="form-group">
                <label>Value</label>
                <input type="text" name="value" id="valueInput" class="form-control" value="<?php echo $value; ?>">
            </div>
            <div class="form-group">
                <label>withdraw</label>
                <input type="text" name="withdraw" class="form-control" value="<?php echo $withdraw; ?>">
            </div>
            <div class="form-group">
                <label>Buy</label>
                <input type="text" name="buy" class="form-control" value="<?php echo $buy; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


    <script src="script3.js"></script>
</body>

</html>