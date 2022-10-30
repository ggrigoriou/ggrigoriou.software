<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="submit-style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
   </head>
   <body>
        <?php
            $servername = "localhost";
            $username = "root"; 
            $password = "P@$$4D@t@B@S$";
            $dbname = "rating";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            mysqli_set_charset($conn, "utf8");

            $txtDiskName = $_POST['diskname'];
            $txtReleaseYear = $_POST['releaseyear'];
            $txtName = $_POST['name'];
            $txtRating = $_POST['rating'];
            $txtRatingText = $_POST['rating-text'];
            $sql = "INSERT INTO `rating-table`(`diskname`, `releaseyear`, `name`, `stars`, `ratingtext`) VALUES ('$txtDiskName', '$txtReleaseYear', '$txtName', '$txtRating', '$txtRatingText');";
            $result = mysqli_query($conn, $sql);
            if ($result) {
            echo "<div class='rating-header'>
                  <table class='display-album'>
                    <tr>
                        <td id='image'> 
                            <a href='https://open.spotify.com/album/7rEcSbHJu1nlLZejCUVSrS?si=WWLswLFYTfe9DGP1F1Qmkg' target='_parent'><img src='images/anthologio.jpeg'></a>
                        </td>
                        <td>
                            <p class='new-release'>New album release</p>
                            <a href='https://open.spotify.com/album/7rEcSbHJu1nlLZejCUVSrS?si=WWLswLFYTfe9DGP1F1Qmkg' target='_parent'><p class='album-title'>Ανθολόγιο για μικρούς και μεγάλους</p></a>
                        </td>
                    </tr>
                  </table>
                  </div>
                  <div class='rating-content'>
                    <div class='text'>
                        <center><h1> Σε ευχαριστούμε για τον χρόνο σου!</h1>
                        <h4> Η κριτική σου στάλθηκε με επιτυχία. </h4>
                        <a href='rating.html' target='display_section' id='backbtn'>Πίσω</a></center>
                    </div>
                </div>";
            }
            else {
                echo "<div class='rating-header'>
                  <table class='display-album'>
                    <tr>
                        <td id='image'> 
                            <a href='https://open.spotify.com/album/7rEcSbHJu1nlLZejCUVSrS?si=WWLswLFYTfe9DGP1F1Qmkg' target='_parent'><img src='images/anthologio.jpeg'></a>
                        </td>
                        <td>
                            <p class='new-release'>New album release</p>
                            <a href='https://open.spotify.com/album/7rEcSbHJu1nlLZejCUVSrS?si=WWLswLFYTfe9DGP1F1Qmkg' target='_parent'><p class='album-title'>Ανθολόγιο για μικρούς και μεγάλους</p></a>
                        </td>
                    </tr>
                  </table>
                  </div>
                  <div class='rating-content'>
                    <div class='text'>
                        <center><h1> Ουπς! Κάτι δεν πήγε καλά...</h1>
                        <h4> Υπήρξε ένα πρόβλημα κατά την υποβολή σου. Παρακαλώ προσπάθησε ξανά. </h4>
                        <a href='rating.html' target='display_section' id='backbtn'>Πίσω</a></center>
                    </div>
                </div>";
            }
            mysqli_close($conn);
        ?>
        
    </body>
</html>