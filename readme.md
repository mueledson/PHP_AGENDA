
$query = "SELECT * FROM contacts";

 $stmt = $conn->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchAll();