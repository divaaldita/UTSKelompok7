<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <form action="/submit-form" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="major">Major:</label>
        <input type="text" id="major" name="major" required><br><br>

        <label for="semester">Semester:</label><br>
        <input type="radio" id="semester1" name="semester" value="1" required>
        <label for="semester1">1</label><br>
        <input type="radio" id="semester2" name="semester" value="2" required>
        <label for="semester2">2</label><br>
        <input type="radio" id="semester3" name="semester" value="3" required>
        <label for="semester3">3</label><br>
        <input type="radio" id="semester4" name="semester" value="4" required>
        <label for="semester4">4</label><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>