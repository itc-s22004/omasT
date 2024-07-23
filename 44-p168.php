$conditions = array();
$ph_type = array();
$ph_value = array();
$sql = 'SELECT id, title, author, publisher, date, price FROM books';
if (!empty($title)) {
  $conditions[] = "title LIKE ? ESCAPE '#'";

