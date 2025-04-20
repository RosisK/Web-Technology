<!DOCTYPE html>  
<head>
  <title>Rosis Kharel</title> 
</head> 
<body> 
  <h1>Welcome Admin: Rosis Kharel <br> 
    <h2>Insert</h2> 
    <form action="insert.php" method="post"> 
      <input type="text" name="name" placeholder="Full Name" required> 
      <input type="email" name="email" placeholder="Email" required> 
      <input type="number" name="age" placeholder="Age" required>
      <button type="submit">Add User</button> 
    </form> 
    <h2>Update</h2> 
    <form action="update.php" method="post"> 
      <input type="number" name="id" placeholder="User ID" required> 
      <input type="text" name="name" placeholder="New Name" required> 
      <input type="number" name="age" placeholder="New Age" required> 
      <button type="submit">Update</button> </form> 
    <h2>Delete</h2> 
    <form action="delete.php" method="post"> 
      <input type="number" name="id" placeholder="User ID" required> 
      <button type="submit">Delete</button> 
    </form> 
    <h2>View Records</h2> 
    <form action="view.php" method="post"> 
      <button type="submit">View Records</button> 
    </form> 
</body> 
</html> 
